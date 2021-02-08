<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use FOS\RestBundle\Controller\AbstractFOSRestController;


/**
 * @Route("/product",name="product")
 */
class ProductController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/")
     * @return Response
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
    /**
     * @Rest\Get("/patate")
     * @return Response
     */
    public function yolo(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
}
