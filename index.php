<?php
require_once('./vendor/autoload.php');

use Blog\Controllers\PostController;
use Blog\Repositories\PostRepository;
use Blog\Services\PostService;
use Klein\Klein;

$klein = new Klein();

$klein->respond('GET', '/', function () {
    return (new PostController(new PostService(new PostRepository())))->index();
});

$klein->dispatch();