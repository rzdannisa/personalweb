<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createarticle()
	{
		$tags = \App\tag::all();
		return view('artikel/add')->with('tags',$tags);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storearticle()
	{
		$post = new \App\artikel;
		$post->tag = Input::get('tag');
		$post->title = Input::get('title');
		$post->slug = Input::get('title');
		$post->content = Input::get('content');
		$post->created_by = Auth::user()->name;

		$post->save();
		return redirect(url('article/add'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function allarticle()
	{
		$all = \App\artikel::all();
		return view('artikel/all')->with('all',$all);
	}

	public function showarticle($slug)
	{
		$data = array('data'=>Posts::where('slug',$slug)->first());
		return view('artikel/show')->with($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editarticle($slug)
	{
		$data = array('data'=>Posts::where('slug',$slug)->first());
		return view('artikel/edit')->with($data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updatearticle($id)
	{
		$post = \artikel::find(Input::get('id'));
		$post->tag = Input::get('tag');
		$post->title = Input::get('title');
		$post->slug = Input::get('title');
		$post->content = Input::get('content');
		$post->created_by = Auth::user()->name;

		$post->save();
		return redirect(url('article/all'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroyarticle($slug)
	{
		\artikel::where('slug',$slug)->delete();
		return redirect(url('article/all'));
	}

	public function createtags()
	{
		return view('tags/add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storetags()
	{
		$post = new \App\tag;
		$post->name = Input::get('name');
		$post->created_by = Auth::user()->name;
		$post->save();

		return redirect(url('tags/add'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function alltags()
	{
		$all = \App\tag::all();
		return view('tags/all')->with('all',$all);
	}

	public function showtags($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edittags($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updatetags($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deletetags($id)
	{
		\App\tag::find($id)->delete();
		return redirect(url('tags/all'));
	}

}
