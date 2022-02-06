<?php

namespace App\Controller;

use App\Entity\Principal;
use App\Form\PrincipalType;
use App\Repository\PrincipalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/principal")
 */
class PrincipalController extends AbstractController
{
    /**
     * @Route("/", name="principal_index", methods={"GET"})
     */
    public function index(PrincipalRepository $principalRepository): Response
    {
        return $this->render('principal/index.html.twig', [
            'principals' => $principalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="principal_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $principal = new Principal();
        $form = $this->createForm(PrincipalType::class, $principal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($principal);
            $entityManager->flush();

            return $this->redirectToRoute('principal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('principal/new.html.twig', [
            'principal' => $principal,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="principal_show", methods={"GET"})
     */
    public function show(Principal $principal): Response
    {
        return $this->render('principal/show.html.twig', [
            'principal' => $principal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="principal_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Principal $principal, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PrincipalType::class, $principal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('principal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('principal/edit.html.twig', [
            'principal' => $principal,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="principal_delete", methods={"POST"})
     */
    public function delete(Request $request, Principal $principal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$principal->getId(), $request->request->get('_token'))) {
            $entityManager->remove($principal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('principal_index', [], Response::HTTP_SEE_OTHER);
    }
}
