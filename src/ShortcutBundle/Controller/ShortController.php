<?php

namespace ShortcutBundle\Controller;

use ShortcutBundle\Entity\Link;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ShortController extends Controller
{
    public function indexAction(Request $request)
    {
        $link = new Link();
        $form = $this->createForm(LinkType::class);

        $h = "QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm1234567890";
        $rand = substr(str_shuffle($h), 0, 5);
        $myUrl = $request->getUri();
        $short = $myUrl."s/".$rand;

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            $link->setActive(true);
            $link->setLifetime($data['date']);
            $link->setOriginal($data['link']);
            $link->setShort($short);
            $em = $this->getDoctrine()->getManager();
            $em->persist($link);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }
        $links = $this->getDoctrine()->getRepository(Link::class)->findAll();
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $links, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );
        return $this->render('@Shortcut/index.html.twig', [
            'form' =>  $form->createView(),
            'links' => $links,
            'pagination' => $pagination,
        ]);
    }
}
