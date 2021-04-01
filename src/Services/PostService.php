<?php


namespace Blog\Services;


use Blog\Repositories\PostRepositoryInterface;

class PostService
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @return array
     */
    public function getAllPosts(): array
    {
        return $this->postRepository->getAllPosts();
    }
}