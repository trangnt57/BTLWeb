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

class GiaithuongController extends Controller
{
    
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
        $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMahv(''.$mahoivien.'');
        
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $build['giaithuong'] = $giaithuong;
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_show_all.html.twig', $build);
    
    }
    public function addAction(Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
    	$hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$username.'');
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
    		->add('mota', 'textarea', array(
                'attr' => array('class' => 'form-control', 'rows'=> '3')
            ))
           
           
            ->add('add', 'submit',array(
                'label' => 'Lưu',
                'attr' => array('class' => 'btn btn-primary mdi-action-input'),

            ))
            ->getForm();
        $giaithuong->setMahv($hoivien);
        $form->handleRequest($request);
        if($form->isValid()){
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($giaithuong);
        	$em->flush();
        	return new Response("<p>Thêm giải thưởng thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }

        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }

   public function editAction($magiaithuong, Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
            ->add('mota', 'textarea', array(
                'attr' => array('class' => 'form-control', 'rows'=> '3')
            ))
           
            ->add('add', 'submit',array(
                'label' => 'Lưu',
                'attr' => array('class' => 'btn btn-primary mdi-action-input'),

            ))
            ->getForm();
        
        $form->handleRequest($request);
        if($form->isValid()){
            
            $em->flush();
            return new Response("<p>Giải thưởng được cập nhật thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }

        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['hoivien'] = $session->get('vaitro');
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }


    public function deleteAction($magiaithuong, Request $request) {
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
          return new Response("<p>Xóa giải thưởng thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }
        
        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }


    public function multideleteAction(Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
            return new Response("<p>Xóa thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }
    }
}
