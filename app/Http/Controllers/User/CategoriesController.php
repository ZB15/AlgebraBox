<?php

namespace App\Http\Controllers\User;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
use Session;
use Sentinel;
>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf
use Illuminate\Http\Request;
use Centaur\AuthManager;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Auth;
use App\Models\Category;
use Sentinel;
=======
use App\Models\Sections;
use App\Models\Categories;
use App\Models\Users;
use App\Models\CategorieUser;


>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf

class CategoriesController extends Controller
{
	
	
	public function __construct()
    {
        // Middleware
        $this->middleware('sentinel.auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	
    {
<<<<<<< HEAD
		$user = Sentinel::getUser();
		$categories = DB::table('categories')->where('user_id', $user->id)->get();	
		return view('user.categories.index')->with('categories', $categories);
=======
		
		$categories = Categories::all();
		
		
        return view('user.categories.index', ['categories' => $categories]);
>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
<<<<<<< HEAD
		$name =  $request->input('name');
		$user = Sentinel::getUser();
		
		$cat = new Category;

        $cat->name = $name;
		$cat->user_id = $user->id;

        $cat->save();

		$categories = DB::table('categories')->where('user_id', $user->id)->get();	
		return view('user.categories.index')->with('categories', $categories);
=======
		
    	$sections = sections::all();
		
        return view('user.categories.create', ['sections' => $sections]);
>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf
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
		
		
		
		
		
		 // Unos u tablicu categories
        $categories = new Categories();
        $categories->name = $request->name;
		$categories->sections_id = $request->sections_id;
        $categories->save();
		
		// Unos u pivot tablicu users_categories
		
	    $user = Sentinel::getUser()->id;
		
		$users_categories = new CategorieUser();
		$users_categories->user_id = $user;
		$users_categories->categorie_id = $categories->id;
		$users_categories->save();
		
		
		// return na list
		
      
       return redirect()->route('categories.index');
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
