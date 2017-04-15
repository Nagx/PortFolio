<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();
        $user = new User();
        $user->setFirstname('kevin')
            ->setLastname('javazzo');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'Naga2909');
        $user->setPassword($password)
            ->setEmail('k.javazzo.pro@gmail.com')
            ->setRoles('ROLE_ADMIN');
        $em->persist($user);
        $em->flush();*/
        return $this->render('AppBundle:Default:index.html.twig');
    }
}
