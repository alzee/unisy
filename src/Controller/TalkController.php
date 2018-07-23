<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TalkController extends Controller
{
    /**
     * @Route("/talk", name="talk")
     */
    public function index()
    {
        return $this->render('talk/index.html.twig', [
            'controller_name' => 'TalkController',
        ]);
    }
	
    /**
     * @Route("/talk/{topic}", name="topic_talk")
     */
    public function topic($topic)
    {
        return $this->render('talk/topic.html.twig', [
            'controller_name' => $topic,
            'title' => $topic,
        ]);
    }
}
