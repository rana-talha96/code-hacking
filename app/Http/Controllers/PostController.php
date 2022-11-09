<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
            $input['password'] = bcrypt($request['password']);
            $user = auth()->user();
            $input['user_id'] = $user->id;
            $post = Post::create($input);
            Photo::where('id', $photo->id)->update(array('post_id' => $post->id));
        } else {
            $input['password'] = bcrypt($request['password']);
            $user = auth()->user();
            $input['user_id'] = $user->id;
            Post::create($input);
        }
        Session::flash('add_new_post', 'New Post Added Succesfully');
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all()->pluck('name', 'id');
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo_id')){
            if ($post->photo_id){
                $photo = Photo::findOrFail($post->photo->id);
                unlink(public_path() . $photo->file);
                $photo->delete();
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
            Photo::where('id', $photo->id)->update(array('post_id' => $post->id));
        }
        $post->update($input);
        Session::flash('update_post', 'The Post update Succesfully');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        unlink(public_path() . $post->photo->file);
        $post->delete();
        Session::flash('deleted_post', 'The Post has been Deleted Succesfully');
        return redirect(route('posts.index', compact('post')));
    }
}
