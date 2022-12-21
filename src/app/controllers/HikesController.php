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


    public function showHome(): void
    {
        // get the 5 longest
        $products = $this->hikeModel->findLongest();
        // get the last hike added
        $productLast = $this->hikeModel->findLast();

        include 'app/views/layout/head.view.php';
        include 'app/views/Home.view.php';
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

    // showAddHike
    public function showAddHike(): void
    {

        include 'app/views/layout/head.view.php';
        include 'app/views/AddHike.view.php';
        include 'app/views/layout/footer.view.php';
    }

    public function addHike(array $input): void
    {
        if (empty($input['name']) || empty($input['distance']) || empty($input['duration']) || empty($input['elevationGain']) || empty($input['description'])) {
            throw new Exception('Form data not validated.');
        }
        // Sanitize input
        $name = htmlspecialchars($input['name']);
        $distance = $input['distance'];
        $duration = $input['duration'];
        $elevationGain = $input['elevationGain'];
        $description = htmlspecialchars($input['description']);
        $userId = $_SESSION['user']['uid'];


        $this->hikeModel->createHike($name, $distance, $duration, $elevationGain, $description, $userId);

        http_response_code(302);
        header('location: /');
    }

}