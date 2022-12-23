<?php
declare(strict_types=1);

class TagController
{
    private Tags $tagModel;

    public function __construct() {
        $this->tagModel = new Tags();
    }
    public function listTags(): array
    {
        return $this->tagModel->findTags();
    }

}