<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 19/03/19
 * Time: 16.39
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{

    /**
     *@Route("/")
     */
    public function homepage()
    {
        return new Response('Yeeey! My first web symfony page!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {

        $comments = [
            'Ovo je prvi komentar!',
            'Ovo je drugi komentar!',
            'A ovo je treći :)'];

        return $this->render('article/show.html.twig', [
           'title'=> ucwords(str_replace('-','', $slug)),
            'comments'=> $comments]);
    }

}