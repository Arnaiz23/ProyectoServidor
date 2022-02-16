<?php

namespace App\Controller;

use App\Entity\Preguntas;
use App\Form\PreguntasType;
use App\Repository\PreguntasRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/preguntas")
 */
class PreguntasController extends AbstractController
{
    /**
     * @Route("/", name="preguntas_index", methods={"GET"})
     */
    public function index(PreguntasRepository $preguntasRepository): Response
    {
        return $this->render('preguntas/index.html.twig', [
            'preguntas' => $preguntasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="preguntas_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pregunta = new Preguntas();
        $form = $this->createForm(PreguntasType::class, $pregunta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pregunta);
            $entityManager->flush();

            return $this->redirectToRoute('preguntas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('preguntas/new.html.twig', [
            'pregunta' => $pregunta,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="preguntas_show", methods={"GET"})
     */
    public function show(Preguntas $pregunta): Response
    {
        return $this->render('preguntas/show.html.twig', [
            'pregunta' => $pregunta,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="preguntas_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Preguntas $pregunta, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PreguntasType::class, $pregunta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('preguntas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('preguntas/edit.html.twig', [
            'pregunta' => $pregunta,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="preguntas_delete", methods={"POST"})
     */
    public function delete(Request $request, Preguntas $pregunta, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pregunta->getId(), $request->request->get('_token'))) {
            $entityManager->remove($pregunta);
            $entityManager->flush();
        }

        return $this->redirectToRoute('preguntas_index', [], Response::HTTP_SEE_OTHER);
    }
}
