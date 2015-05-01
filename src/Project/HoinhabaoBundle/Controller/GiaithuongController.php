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
     public function showQuantityAction($username, & $build){
    
        $thishoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$username.'');
        $hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findByKichhoat('1');
        $inactive = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findByKichhoat('0');
        $toanbotacpham = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Tacpham')->findAll();
        $toanbogiaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findAll();
        $tacpham = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Tacpham')->findByMahv(''.$thishoivien->getMahv().'');
        $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMahv(''.$thishoivien->getMahv().'');
        $build['hoivien'] = $hoivien;
        $build['toanbotacpham'] = $toanbotacpham;
        $build['toanbogiaithuong'] = $toanbogiaithuong;
        $build['tacpham'] = $tacpham;
        $build['giaithuong'] = $giaithuong;
        $build['inactive'] = $inactive;
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
        $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMahv(''.$mahoivien.'');
        
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $build['i_giaithuong'] = $giaithuong;
        $this->showQuantityAction($username, $build);
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_show_all.html.twig', $build);
    
    }

    public function allAction()
    {
        $session = new Session();
        $session->start();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
       
        $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findAll();
        
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $build['all_giaithuong'] = $giaithuong;
        $this->showQuantityAction($username, $build);
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_all.html.twig', $build);
    
    }
    public function addAction($tendangnhap, Request $request){
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
        	$this->addFlash('add-giaithuong', 'Giải thưởng được thêm thành công');
            return $this->redirectToRoute('project_giaithuong', array('tendangnhap'=> $tendangnhap));
        }

        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $this->showQuantityAction($username, $build);
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }

   public function editAction($tendangnhap, $magiaithuong, Request $request){
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
            $this->addFlash('edit-giaithuong', 'Giải thưởng '.$magiaithuong.' được cập nhật thành công');
            return $this->redirectToRoute('project_giaithuong', array('tendangnhap'=> $tendangnhap));
        }

        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $this->showQuantityAction($username, $build);
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
        $this->showQuantityAction($username, $build);
        return $this->render('ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig', $build);
    }


   public function multideleteAction($tendangnhap, Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
        if(empty($_POST['xoa'])){
          return $this->redirectToRoute('project_giaithuong', array('tendangnhap'=> $tendangnhap));
        }
        else{
           foreach ($_POST['xoa'] as $checked){
               $em = $this->getDoctrine()->getManager();
               $giaithuong = $em->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findOneByMagiaithuong(''.$checked.'');
                $em->remove($giaithuong);
                $em->flush();
            } 
        }
    
        $this->addFlash('delete-multi', 'Xóa thành công');
       return $this->redirectToRoute('project_giaithuong', array('tendangnhap'=> $tendangnhap));
           
        
    }


}
