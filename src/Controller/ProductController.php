<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    public function create()
    {
        $product = new Product();
        $product->setName("pencil");
        $product->setPrice(15);
        $product->setDescription("lorem ipsum");

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($product);
        $entityManager->flush();

        return $this->render('create-prod.twig', ['product'=> $product]);
    }

    public function read (\Symfony\Component\HttpFoundation\Request $request)
    {
        $id = (int) $request->get("id");
        if ($id > 0) {
            $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
            if ($product){
                return $this->render('read-prod.twig', ['product'=> $product]);
            } return $this->render('no-prod.twig');
        }
    }

    public function delete(\Symfony\Component\HttpFoundation\Request $request)
    {
        $id = (int) $request->get("id");
        if ($id >0) {
            $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
            if ($product){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($product);
                $entityManager->flush();

                return $this->render('delete-prod.twig', ['product'=>$product]);
            } return $this->render('no-prod.twig');
        }
    }

    public function update(\Symfony\Component\HttpFoundation\Request $request)
    {
        $id = (int) $request->get("id");
        if ($id >0) {
            /** @var product $product */
            $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
            if ($product){
                $product->setName('RedHat');
                $product->setPrice(20);
                $product->setDescription('lorem lorem lorem');
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($product);
                $entityManager->flush();

                return $this->render('update-prod.twig', ['product'=>$product]);
            } return $this->render('no-product.twig');
        }
    }
}