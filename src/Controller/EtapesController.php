<?php

namespace App\Controller;

use App\Entity\Etapes;
use App\Form\EtapesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/etapes')]
class EtapesController extends AbstractController
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    #[Route('/', name: 'etapes_index', methods: ['GET'])]
    public function index(): Response
    {
        $etapes = $this->entityManager
            ->getRepository(Etapes::class)
            ->findAll();

        return $this->render('etapes/index.html.twig', [
            'etapes' => $etapes,
        ]);
    }

    #[Route('/new', name: 'etapes_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $etape = new Etapes();
        $form = $this->createForm(EtapesType::class, $etape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($etape);
            $this->entityManager->flush();

            return $this->redirectToRoute('etapes_index');
        }

        return $this->render('etapes/new.html.twig', [
            'etape' => $etape,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'etapes_show', methods: ['GET'])]
    public function show(Etapes $etape): Response
    {
        return $this->render('etapes/show.html.twig', [
            'etape' => $etape,
        ]);
    }

    #[Route('/{id}/edit', name: 'etapes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Etapes $etape): Response
    {
        $form = $this->createForm(EtapesType::class, $etape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('etapes_index');
        }

        return $this->render('etapes/edit.html.twig', [
            'etape' => $etape,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'etapes_delete', methods: ['DELETE'])]
    public function delete(Request $request, Etapes $etape): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etape->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($etape);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('etapes_index');
    }
}
