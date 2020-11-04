<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

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
	public function contact_index(Request $request)
	{
		$form = $this->createFormBuilder()
			->add('nom', TextType::class)
			->add('email', EmailType::class)
			->add('objet', TextType::class)
			->add('message', TextareaType::class)
			->add('envoyer', SubmitType::class)
			->getForm()
		;

			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {

				$data = $form->getData();

				dump($data);

				$message = (new \Swift_Message())
					->setSubject('Support Form Submission')
					->setFrom($data['email'])
					->setTo('melanie.xelm@gmail.com')
					->setBody(
						$form->getData()['message'],
						'text/plain'
					);

					$this->get('mailer')->send($message);
			}


		return $this->render('website/contact/index.html.twig', [
			'contact_form' => $form->createView()
		]);
	}
/**
* @Route("/photo", name="photo")
*/
	public function photo_index() {
		return $this->render('website/photo/index.html.twig');
	}	


}