<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends AbstractController{

/**
* @Route("/", name="home")
*/
	public function index() {
		return $this->render('website/home/index.html.twig');
}

/**
* @Route("/presentation", name="presentation")
*/
	public function presentation_index() {
		return $this->render('website/presentation/index.html.twig');
	}
/**
* @Route("/realisations", name="realisations")
*/
	public function realisations_index() {
		return $this->render('website/realisations/index.html.twig');
	}

/**
* @Route("/contact", name="contact")
*/
	public function contact_index() {
		return $this->render('website/contact/index.html.twig');
	}	
/**
* @Route("/photo", name="photo")
*/
	public function photo_index() {
		return $this->render('website/photo/index.html.twig');
	}	


}