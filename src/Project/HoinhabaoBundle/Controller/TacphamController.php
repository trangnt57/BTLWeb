<?php

namespace Project\HoinhabaoBundle\Controller;
use Project\HoinhabaoBundle\Entity\Hoivien;
use Project\HoinhabaoBundle\Entity\Tacpham;
use Project\HoinhabaoBundle\Entity\Giaithuong;
use Project\HoinhabaoBundle\Entity\Theloai;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class TacphamController extends Controller
{
    public function showAction($matacpham)
    {
        $session = new Session();
        $session->start();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
        $tacpham = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Tacpham')->findOneByMatacpham(''.$matacpham.'');
        if(!$tacpham){
            throw $this->createNotFoundException('Khong tim thay tac pham ' . $matacpham);
        }

        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $build['tacpham_item'] = $tacpham;
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_show.html.twig', $build);
    }

    public function indexAction()
    {
    	$session = new Session();
        $session->start();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$username.'');
    	$mahoivien = $hoivien->getMahv();
        $tacpham = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Tacpham')->findByMahv(''.$mahoivien.'');
        
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $build['tacpham'] = $tacpham;
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_show_all.html.twig', $build);
    
    }

    public function addAction(Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$username.'');
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
                'label' => 'Lưu',
                'attr' => array('class' => 'btn btn-primary mdi-action-input'),
            ))
            ->getForm();
        $tacpham->setMahv($hoivien);
        $form->handleRequest($request);
        if($form->isValid()){
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($tacpham);
        	$em->flush();
        	return new Response("<p>Thêm tác phẩm thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }

        $build['form'] = $form->createView();

        $build['tendangnhap'] = $username;
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_add.html.twig', $build);
    }

    public function editAction($matacpham, Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
        $session->start();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
                'label' => 'Lưu',
                'attr' => array('class' => 'btn btn-primary mdi-action-input'),
            ))
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
        	$em->flush();
        	return new Response("<p>Tác phẩm đã được cập nhật</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }

        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_add.html.twig', $build);
    }


    public function deleteAction($matacpham, Request $request) {
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
          return new Response("<p>Xóa tác phẩm thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }
        
        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        return $this->render('ProjectHoinhabaoBundle:tacpham:tacpham_add.html.twig', $build);
    }

    public function multideleteAction(Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
        
            return new Response("<p>Xóa thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
           
        }
    }
   
}
