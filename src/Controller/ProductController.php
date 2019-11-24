<?php

namespace App\Controller;


use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController {

	/**
	 * @Route("/product")
	 */

	public function index() {
		$number = random_int(0, 100);
		return $this->render('shop/number.html.twig', [
			'number' => $number,
		]);
	}
}