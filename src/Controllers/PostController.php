<?php

namespace Blog\Controllers;

use Blog\Services\PostService;

class PostController extends BaseController
{
    /**
     * @var PostService
     */
    private $postService;

    /**
     * PostController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @return array
     */
    public function index(): array
    {
        return $this->postService->getAllPosts();
    }

    /**
     * @param $id
     * @return array
     */
    public function show($id): array
    {
        return $this->postService->getPost($id);
    }
}