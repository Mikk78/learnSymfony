<?php


namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBaseController extends AbstractController
{
    protected function renderAdminDefault(){
        return [
            'title' =>'Admin home page'
        ];
    }

}