<?php

namespace Blog\Repositories;

use Blog\Models\Post;
use Blog\Classes\Database;
use UnexpectedValueException;

class PostRepository implements PostRepositoryInterface
{
    private $post;
    private $db;

    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->db = Database::getInstance();
    }

    /**
     * @return array
     */
    public function getAllPosts(): array
    {
        $posts = $this->db->getConn()
            ->query(
                "SELECT * FROM posts ORDER BY created_at DESC LIMIT {$this->post->getPostsPerPageLimit()}"
            )
            ->fetchAll();

        $postsArray = [];
        foreach ($posts as $key => $post) {
            $postsArray[$key] = $this->post->toObject($post);
        }

        return $postsArray;
    }

    /**
     * @param int $id
     * @return Post
     * @throws UnexpectedValueException
     */
    public function getPost(int $id): Post
    {
        $singlePost = $this->db->getConn()
            ->query(
                "SELECT * FROM posts WHERE ID = {$id}"
            )
            ->fetchAll();

        if (empty($singlePost)){
            throw new UnexpectedValueException();
        }

        return $this->post->toObject($singlePost[0]);
    }
}