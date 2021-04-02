<?php

namespace Blog\Repositories;

use Blog\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getAllPosts(): array
    {
        $postsArr = [
            [
                'id' => 1,
                'title' => 'new post 1',
                'desc' => 'lorem 1 ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
                'datetime' => '2012-03-24 17:45:12'
            ],
            [
                'id' => 2,
                'title' => 'new post 2',
                'desc' => 'lorem 2 ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
                'datetime' => '2012-03-25 12:45:12'
            ]
        ];

        $posts = [];

        foreach ($postsArr as $key => $post) {
            $posts[$key] = $this->post->toObject($post);
        }

        return $posts;
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