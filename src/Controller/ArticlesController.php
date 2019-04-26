<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticlesController {
    public function index()
    {
        return new Response('Hello world');
    }
}