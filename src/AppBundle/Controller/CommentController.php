<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CommentController extends Controller
{
    /**
     * @Route("/comments/add", name="comment.add")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function addAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $commentRepository = $em->getRepository('AppBundle:Comment');
            $postRepository = $em->getRepository('AppBundle:Post');
            if (!$commentRepository->isSpam('10')) {
                $comment = new Comment();
                $id = $request->request->get('_postid');
                $content = $request->request->get('_comment');
                if (strlen($content) > 5) {
                    $post = $postRepository->find($id);
                    $comment->setContent($content);
                    $comment->setPost($post);
                    $comment->setUser($this->getUser());
                    $em->persist($comment);
                    $em->flush();
                    return $this->json(['success' => $content]);
                }
                return $this->json(['fail' => 'Votre commentaire est trop court']);
            }
        }
    }

    /**
     * @Route("/comments/update", name="comment.update")
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $commentRepository = $em->getRepository('AppBundle:Comment');
            $commentToUpdate = $commentRepository->find($request->request->get('_commentId'));
            if ($commentToUpdate == null) {
                throw new NotFoundHttpException("Le commentaire n'existe pas");
            }
            $this->denyAccessUnlessGranted('edit', $commentToUpdate);
            $commentToUpdate->setContent($request->request->get('_content'));
            $em->persist($commentToUpdate);
            $em->flush();
            $this->get('session')->getFlashBag()->set('notice', 'Votre commentaire a bien été édité');
            $referer = $request->headers->get('referer');
            return new RedirectResponse($referer);
        }
        throw new NotFoundHttpException('Page Not Found');
    }

    /**
     * @Route("/comments/delete/{id}", name="comment.delete", requirements={"id"="\d+"})
     * @param Request $request
     * @param int $id
     * @return mixed
     */
    public function deleteAction(Request $request, int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $comment = $em->getRepository('AppBundle:Comment')->find($id);
        $this->denyAccessUnlessGranted('delete', $comment);
        $submittedToken = $request->request->get('token');
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('comment-item', $submittedToken)) {
            $em->remove($comment);
            $em->flush();
        }
        $postSlug = $comment->getPost()->getSlug();
        return $this->redirectToRoute('viewpost', [
            'slug' => $postSlug
        ]);
    }
}