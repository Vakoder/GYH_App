<?php

namespace App\Controller;

use App\Entity\ProjetsEtat;
use App\Form\ProjetsEtatType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/projets/etat")
 */
class ProjetsEtatController extends AbstractController
{
    /**
     * @Route("/", name="projets_etat_index", methods={"GET"})
     */
    public function index(): Response
    {
        $projetsEtats = $this->getDoctrine()
            ->getRepository(ProjetsEtat::class)
            ->findAll();

        return $this->render('projets_etat/index.html.twig', [
            'projets_etats' => $projetsEtats,
        ]);
    }

    /**
     * @Route("/new", name="projets_etat_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $projetsEtat = new ProjetsEtat();
        $form = $this->createForm(ProjetsEtatType::class, $projetsEtat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($projetsEtat);
            $entityManager->flush();

            return $this->redirectToRoute('projets_etat_index');
        }

        return $this->render('projets_etat/new.html.twig', [
            'projets_etat' => $projetsEtat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="projets_etat_show", methods={"GET"})
     */
    public function show(ProjetsEtat $projetsEtat): Response
    {
        return $this->render('projets_etat/show.html.twig', [
            'projets_etat' => $projetsEtat,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="projets_etat_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ProjetsEtat $projetsEtat): Response
    {
        $form = $this->createForm(ProjetsEtatType::class, $projetsEtat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('projets_etat_index');
        }

        return $this->render('projets_etat/edit.html.twig', [
            'projets_etat' => $projetsEtat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="projets_etat_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ProjetsEtat $projetsEtat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projetsEtat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($projetsEtat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('projets_etat_index');
    }
}
