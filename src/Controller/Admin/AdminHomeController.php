<?php


namespace App\Controller\Admin;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminHomeController extends AdminBaseController
{
    /**
     * Use annotation
     * @Route("/admin", name="admin_home" )
     */
    protected function indexAdmin(){
        $forRenderAdmin = AdminBaseController::renderAdminDefault();
        return $this->render('admin/adminindex.html.twig', $forRenderAdmin);
        }
}