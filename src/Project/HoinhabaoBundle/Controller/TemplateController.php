<?php

namespace Project\HoinhabaoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TemplateController extends Controller
{
	private $mau = 1;

    public function change()
    {
    	if(isset($_POST['templateForm'])){
    		$this->mau = $_POST['template'];
    	}

    	return $this->mau;
    }

    public function getMau(){
    	return $this->mau;
    }
}




