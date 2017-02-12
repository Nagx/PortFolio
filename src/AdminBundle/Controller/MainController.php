<?php

namespace AdminBundle\Controller;

use AdminBundle\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function loginAction()
    {
        $form = $this->createForm(LoginType::class);
        return $this->render('Admin/pages/login.html.twig', array('form' => $form->createView()));
    }
}
