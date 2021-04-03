<?php


namespace Blog\Services;


use Blog\Models\Article;
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
     * @return Article
     */
    public function getPost(int $id): Article
    {
        return $this->postRepository->getArticle($id);
    }
}