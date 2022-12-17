<?php
declare(strict_types=1);

class HikesController
{
    private Hikes $hikeModel;

    public function __construct()
    {
        $this->hikeModel = new Product();
    }

    public function index(): void
    {
        $products = $this->hikeModel->findAll();

        include 'views/includes/header.view.php';
        include 'views/index.view.php';
        include 'views/includes/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("Hike code was not provided.");
        }

        $product = $this->hikeModel->find($code);

        include 'views/includes/header.view.php';
        include 'views/hikes.view.php';
        include 'views/includes/footer.view.php';
    }
}