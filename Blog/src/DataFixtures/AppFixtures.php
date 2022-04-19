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
        //we use faker library to have fake random information
        $faker = Factory::create('fr_FR');
        for($i = 0; $i<10; $i++){
            $post = new Post();
            $post->setTitle($faker->sentence($nbWords=2, $variableNbWords= true))
                ->setContent($faker->sentence($nbWords=10, $variableNbWords= true))
                ->setAuthor($faker->name())
                ->setCreateAt(new \DateTimeImmutable());
                $manager->persist($post);
        }

        $manager->flush();
    }
}
