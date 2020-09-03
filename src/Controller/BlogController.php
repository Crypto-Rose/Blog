<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Primer Blog');
    }

    /**
     * @Route("/blog/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            "Segundo Blog",
            ucwords(str_replace('-',' ',$slug))
        ));
    }
}
