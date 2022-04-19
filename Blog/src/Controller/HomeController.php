<?php

namespace App\Controller;

use App\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
use App\Entity\Post;
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PostRepository $ripo)
    {
        $posts = $ripo->findAll();

        return $this->render('home/index.html.twig', [
            'posts' => $posts
        ]);
    }

        //to show the post entity
        //dd($post);

      
        #[Route('/posts/{id}', name:'show_post')]
        public function show(Post $post)
    {
        $comment = new Comment();
        $form = $this->createFormBuilder($comment)->getForm();
        dd($form);
        return $this->render('home/post.html.twig', [
            'post' => $post
        ]);
    }
}
