<?php
declare(strict_types=1);

class TagController
{
    private Tags $tagModel;

    public function __construct() {
        $this->tagModel = new Tags();
    }
    public function listTags(): void {
        $this->tagModel->findTags();
    }
}