<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function loginAction()
    {
        return $this->render('Admin/pages/login.html.twig');
    }
}
