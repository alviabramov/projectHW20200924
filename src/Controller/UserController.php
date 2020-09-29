<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    public function create()
    {

        $user = new User();
        $user->setName("Ivan");
        $user->setSurname("Ivanov");

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->render('hello-world.twig', ['name' => 'Ded Moroze']);
    }

    public function read(\Symfony\Component\HttpFoundation\Request $request)
    {
        $id = (int) $request->get("id");
        if ($id >0) {
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);
            if ($user){
                return $this->render('user-entity.twig', ['user'=>$user]);
            } return $this->render('no-user.twig');
        }
    }

    public function delete(\Symfony\Component\HttpFoundation\Request $request)
    {
        $id = (int) $request->get("id");
        if ($id >0) {
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);
            if ($user){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($user);
                $entityManager->flush();

                return $this->render('user-delete.twig', ['user'=>$user]);
            } return $this->render('no-user.twig');
        }
    }

    public function update(\Symfony\Component\HttpFoundation\Request $request)
    {
        $id = (int) $request->get("id");
        if ($id >0) {
            /** @var user $user */
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);
            if ($user){
                $user->setName('UpdateName');
                $user->setSurname('UpdateSurname');
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                return $this->render('user-update.twig', ['user'=>$user]);
            } return $this->render('no-user.twig');
        }
    }



}