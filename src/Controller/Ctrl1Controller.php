<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Ctrl1Controller extends AbstractController
{
    #[Route('/ctrl1', name: 'app_ctrl1')]
    public function index(): Response
    {
        return new response('<p>hello hgdkzjhdkz <b>aymen</b></P>');
    }

    #[Route('/ctrl2', name: 'app_ctrl1')]
    public function show(): Response
    {
        return new response('
        <image src="https://th.bing.com/th/id/OIP.pKuNnk8zv8bVJ_9qoviMZQHaE8?pid=ImgDet&rs=1" />
        <p>  <b>Aymen</b></P>') ;
    }
}
