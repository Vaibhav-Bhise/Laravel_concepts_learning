<?php

namespace Modules\Blog\Repository\Interface;
use Modules\Blog\Models\Post;

interface PostRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
