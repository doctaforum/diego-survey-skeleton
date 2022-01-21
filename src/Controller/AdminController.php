<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\AdminType;
use App\Repository\AdminRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Replace;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_index", methods={"GET"})
     */
    public function index(AdminRepository $adminRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'admins' => $adminRepository->findAll()
        ]);
    }

    /**
     * @Route("/new", name="admin_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder): Response
    {
        $admin = new Admin();
        $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $admin->setRoles(["ROLE_ADMIN"]);
            $admin->setCreationDate(new DateTime());
            $admin->setIsActive(true);

            $encodedPass = $encoder->encodePassword($admin, $form['password']->getData());
            $admin->setPassword($encodedPass);

            $entityManager->persist($admin);
            $entityManager->flush();

            return $this->redirectToRoute('admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/new.html.twig', [
            'admin' => $admin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/mostrar/{id}/{edit}", name="admin_show", methods={"GET"})
     */
    public function show(Admin $admin, bool $edit = false): Response
    {
        return $this->render('admin/show.html.twig', [
            'admin' => $admin,
            'edit' => $edit
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_edit", methods={"POST"})
     */
    public function edit(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
        $email = $request->get("email");
        $name = $request->get("name");
        $firstname = $request->get("firstname");

        $admin->setEmail($email);
        $admin->setName($name);
        $admin->setFirstname($firstname);

        $entityManager->persist($admin);
        $entityManager->flush();

        return $this->redirectToRoute('admin_show', ["id" => $admin->getId()], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/{id}/enable", name="admin_enable", methods={"GET"})
     */
    public function enable(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
        $admin->setIsActive(true);

        $entityManager->persist($admin);
        $entityManager->flush();

        return $this->redirectToRoute('admin_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/{id}/disable", name="admin_disable", methods={"GET"})
     */
    public function disable(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
        $admin->setIsActive(false);

        $entityManager->persist($admin);
        $entityManager->flush();

        return $this->redirectToRoute('admin_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/{id}", name="admin_delete", methods={"POST"})
     */
    public function delete(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$admin->getId(), $request->request->get('_token'))) {
            $entityManager->remove($admin);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_index', [], Response::HTTP_SEE_OTHER);
    }

}
