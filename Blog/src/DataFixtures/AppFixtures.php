<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Post;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create
        for($i = 0; $i<10; $i++){

            $post = new Post();
            $post->setTitle('Titre 1')
                ->setContent('spring boot and angular tutorial')
                ->setAuthor('Mary')
                ->setCreateAt(new \DateTimeImmutable());

                $manager->persist($post);
        }

        $manager->flush();
    }
}
