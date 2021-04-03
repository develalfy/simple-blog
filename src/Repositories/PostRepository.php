<?php

namespace Blog\Repositories;

use Blog\Models\Post;
use Blog\Classes\Database;

class PostRepository implements PostRepositoryInterface
{
    private $post;
    private $db;

    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->db = Database::getInstance();
    }

    public function getAllPosts(): array
    {
        $posts = $this->db->getConn()->query("SELECT * FROM posts")->fetchAll();

        foreach ($posts as $key => $post) {
            $postsArray[$key] = $this->post->toObject($post);
        }

        return $postsArray;
    }

    /**
     * @param int $id
     * @return Post
     */
    public function getPost(int $id): Post
    {
        // query to get single post as array
        $postArr = [
            'id' => $id,
            'title' => 'new post ' . $id,
            'desc' => 'lorem ' . $id . ' ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
            'datetime' => '2012-03-24 17:45:12'
        ];

        return $this->post->toObject($postArr);
    }
}