<?php 
declare(strict_types=1);

class TagController
{
    public function __construct()
    {
        $this->tagModel = new Tags();
    }
    public function Tag() : void
    {
        $Tags = $this->tagModel->findAll();
        include 'app/views/layout/head.view.php';
        include 'app/views/Tags.view.php';
        include 'app/views/layout/footer.view.php';
    }    
}
?>