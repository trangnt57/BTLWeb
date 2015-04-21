<?php

namespace Project\HoinhabaoBundle\Controller;
use Project\HoinhabaoBundle\Entity\Hoivien;
use Project\HoinhabaoBundle\Entity\Tacpham;
use Project\HoinhabaoBundle\Entity\Giaithuong;
use Project\HoinhabaoBundle\Entity\Theloai;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class TacphamController extends Controller
{
    public function indexAction($tendangnhap)
    {
    	
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
    	$mahoivien = $hoivien->getMahv();
        $tacpham = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Tacpham')->findByMahv(''.$mahoivien.'');
        
        $build['tendangnhap'] = $tendangnhap;
        $build['tacpham'] = $tacpham;
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_show_all.html.twig', $build);
    
    }

    public function addAction($tendangnhap, Request $request){
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
    	$tacpham = new Tacpham();
    	$form = $this->createFormBuilder($tacpham)
    		->add('tentacpham', 'text', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Tên Tác Phẩm'),
            ))
    		->add('mota', 'textarea', array(
                'attr' => array('class' => 'form-control', 'rows'=> '3')
            ))
    		->add('ngaysangtac','date',array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'form-control', 'placeholder' => 'yyyy-MM-dd')
                ))
    		->add('matheloai', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Theloai',
                'property' => 'tentheloai',
                'multiple' => false,
                'attr' => array('class' => 'form-control'),
            ))
           
            ->add('lienket', 'text',array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Đường link đến tác phẩm của bạn'),
            ))
            ->add('add', 'submit', array(
                'label' => 'Thêm',
                'attr' => array('class' => 'btn btn-primary mdi-av-playlist-add'),
            ))
            ->getForm();
        $tacpham->setMahv($hoivien);
        $form->handleRequest($request);
        if($form->isValid()){
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($tacpham);
        	$em->flush();
        	return new Response('Thêm tác phẩm thành công');
        }

        $build['form'] = $form->createView();
        $build['tendangnhap'] = $tendangnhap;
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_add.html.twig', $build);
    }

    public function editAction($matacpham, Request $request){
    	$em = $this->getDoctrine()->getManager();
    	$tacpham = $em->getRepository('ProjectHoinhabaoBundle:Tacpham')->findOneByMatacpham(''.$matacpham.'');
    	if(!$tacpham){
    		throw $this->createNotFoundException('Không tìm thấy tác phẩm với mã:' . $matacpham);
    	}

    	$form = $this->createFormBuilder($tacpham)
            ->add('tentacpham', 'text', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Tên Tác Phẩm'),
            ))
            ->add('mota', 'textarea', array(
                'attr' => array('class' => 'form-control', 'rows'=> '3')
            ))
            ->add('ngaysangtac','date',array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'form-control', 'placeholder' => 'yyyy-MM-dd')
                ))
            ->add('matheloai', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Theloai',
                'property' => 'tentheloai',
                'multiple' => false,
                'attr' => array('class' => 'form-control'),
            ))
           
            ->add('lienket', 'text',array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Đường link đến tác phẩm của bạn'),
            ))
            ->add('add', 'submit', array(
                'label' => 'Thêm',
                'attr' => array('class' => 'btn btn-primary mdi-av-playlist-add'),
            ))
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
        	$em->flush();
        	return new Response('Tác phẩm đã được cập nhật');
        }

        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_add.html.twig', $build);
    }


    public function deleteAction($matacpham, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $tacpham = $em->getRepository('ProjectHoinhabaoBundle:Tacpham')->findOneByMatacpham(''.$matacpham.'');;
        if (!$tacpham) {
          throw $this->createNotFoundException(
                  'Không tìm thấy tác phẩm ' . $tacpham
          );
        }
        $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMatacpham(''.$tacpham->getMatacpham().'');
        if($giaithuong){
            return new Response('Bạn phải xóa những giải thưởng liên quan đến tác phẩm này trước khi xóa tác phẩm');
        }
        $form = $this->createFormBuilder($tacpham)
                ->add('delete', 'submit')
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
          $em->remove($tacpham);
          $em->flush();
          return new Response('Xóa tác phẩm thành công');
        }
        
        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:tacpham:tacpham_add.html.twig', $build);
    }

    public function multideleteAction(Request $request){
        if(empty($_POST['xoa'])){
          throw $this->createNotFoundException(
                  'Không có tác phẩm nào được chọn'
          );  
        }
        else{
           foreach ($_POST['xoa'] as $checked){
               $em = $this->getDoctrine()->getManager();
               $tacpham = $em->getRepository('ProjectHoinhabaoBundle:Tacpham')->findOneByMatacpham(''.$checked.'');
               $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMatacpham(''.$tacpham->getMatacpham().'');
               if(!$giaithuong){
                    $em->remove($tacpham);
                    $em->flush();
                }else{
                    foreach($giaithuong as $gt){
                        $this->getDoctrine()->getManager()->remove($gt);
                        $this->getDoctrine()->getManager()->flush();
                    }
                    $em->remove($tacpham);
                    $em->flush();
                } 
            }
       
            return new Response('Xóa thành công');
           
        }
    }
   
}
