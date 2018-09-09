<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;

class PostController extends Controller
{
    /**
     * Контроллер созданный с помощью ключа --resource
     */
    public function index()
    {
        // Отображения списка
        $posts = post::all(); // получение списка всех моделей
        return view('admin.post.list', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required',
            //'image' => 'required',
        ]);
        /*
        if($request->hasFile('image')) {
            $imageName =$request->image->store('public');
        }
*/

        $post = new post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect(route('post.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $post = post::with('tags', 'categories')->where('id', $id)->first();
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.edit', compact('post', 'tags', 'categories'));
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
        //
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required',
            //'image' => 'required',
        ]);

        $post = post::find($id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        post::where('id', $id)->delete();
        return redirect()->back();
    }
}
