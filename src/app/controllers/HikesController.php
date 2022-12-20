<?php
declare(strict_types=1);

class HikesController
{
    private Hikes $hikeModel;

    public function __construct()
    {
        $this->hikeModel = new Hikes();
    }

    public function index(): void
    {
        $products = $this->hikeModel->findAll();

        include 'app/views/layout/head.view.php';
        include 'app/views/Hikes.view.php';
        include 'app/views/layout/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("Hike code was not provided.");
        }

        $product = $this->hikeModel->find($code);

        include 'app/views/layout/head.view.php';
        include 'app/views/Hikes.view.php';
        include 'app/views/layout/footer.view.php';
    }
}