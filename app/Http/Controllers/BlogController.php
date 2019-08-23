<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\User;

class BlogController extends Controller
{
    private $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $blogs = $this->blogRepository->all();

       return $blogs;
    }

    public function edit($id)
    {
        $user = User::find($id);
        $blogs = $this->blogRepository->getByUser($user);
        return $blogs;
    }
}
