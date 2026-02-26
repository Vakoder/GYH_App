<?php

namespace App\Controller;

use App\Entity\ProjetsEtapes;
use App\Form\ProjetsEtapesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/projets/etapes')]
class ProjetsEtapesController extends AbstractController
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    #[Route('/', name: 'projets_etapes_index', methods: ['GET'])]
    public function index(): Response
    {
        $projetsEtapes = $this->entityManager
            ->getRepository(ProjetsEtapes::class)
            ->findAll();

        return $this->render('projets_etapes/index.html.twig', [
            'projets_etapes' => $projetsEtapes,
        ]);
    }

    #[Route('/new', name: 'projets_etapes_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $projetsEtape = new ProjetsEtapes();
        $form = $this->createForm(ProjetsEtapesType::class, $projetsEtape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($projetsEtape);
            $this->entityManager->flush();

            return $this->redirectToRoute('projets_etapes_index');
        }

        return $this->render('projets_etapes/new.html.twig', [
            'projets_etape' => $projetsEtape,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'projets_etapes_show', methods: ['GET'])]
    public function show(ProjetsEtapes $projetsEtape): Response
    {
        return $this->render('projets_etapes/show.html.twig', [
            'projets_etape' => $projetsEtape,
        ]);
    }

    #[Route('/{id}/edit', name: 'projets_etapes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProjetsEtapes $projetsEtape): Response
    {
        $form = $this->createForm(ProjetsEtapesType::class, $projetsEtape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('projets_etapes_index');
        }

        return $this->render('projets_etapes/edit.html.twig', [
            'projets_etape' => $projetsEtape,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'projets_etapes_delete', methods: ['DELETE'])]
    public function delete(Request $request, ProjetsEtapes $projetsEtape): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projetsEtape->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($projetsEtape);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('projets_etapes_index');
    }
}
