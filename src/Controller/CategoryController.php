<?php
/**
 * Created by PhpStorm.
 * User: jaguar
 * Date: 2019-11-24
 * Time: 20:21
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/category", name="category_")
 */
class CategoryController extends AbstractController {

	/**
	 * @Route("/", name="list")
	 */
	public function list(){
		return $this->render('shop/category/categories.html.twig');
	}

	/**
	 * @Route("/add", name="add")
	 */
	public function add(){
		return $this->render('shop/category/add.html.twig');
	}

	/**
	 * @Route("/show/{id}", name="show")
	 */
	public function show(int $id){
		return $this->render('shop/category/show.html.twig');
	}

	/**
	 * @Route("/edit/{id}", name="edit")
	 */
	public function edit(int $id){
		return $this->render('shop/category/edit.html.twig');
	}

	/**
	 * @Route("/delete/{id}", name="delete")
	 */
	public function delete(int $id){
		return $this->render('shop/category/delete.html.twig');
	}
}