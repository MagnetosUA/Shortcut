<?php

namespace ShortcutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShortController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Shortcut/Default/index.html.twig');
    }
}
