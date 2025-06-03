<?php

namespace App\DataFixtures;

use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $servicesData = [
            [
                'name' => 'Maçonnerie Générale',
                'description' => 'Construction et rénovation de murs porteurs, façades et fondations. Nous bâtissons l\'avenir de vos projets avec expertise.',
                'image' => 'images/services/service-1.jpg'
            ],
            [
                'name' => 'Rénovation de Façades',
                'description' => 'Nettoyage, ravalement et isolation thermique par l\'extérieur. Redonnez éclat et performance énergétique à votre bâtiment.',
                'image' => 'images/services/service-2.jpg'
            ],
            [
                'name' => 'Aménagements Extérieurs',
                'description' => 'Création de terrasses, allées, murets, clôtures et autres structures pour sublimer vos espaces de vie en extérieur.',
                'image' => 'images/services/service-3.jpg'
            ],
            [
                'name' => 'Dallage et Béton Armé',
                'description' => 'Réalisation de dalles en béton, radiers et ouvrages en béton armé pour des bases solides et durables, adaptées à tout projet.',
                'image' => 'images/services/service-4.jpg'
            ],
            [
                'name' => 'Ouverture Murs Porteurs',
                'description' => 'Création d\'ouvertures sécurisées dans les murs porteurs, incluant l\'étude structurelle et le renforcement nécessaire, pour agrandir vos espaces.',
                'image' => 'images/services/service-5.jpg'
            ],
            [
                'name' => 'Petits Travaux & Réparations',
                'description' => 'Interventions rapides pour les réparations diverses, scellements, ragréages, ou tout autre petit chantier spécifique nécessitant notre savoir-faire.',
                'image' => 'images/services/service-6.jpg'
            ],
        ];

        foreach ($servicesData as $data) {
            $service = new Service();
            $service->setName($data['name']);
            $service->setDescription($data['description']);
            $service->setImagePath($data['image']);
            $manager->persist($service);
        }

        $manager->flush();
    }
}