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
        $hikes = $this->hikeModel->findAll();
        include 'app/views/layout/head.view.php';
        include 'app/views/Hikes.view.php';
        include 'app/views/layout/footer.view.php';

        /*for ($x = 0; $x <= sizeof($hikes); $x++) {
            if(is_null($hikes[$x]['nickname'])) {
                $hikes[$x]['nickname'] = "Deleted User";
            }
        }*/
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

        $hike = $this->hikeModel->find($code);

        include 'app/views/layout/head.view.php';
        include 'app/views/SingleHike.view.php';
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

    public function showDeleteHike(string $code): void
    {
        // duplicate ...
        $hike = $this->hikeModel->find($code);
        // are you sure ?
        include 'app/views/layout/head.view.php';
        include 'app/views/DeleteHike.view.php';
        include 'app/views/layout/footer.view.php';

    }

    public function deleteHike(string $code): void
    {
        $this->hikeModel->removeHike($code);
        http_response_code(302);
        header('location: /hikes');
    }

}