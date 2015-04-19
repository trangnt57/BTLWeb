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
        $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMahv(''.$mahoivien.'');
        
        $build['tendangnhap'] = $tendangnhap;
        $build['tacpham'] = $tacpham;
        $build['giaithuong'] = $giaithuong;
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_show_all.html.twig', $build);
    
    }

    public function addAction($tendangnhap, Request $request){
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
    	$tacpham = new Tacpham();
    	$form = $this->createFormBuilder($tacpham)
    		->add('tentacpham', 'text')
    		->add('mota', 'textarea')
    		->add('ngaysangtac','date')
    		->add('matheloai', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Theloai',
                'property' => 'tentheloai',
            ))
           
            ->add('lienket', 'text')
            ->add('Thêm', 'submit')
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
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_add.html.twig', $build);
    }

    public function editAction($matacpham, Request $request){
    	$em = $this->getDoctrine()->getManager();
    	$tacpham = $em->getRepository('ProjectHoinhabaoBundle:Tacpham')->findOneByMatacpham(''.$matacpham.'');
    	if(!$tacpham){
    		throw $this->createNotFoundException('Không tìm thấy tác phẩm với ma:' . $matacpham);
    	}

    	$form = $this->createFormBuilder($tacpham)
    		->add('tentacpham', 'text')
    		->add('mota', 'textarea')
    		->add('ngaysangtac','date')
    		->add('matheloai', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Theloai',
                'property' => 'tentheloai',
            ))
           
            ->add('lienket', 'text')
            ->add('Thêm', 'submit')
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
   
}
