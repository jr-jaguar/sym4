<?php

namespace App\Controller;


use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product", name="product_")
 */

class ProductController extends AbstractController {

	/**
	 * @Route("/", name="list")
	 */
	public function list() {
		return $this->render('shop/product/list.html.twig');
	}
	/**
	 * @Route("/add", name="add")
	 */
	public function add() {
		return $this->render('shop/product/add.html.twig');
	}

	/**
	 * @Route("/show/{id}", name="show")
	 */
	public function show(int $id) {
		return $this->render('shop/product/show.html.twig');
	}

	/**
	 * @Route("/edit/{id}", name="edit")
	 */
	public function edit(int $id) {
		return $this->render('shop/product/edit.html.twig');
	}

	/**
	 * @Route("/delete/{id}", name="delete")
	 */
	public function delete(int $id) {
		return $this->render('shop/product/delete.html.twig');
	}
}