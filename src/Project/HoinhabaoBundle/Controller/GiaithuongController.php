<?php

namespace Project\HoinhabaoBundle\Controller;
use Project\HoinhabaoBundle\Entity\Hoivien;
use Project\HoinhabaoBundle\Entity\Tacpham;
use Project\HoinhabaoBundle\Entity\Giaithuong;
use Project\HoinhabaoBundle\Entity\Theloai;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class GiaithuongController extends Controller
{
    
    public function indexAction($tendangnhap)
    {
        
        $hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
        $mahoivien = $hoivien->getMahv();
        $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMahv(''.$mahoivien.'');
        
        $build['tendangnhap'] = $tendangnhap;
        $build['giaithuong'] = $giaithuong;
        return $this->render('ProjectHoinhabaoBundle:Tacpham:giaithuong_show_all.html.twig', $build);
    
    }
    public function addAction($tendangnhap, Request $request){
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
    	$giaithuong = new Giaithuong();
    	$form = $this->createFormBuilder($giaithuong)
    		->add('tengiaithuong', 'text', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Tên Giải Thưởng'),
            ))
    		->add('ngaydatgiai','date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'form-control', 'placeholder' => 'yyyy-MM-dd'),
                ))
    		->add('matacpham', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Tacpham',
                'property' => 'tentacpham',
                'multiple' => false,
                'attr' => array('class' => 'form-control', 'placeholder'=>'Chọn tác phẩm đạt giải'),
            ))
           
            ->add('add', 'submit',array(
                'label' => 'Thêm',
                'attr' => array('class' => 'btn btn-primary mdi-av-playlist-add'),

            ))
            ->getForm();
        $giaithuong->setMahv($hoivien);
        $form->handleRequest($request);
        if($form->isValid()){
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($giaithuong);
        	$em->flush();
        	return new Response('<p>Thêm giải thưởng thành công</p><a>Trở về</a>');
        }

        $build['form'] = $form->createView();
        $build['tendangnhap'] = $tendangnhap;
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }

   public function editAction($magiaithuong, Request $request){
        $em = $this->getDoctrine()->getManager();
        $giaithuong = $em->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findOneByMagiaithuong(''.$magiaithuong.'');
        if(!$giaithuong){
            throw $this->createNotFoundException('Không tìm thấy giải thưởng với id:' . $magiaithuong);
        }

        $form = $this->createFormBuilder($giaithuong)
            ->add('tengiaithuong', 'text', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Tên Giải Thưởng'),
            ))
            ->add('ngaydatgiai','date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'form-control', 'placeholder' => 'yyyy-MM-dd'),
                ))
            ->add('matacpham', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Tacpham',
                'property' => 'tentacpham',
                'multiple' => false,
                'attr' => array('class' => 'form-control', 'placeholder'=>'Chọn tác phẩm đạt giải'),
            ))
           
            ->add('add', 'submit',array(
                'label' => 'Thêm',
                'attr' => array('class' => 'btn btn-primary mdi-av-playlist-add'),

            ))
            ->getForm();
        
        $form->handleRequest($request);
        if($form->isValid()){
            
            $em->flush();
            return new Response('Giải thưởng được cập nhật thành công');
        }

        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }


    public function deleteAction($magiaithuong, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $giaithuong = $em->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findOneByMagiaithuong(''.$magiaithuong.'');
        if (!$giaithuong) {
          throw $this->createNotFoundException(
                  'Không tìm thấy hội viên ' . $giaithuong
          );
        }
        $form = $this->createFormBuilder($giaithuong)
                ->add('delete', 'submit')
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
          $em->remove($giaithuong);
          $em->flush();
          return new Response('Xóa giải thưởng thành công');
        }
        
        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }


    public function multideleteAction(Request $request){
        if(empty($_POST['xoa'])){
          throw $this->createNotFoundException(
                  'Không có giải thưởng nào được chọn'
          );  
        }
        else{
           foreach ($_POST['xoa'] as $checked){
               $em = $this->getDoctrine()->getManager();
               $giaithuong = $em->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findOneByMagiaithuong(''.$checked.'');
               $em->remove($giaithuong);
                $em->flush(); 
            }
            return new Response('Xóa thành công');
        }
    }
}
