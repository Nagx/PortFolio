<?php

namespace AdminBundle\Controller;

use AdminBundle\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecutiryController extends Controller
{
    public function loginAction(Request $request)
    {
        $form = $this->createForm(LoginType::class);
        $user = $this->getUser();

        if (null == $user) {
            Throw $this->createAccessDeniedException();
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        }

        return $this->render('Admin/pages/login.html.twig', array('form' => $form->createView()));
    }
}