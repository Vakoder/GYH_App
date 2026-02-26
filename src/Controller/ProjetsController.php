<?php

namespace App\Controller;

use App\Entity\Projets;
use App\Form\Projets2Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/projets')]
class ProjetsController extends AbstractController
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    #[Route('/', name: 'projets_index', methods: ['GET'])]
    public function index(): Response
    {
        $projets = $this->entityManager
            ->getRepository(Projets::class)
            ->findAll();

        return $this->render('projets/index.html.twig', [
            'projets' => $projets,
        ]);
    }

    #[Route('/new', name: 'projets_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $projet = new Projets();
        $form = $this->createForm(Projets2Type::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($projet);
            $this->entityManager->flush();

            return $this->redirectToRoute('projets_index');
        }

        return $this->render('projets/new.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'projets_show', methods: ['GET'])]
    public function show(Projets $projet): Response
    {
        return $this->render('projets/show.html.twig', [
            'projet' => $projet,
        ]);
    }

    #[Route('/{id}/edit', name: 'projets_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Projets $projet): Response
    {
        $form = $this->createForm(Projets2Type::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('projets_index');
        }

        return $this->render('projets/edit.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'projets_delete', methods: ['DELETE'])]
    public function delete(Request $request, Projets $projet): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projet->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($projet);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('projets_index');
    }
}
