<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="homepage")
     */
    public function index(string $name): Response
    {
        $great ='' ;

        if($name){
            $great = sprintf("<h2>Hello %s </h2>", htmlspecialchars($name) );
        }
        return new Response(<<<EOF
            <html>
                <body>
                  $great
                  <img src="/images/under-construction.gif">
                </body>
            </html>
        EOF);
    }
}
