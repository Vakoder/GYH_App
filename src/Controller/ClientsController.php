<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Form\ClientsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientsController extends AbstractController
{
    /**
     * @Route("/clients/", name="clients_index", methods={"GET"})
     */
    public function index(): Response
    {
        $clients = $this->getDoctrine()
            ->getRepository(Clients::class)
            ->findAll();

        return $this->render('clients/index.html.twig', [
            'clients' => $clients,
        ]);
    }

    /**
     * @Route("/clients/new", name="clients_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $client = new Clients();
        $form = $this->createForm(ClientsType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($client);
            $entityManager->flush();

            return $this->redirectToRoute('clients_index');
        }

        return $this->render('clients/new.html.twig', [
            'client' => $client,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/clients/{id}", name="clients_show", methods={"GET"})
     */
    public function show(Clients $client): Response
    {
        return $this->render('clients/show.html.twig', [
            'client' => $client,
        ]);
    }

    /**
     * @Route("/clients/{id}/edit", name="clients_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Clients $client): Response
    {
        $form = $this->createForm(ClientsType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('clients_index');
        }

        return $this->render('clients/edit.html.twig', [
            'client' => $client,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/clients/{id}", name="clients_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Clients $client): Response
    {
        if ($this->isCsrfTokenValid('delete'.$client->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($client);
            $entityManager->flush();
        }

        return $this->redirectToRoute('clients_index');
    }

    /**
     * Base de prog 
     * 
     * Typage : int, string, float, double
     * structure de controle : for, while, do...while
     * structure conditionnelle : if, switch
     * fonctions
     * 
     * POO
     * 
     * attributs de classe
     * méthodes
     * getter & setter
     * constructeur
     * polymorphismes
     * héritage
     * 
     * MVC => Méthode d'organisation de code
     * Model => Gérer la données => SQL, NoSQL
     * View => Frontend, affichage utilisateur, UI
     * Controller => Pont entre les views et les models (logique applicative)
     * 
     */

     /**
      * Utilisation de JS
      * Node => Controller & Model => backend
      * Reactjs => View => frontend
      */
}
