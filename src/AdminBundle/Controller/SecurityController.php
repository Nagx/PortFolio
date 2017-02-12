<?php

namespace AdminBundle\Controller;

use AdminBundle\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $form = $this->createForm(LoginType::class);
        return $this->render('Admin/pages/login.html.twig', array('form' => $form->createView()));
    }
}