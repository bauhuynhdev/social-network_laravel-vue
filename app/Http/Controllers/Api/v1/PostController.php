<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Store;
use App\Http\Requests\Post\Update;
use App\Post;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    public function index()
    {
        $posts = Post::with(
            [
                'user' => function ($user) {
                    if (auth()->check()) {
                        $user->with('mutualFriends');
                    }
                }
            ]
        )
            ->withCount('comments AS comments')
            ->withCount('likes AS likes')
            ->paginate(
                config('custom.paginate')
            );

        return $this->respondSuccess($posts);
    }

    public function store(Store $request)
    {
        $params = $request->only('content');
        $post = Post::create($params);

        return $this->respondSuccess($post, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $post = Post::with('user')
            ->withCount('likes AS likes')
            ->withCount('comments AS comments')
            ->find($id);

        return $this->respondSuccess($post);
    }

    public function update(Update $request, $id)
    {
        $params = $request->only('content');
        $post = $this->getPostByOwner($id);
        if ( ! $post->count()) {
            return $this->respondError('You cannot update this post!');
        }
        $post->update($params);

        return $this->respondSuccess(
            $post->first()
        );
    }

    protected function getPostByOwner($id)
    {
        return Post::where(['id' => $id, 'user_id' => $this->getUserId()]);
    }

    public function destroy($id)
    {
        $post = $this->getPostByOwner($id);
        if ( ! $post->count()) {
            return $this->respondError('You cannot delete this post!');
        }
        $post->delete();

        return $this->respondNoContent();
    }
}
