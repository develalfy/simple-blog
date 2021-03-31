<?php

namespace Blog\Repositories;

class PostRepository implements PostRepositoryInterface
{
    public function getAllPosts(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'new post',
                'desc' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum'
            ],
            [
                'id' => 2,
                'title' => 'new post 2',
                'desc' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum'
            ]
        ];
    }
}