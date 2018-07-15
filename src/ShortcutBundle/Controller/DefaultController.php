<?php

namespace ShortcutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShortcutBundle:Default:index.html.twig');
    }
}
