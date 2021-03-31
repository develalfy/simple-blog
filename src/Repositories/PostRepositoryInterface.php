<?php


namespace Blog\Repositories;


interface PostRepositoryInterface
{
    public function getAllPosts(): array;
}