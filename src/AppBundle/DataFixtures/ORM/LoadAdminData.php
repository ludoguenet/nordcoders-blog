<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class LoadAdminData extends AbstractFixture implements ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setUsername('Admin');
        $admin->setRoles(['ROLE_USER', 'ROLE_ADMIN']);

        $password = $this->container->get('security.password_encoder')->encodePassword($admin, 'admin');
        $admin->setPassword($password);

        $manager->persist($admin);
        $manager->flush();
    }
}
