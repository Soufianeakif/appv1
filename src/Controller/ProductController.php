<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_index')]
    public function index(ProductRepository $repository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $repository->findAll(),
        ]);
    }

    #[Route('/product/{id<\d+>}', name:'product_show')]
    public function show($id, ProductRepository $repository) : Response
    {
        $product = $repository->find($id);

        if ($product === null) {
            throw $this->createNotFoundException('Product not found');
        }

        return $this->render('product/show.html.twig', [
            'product'=> $product
        ]);
    }
} 
 