<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TableController extends Controller
{
    /**
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('base.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

    public function update()
    {
        $dir = $this->getParameter('kernel.project_dir').'/src/Data/data.json';
        $str = file_get_contents($dir);
        $json = json_decode($str, true);

        return  new JsonResponse($json);
    }
}
