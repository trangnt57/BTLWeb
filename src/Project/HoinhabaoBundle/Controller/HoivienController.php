<?php

namespace Project\HoinhabaoBundle\Controller;

use Project\HoinhabaoBundle\Entity\Hoivien;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HoivienController extends Controller
{
    public function showAction($tendangnhap)
    {
        $hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');

        if(!$hoivien){
        	throw $this->createNotFoundException('Khong tim thay hoi vien ' . $tendangnhap);
        }
        $build['hoivien_item'] = $hoivien;
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_show.html.twig', $build);
    }

    public function indexAction(){
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findAll();

    	if(!$hoivien){
    		throw $this->createNotFoundException('không tìm thấy hội viên');
    		
    	}

    	$build['hoivien'] = $hoivien;
    		return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_show_all.html.twig', $build);
    }

    public function addAction(Request $request){
    	$hoivien = new Hoivien();
    	$gioitinh = array(
    		'nam' => 'nam',
    		'nu' => 'nữ'
    	);
    	$toasoan = array(
    		'60000' => 'Hoa Học Trò',
    		'61000'	=> 'Dân Trí'
    	);
    	$form = $this->createFormBuilder($hoivien)
    		->add('mahv', 'text')
    		->add('tendangnhap', 'text')
    		->add('matkhau','password')
    		->add('hoten','text')
    		->add('ngaysinh','date', array(
    			'widget' => 'single_text',
    			'format' => 'yyyy-MM-dd',
    		))
    		->add('gioitinh', 'choice', array(
				'choices' => $gioitinh,
    			
    			'multiple' => false,
    			
    			'data'	=> 'nam'
    		))
    		->add('quequan','text')
    		->add('email','email')
    		->add('cmnd','text')
    		->add('tieusu', 'textarea')
    		->add('matoasoan', 'choice', array(
				'choices' => $toasoan,
    			
    			'multiple' => false,
    			
    			'data'	=> '60000'
    			
    		))
    		->add('kichhoat', 'choice', array(
    			'choices' => array(
    				'1' => 'Kích hoạt',
    				'0' => 'Không kích hoạt'
    			),
    			'placeholder' => 'chọn trạng thái'
    		))
    		->add('tạo','submit')
    		->getForm();

    	$form->handleRequest($request);
    	if($form->isValid()){


    		$em = $this->getDoctrine()->getManager();
    		$em->persist($hoivien);
    		$em->flush();
    		return new Response('Hội viên được thêm thành công');
    	}

    	$build['form'] = $form->createView();
    	return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig', $build);
    }
}
