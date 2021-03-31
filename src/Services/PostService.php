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
    public function paginatedPosts(): array
    {
        return $this->postRepository->getAllPosts();
    }
}