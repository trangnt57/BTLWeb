<?php

namespace Project\HoinhabaoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
    	if($request->getMethod() =='POST'){
    		$username = $request->get('tendangnhap');
    		$password = $request->get('matkhau');
    		$em= $this->getDoctrine()->getEntityManager();
	    	$responsitory = $em->getRepository('ProjectHoinhabaoBundle:Hoivien');
	    	$user = $responsitory->findOneBy(array('tendangnhap'=>$username, 'matkhau'=>$password));
	        if($user){
	        	$session = new Session();
				$session->start();
				$session->set('tendangnhap', $username);
				$vaitro = $user->getVaitro();
				$session->set('vaitro', $vaitro);
	        	return $this->redirectToRoute('project_hoinhabao_homepage');
	    	}
	    }

	    
	    return $this->render('ProjectHoinhabaoBundle:Login:login.html.twig', array('name' => 'login failed'));
	    
    }
    public function logoutAction(Request $request){
    	$session = new Session();
		$session->start();
    	$session->invalidate();
    	return $this->redirectToRoute('project_login');
    }
}
