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
        $hikes = $this->hikeModel->findLongest();
        // get the last hike added
        $productLast = $this->hikeModel->findLast();

        include 'app/views/layout/head.view.php';
        include 'app/views/Home.view.php';
        include 'app/views/layout/footer.view.php';
    }

    public function show(string $code): void
    {
        try {
            if (empty($code)) {
                throw new Exception("Hike code was not provided.");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $hike = $this->hikeModel->find($code);

        include 'app/views/layout/head.view.php';
        include 'app/views/SingleHike.view.php';
        include 'app/views/layout/footer.view.php';
    }

    // showAddHike
    public function showAddHike(): void
    {
        $tagsController = new TagController();
        $tags = $tagsController->listTags();
        include 'app/views/layout/head.view.php';
        include 'app/views/AddHike.view.php';
        include 'app/views/layout/footer.view.php';

    }

    public function addHike(array $input): void
    {
        try {
            if (empty($input['name']) || empty($input['distance']) || empty($input['duration']) || empty($input['elevationGain']) || empty($input['description'])) {
                throw new Exception('Form data not validated.');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        // Sanitize input
        $name = htmlspecialchars($input['name']);
        $distance = $input['distance'];
        $duration = $input['duration'];
        $elevationGain = $input['elevationGain'];
        $description = htmlspecialchars($input['description']);
        $userId = $_SESSION['user']['uid'];
        $tagName = htmlspecialchars($input["tags"]);

        $this->hikeModel->createHike($name, $distance, $duration, $elevationGain, $description, $userId, $tagName);

        http_response_code(302);
        header('location: /');

    }

    public function showDeleteHike(string $code, int $uid): void
    {
        $hike = $this->hikeModel->find($code);

        if ($uid === $hike['userId']) {
            include 'app/views/layout/head.view.php';
            include 'app/views/DeleteHike.view.php';
            include 'app/views/layout/footer.view.php';
        } else {
            include 'app/views/layout/head.view.php';
            echo 'You did not create this hike';
            include 'app/views/layout/footer.view.php';
        }
    }

    public function deleteHike(string $code): void
    {
        $this->hikeModel->removeHike($code);
        http_response_code(302);
        header('location: /hikes');
    }

    public function showMyHikes(int $uid)
    {
        $hikes = $this->hikeModel->findMyHikes($uid);
        include 'app/views/layout/head.view.php';
        include 'app/views/MyHikes.view.php';
        include 'app/views/layout/footer.view.php';
    }

    public function showUpdateHike(string $code, int $uid): void
    {
        $hike = $this->hikeModel->find($code);

        if ($uid === $hike['userId']) {
            include 'app/views/layout/head.view.php';
            include 'app/views/UpdateHike.view.php';
            include 'app/views/layout/footer.view.php';
        } else {
            include 'app/views/layout/head.view.php';
            echo 'You did not create this hike';
            include 'app/views/layout/footer.view.php';
        }
    }
    public function updateHike(array $input): void
    {

        try {
            if (empty($input['name']) || empty($input['distance']) || empty($input['duration']) || empty($input['elevationGain']) || empty($input['description'])) {
                throw new Exception('Form data not validated.');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $name = htmlspecialchars($input['name']);
        $distance = $input['distance'];
        $duration = $input['duration'];
        $elevationGain = $input['elevationGain'];
        $description = htmlspecialchars($input['description']);
        $hid = $_GET['code'];
        $update = date('Y-m-d H:i:s');

        $this->hikeModel->updatingHike($name, $distance, $duration, $elevationGain, $description, $update ,$hid);


    }

    public function relationTag(string $hikeId, string $tagId): void {

        $this->hikeModel->addTagHike($hikeId, $tagId);

    }

    public function idHike(string $name)
    {
        $name = htmlspecialchars($name);
        return $this->hikeModel->getIdHike($name);


    }

}