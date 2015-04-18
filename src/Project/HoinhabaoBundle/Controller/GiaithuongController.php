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
    

    public function addAction($tendangnhap, Request $request){
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
    	$giaithuong = new Giaithuong();
    	$form = $this->createFormBuilder($giaithuong)
    		->add('tengiaithuong', 'text')
    		->add('ngaydatgiai','date')
    		->add('matacpham', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Tacpham',
                'property' => 'tentacpham',
            ))
           
            ->add('Thêm', 'submit')
            ->getForm();
        $giaithuong->setMahv($hoivien);
        $form->handleRequest($request);
        if($form->isValid()){
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($giaithuong);
        	$em->flush();
        	return new Response('Thêm giải thưởng thành công');
        }

        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }

   public function editAction($magiaithuong, Request $request){
        $em = $this->getDoctrine()->getManager();
        $giaithuong = $em->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findOneByMagiaithuong(''.$magiaithuong.'');
        if(!$giaithuong){
            throw $this->createNotFoundException('Không tìm thấy giải thưởng với id:' . $magiaithuong);
        }

        $form = $this->createFormBuilder($giaithuong)
            ->add('tengiaithuong', 'text')
            ->add('ngaydatgiai','date')
            ->add('matacpham', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Tacpham',
                'property' => 'tentacpham',
            ))
           
            ->add('Thêm', 'submit')
            ->getForm();
        
        $form->handleRequest($request);
        if($form->isValid()){
            
            $em->flush();
            return new Response('Giải thưởng được cập nhật thành công');
        }

        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }

}
