<?php


namespace App\Controller\Main;

use Symfony\Component\Routing\Annotation\Route;

class HomeController extends BaseController
{
    /**
     * Use annotation
     * @Route("/",name="home")
     */
    public function index()
    {
        $forRender = BaseController::renderDefault();//inheritance method of BaseController
        return $this->render( "main/index.html.twig",$forRender);
    }   
}