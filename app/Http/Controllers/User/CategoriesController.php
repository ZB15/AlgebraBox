<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Centaur\AuthManager;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Category;
use Sentinel;

class CategoriesController extends Controller
{
	
	public function __construct()
    {
        // Middleware
        $this->middleware('sentinel.auth');
        $this->middleware('sentinel.access:categories.create', ['only' => ['create', 'store']]);
        $this->middleware('sentinel.access:categories.view', ['only' => ['index', 'show']]);
        $this->middleware('sentinel.access:categories.update', ['only' => ['edit', 'update']]);
        $this->middleware('sentinel.access:categories.destroy', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$user = Sentinel::getUser();
		$categories = DB::table('categories')->where('user_id', $user->id)->get();	
		return view('user.categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
		$name =  $request->input('name');
		$user = Sentinel::getUser();
		
		$cat = new Category;

        $cat->name = $name;
		$cat->user_id = $user->id;

        $cat->save();

		$categories = DB::table('categories')->where('user_id', $user->id)->get();	
		return view('user.categories.index')->with('categories', $categories);
    }
	
	public function getcreate() {
		return view('user.categories.new');
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
        $post=Post::findOrFail($id);
		return view('user.categories.edit',compact('post'));
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
    }
}
