<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Form\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    /**
     * @Route("/{page}", name="homepage", requirements={"page"="\d+"}, defaults={"page" = 1})
     * @param int $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(int $page)
    {
        if ($page < 0) {
            throw new NotFoundHttpException("La page n° $page n'existe pas!");
        }
        $nbrPerPage = 10;
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Post')->getLast($page, $nbrPerPage);
        $pagesNbr = ceil(count($posts) / $nbrPerPage);
        if ($page > $pagesNbr && $page !== 1) {
            throw new NotFoundHttpException("La page n° $page n'existe pas!");
        }
        return $this->render('@App/pages/index.html.twig', [
            'posts' => $posts,
            'cPage' => $page,
            'pagesNbr' => $pagesNbr,
        ]);
    }

    /**
     * @Route("/post/{slug}", name="viewpost")
     * @param string $slug
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction(string $slug, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AppBundle:Post')->findOneBySlug($slug);
        if ($post == null) {
            throw new NotFoundHttpException("L'article $slug n'existe pas");
        }
        $tags = $post->getTags();
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                if (!$em->getRepository('AppBundle:Comment')->isSpam('10')) {
                    $comment->setPost($post);
                    $comment->setUser($this->getUser());
                    $em->persist($comment);
                    $em->flush();
                    $this->get('session')->getFlashBag()->set('notice', 'Votre commentaire vient d\'être ajouté!');
                    return $this->redirect($request->getUri());
                }
            }
        }
        $comments = $em->getRepository('AppBundle:Comment')->getCommentsByOrder($post->getId());
        return $this->render('@App/pages/view.html.twig', [
            'post' => $post,
            'tags' => $tags,
            'comments' => $comments,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/search", name="search")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public
    function searchAction(Request $request)
    {
        $page = $request->get('page');
        if ($page < 0) {
            throw new NotFoundHttpException("La page n° $page n'existe pas!");
        } elseif ($page === null) {
            $page = 1;
        }
        $nbrPerPage = 10;
        $search = $request->get('q');
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Post');
        $posts = $repository->getSearch($search, $page, $nbrPerPage);
        $pageNbr = ceil((count($posts) / $nbrPerPage));

        if ($page > $pageNbr && $pageNbr != 0) {
            throw new NotFoundHttpException("La page n° $page n'existe pas!");
        }
        return $this->render('@App/pages/search.html.twig', [
            'posts' => $posts,
            'cPage' => $page,
            'pagesNbr' => $pageNbr
        ]);
    }
}
