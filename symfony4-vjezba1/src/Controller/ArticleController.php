<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 19/03/19
 * Time: 16.39
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf('Još jedna dodatna stranica: %s', $slug));
    }

}