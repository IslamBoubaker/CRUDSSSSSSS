<?php


namespace App\Controller;

use App\Entity\Service;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/services', name: 'app_services')]
    public function index(ServiceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findAll();

        return $this->render('service/index.html.twig', [
            'services' => $services, 
        ]);
    }

     #[Route('/service/{id}', name: 'app_service_detail')]
    public function show(Service $service): Response
    {
        return $this->render('service/show.html.twig', [
            'service' => $service
        ]);
    }
}

