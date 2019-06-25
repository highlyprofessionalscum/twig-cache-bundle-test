<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Cache\Adapter\AdapterInterface;


class TestController extends AbstractController
{

    /**
     * @Route("/", name="main")
     */
    public function main(AdapterInterface $cache)
    {
        $item = ['id' => '1'];

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'item' => (object) $item,
        ]);
    }
}
