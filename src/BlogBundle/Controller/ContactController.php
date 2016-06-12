<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function contactAction()
    {
        return $this->render('BlogBundle:Contact:contact.html.twig', array(
            // ...
        ));
    }
}
