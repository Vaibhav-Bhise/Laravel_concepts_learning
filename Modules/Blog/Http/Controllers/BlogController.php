<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Repository\Interface\PostRepositoryInterface;

class BlogController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->all();
        return view('blog::index', compact('posts'));
    }

    public function create()
    {
        return view('blog::create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $this->postRepository->create($data);

        return redirect()->route('blog.index');
    }

    public function show($id)
    {
        $post = $this->postRepository->find($id);
        return view('blog::show', compact('post'));
    }

    public function edit($id)
    {
        $post = $this->postRepository->find($id);
        return view('blog::edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $this->postRepository->update($id, $data);

        return redirect()->route('blog.index');
    }

    public function destroy($id)
    {
        $this->postRepository->delete($id);
        return redirect()->route('blog.index');
    }
}
