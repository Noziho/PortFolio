<?php

namespace App\Controller\API;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/api/projects', name: 'app_project_index')]
    public function index(ProjectRepository $projectRepository): JsonResponse
    {
        return $this->json($projectRepository->findAll());
    }


}
