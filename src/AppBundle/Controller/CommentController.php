<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{
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