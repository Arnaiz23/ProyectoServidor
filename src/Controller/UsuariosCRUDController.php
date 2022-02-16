<?php

namespace App\Controller;

use App\Entity\Usuarios;
use App\Form\UsuariosType;
use App\Repository\UsuariosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/usuarios")
 */
class UsuariosCRUDController extends AbstractController
{
    /**
     * @Route("/", name="usuarios_c_r_u_d_index", methods={"GET"})
     */
    public function index(UsuariosRepository $usuariosRepository): Response
    {
        return $this->render('usuarios_crud/index.html.twig', [
            'usuarios' => $usuariosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="usuarios_c_r_u_d_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $usuario = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($usuario);
            $entityManager->flush();

            return $this->redirectToRoute('usuarios_c_r_u_d_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('usuarios_crud/new.html.twig', [
            'usuario' => $usuario,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="usuarios_c_r_u_d_show", methods={"GET"})
     */
    public function show(Usuarios $usuario): Response
    {
        return $this->render('usuarios_crud/show.html.twig', [
            'usuario' => $usuario,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="usuarios_c_r_u_d_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Usuarios $usuario, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('usuarios_c_r_u_d_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('usuarios_crud/edit.html.twig', [
            'usuario' => $usuario,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="usuarios_c_r_u_d_delete", methods={"POST"})
     */
    public function delete(Request $request, Usuarios $usuario, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usuario->getId(), $request->request->get('_token'))) {
            $entityManager->remove($usuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('usuarios_c_r_u_d_index', [], Response::HTTP_SEE_OTHER);
    }
}
