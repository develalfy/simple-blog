<?php


namespace Blog\Services;


use Blog\Models\Post;
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

    /**
     * @param int $id
     * @return Post
     */
    public function getPost(int $id): Post
    {
        return $this->postRepository->getPost($id);
    }
}