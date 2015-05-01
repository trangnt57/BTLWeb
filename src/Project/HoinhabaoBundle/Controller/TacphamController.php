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
        $this->showQuantityAction($username, $build);
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
        $build['i_tacpham'] = $tacpham;
        $this->showQuantityAction($username, $build);
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_show_all.html.twig', $build);
    
    }

    public function allAction()
    {
        $session = new Session();
        $session->start();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
       
        $tacpham = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Tacpham')->findAll();
        
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $build['all_tacpham'] = $tacpham;
        $this->showQuantityAction($username, $build);
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_alloflist.html.twig', $build);
    
    }
    public function addAction($tendangnhap, Request $request){
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
        	$this->addFlash('add-tacpham', 'Tác phẩm được thêm thành công');
            return $this->redirectToRoute('project_tacpham', array('tendangnhap'=> $tendangnhap));
        }

        $build['form'] = $form->createView();
        $build['vaitro'] = $session->get('vaitro');
        $build['tendangnhap'] = $username;
        $this->showQuantityAction($username, $build);
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_add.html.twig', $build);
    }

    public function editAction($tendangnhap, $matacpham, Request $request){
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
        	$this->addFlash('edit-tacpham', 'Tác phẩm '.$matacpham.' được cập nhật thành công');
            return $this->redirectToRoute('project_tacpham_show', array('tendangnhap'=> $tendangnhap, 'matacpham' => $matacpham));
        }

        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $this->showQuantityAction($username, $build);
        return $this->render('ProjectHoinhabaoBundle:Tacpham:tacpham_add.html.twig', $build);
    }


     public function deleteAction($tendangnhap, $matacpham, Request $request) {
       $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
        $em = $this->getDoctrine()->getManager();
        $tacpham = $em->getRepository('ProjectHoinhabaoBundle:Tacpham')->findOneByMatacpham(''.$matacpham.'');

        if (!$tacpham) {
            return $this->redirectToRoute('project_tacpham', array('tendangnhap' => $tendangnhap, 'matacpham'=> $matacpham ));
        }
       
        else {
            
            $em->remove($tacpham);
            $em->flush();
        } 
        $this->addFlash('delete-tacpham', 'Xóa thành công tác phẩm ' + $matacpham);
        return $this->redirectToRoute('project_tacpham', array('tendangnhap' => $tendangnhap, 'matacpham'=> $matacpham ));
        
    }
    public function multideleteAction($tendangnhap, Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
        if(empty($_POST['xoa'])){
          return $this->redirectToRoute('project_tacpham', array('tendangnhap'=> $tendangnhap));
        }
        else{
           foreach ($_POST['xoa'] as $checked){
               $em = $this->getDoctrine()->getManager();
               $tacpham = $em->getRepository('ProjectHoinhabaoBundle:Tacpham')->findOneByMatacpham(''.$checked.'');
                $em->remove($tacpham);
                $em->flush();
            } 
        }
    
        $this->addFlash('delete-multi', 'Xóa thành công');
       return $this->redirectToRoute('project_tacpham', array('tendangnhap'=> $tendangnhap));
           
        
    }
   
}
