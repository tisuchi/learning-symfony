<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticlesController {
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index()
    {
        return new Response('Hello world');
    }
}