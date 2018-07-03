<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminController extends Controller
{
    /**
     * @Route("/admin/posts/add", name="addpost")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $post = new Post();
        $form = $this->get('form.factory')->create(PostType::class, $post);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $post->setAuthor($this->getUser()->getUsername());
            $em->persist($post);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', "Un nouvel article vient d'être créé");

            return $this->redirectToRoute('homepage');
        }

        return $this->render('@App/pages/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/posts/edit/{id}", name="editpost", requirements={"id"="\d+"})
     * @param Request $request
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AppBundle:Post')->find($id);
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($post);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', "L'article vient d'être édité");
            return $this->redirectToRoute('homepage');
        }

        return $this->render('@App/pages/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("admin/posts/delete/{id}", name="deletepost", requirements={"id"="\d+"})
     * @param Request $request
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, int $id)
    {
        $submittedToken = $request->request->get('token');
        if ($this->isCsrfTokenValid('delete-post', $submittedToken)) {
            $em = $this->getDoctrine()->getManager();
            $post = $em->getRepository('AppBundle:Post')->find($id);
            $em->remove($post);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', "L'article vient d'être supprimé");
            return $this->redirectToRoute('homepage');
        }
        throw new NotFoundHttpException('erreur');
    }
}
