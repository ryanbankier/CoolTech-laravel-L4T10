<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class adminController extends Controller
{
    //function querys DB and returns result to admin page
    function index() {

        $articles = DB::table('tech_articles')->get();

        return view('admin.index', ['articles'=>$articles]);
    }

    // function validates and adds new articles tech_articles table
    function add(Request $request){
        
        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);
        //genertates url friendly slug
        $slug = Str::of($request->input('category'))->slug('-');

       $query = DB::table('tech_articles')->insert([
            'title'=> $request->input('title'),
            'content'=> $request->input('content'),
            'category'=> $request->input('category'),
            'cat_slug'=> $slug,
            'tags'=> $request->input('tags')
       ]);

       return redirect('/');
    
    }

    // delete fucntion is called from admin page when administrator wants to remove an article
    function delete($id){
        
        $delete = DB::table('tech_articles')
                    ->where('id', $id)
                    ->delete();
        return redirect('admin');
    }

    // function displays an article page base on the article id recived from url
    function article($id){

        $article = DB::table('tech_articles')
                    ->find($id);
        
        return view('article', ['article'=>$article]);           
    }

    // function queries DB based on id and returns data of the row
    function edit($id){
        $row = DB::table('tech_articles')
                ->where('id', $id)
                ->first();

        $data = [
            'data'=>$row,
            'Title'=>'Edit'
        ];

        return view('admin.edit', $data);
    }
    
    // updates DB when admin as finished editing existing articles
    function update(Request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'category'=>'required',
            
        ]);
        //genertates url friendly slug
        $slug = Str::of($request->input('category'))->slug('-');

       $updateDB = DB::table('tech_articles') 
                        ->where('id', $request->input('id'))
                        ->update([
                            'title'=>$request->input('title'),
                            'content'=>$request->input('content'),
                            'category'=>$request->input('category'),
                            'cat_slug'=>$slug,
                            'tags'=>$request->input('tags')

                        ]);
            return redirect('admin');
    }

    function author(){
        return view('admin.author');
    }

    // displays articles based on url slug 
    function category($slug){

        $category = DB::table('tech_articles')
                ->where('cat_slug', $slug)
                ->get();

        return view('category', ['category'=>$category]);
    }

    // displays articles based on tags
    function tags($tag){
       
        $tags = DB::table('tech_articles')
        ->where('tags','LIKE', '%'. $tag .'%')
        ->get();
        return view('tags', ['tags'=>$tags]);
    }

   

    function search(){

        return view('search');
    }

    // function queries DB based on search term and filter
    function searchResult(Request $request){
        if ($request->input('filter') === 'id'){
        $request->validate([
            'search'=>'required|regex:/(\d)/',
        ]);
    }
        

        if ($request->input('filter') === 'id'){
            
            $id = (int)$request->input('search');
            $results = DB::table('tech_articles')
                ->where($request->input('filter'), $id)
                ->get();
                
        }elseif($request->input('filter') === 'tags'){
            $results = DB::table('tech_articles')
            ->where('tags','LIKE', '%'. $request->input('search') .'%')
            ->get();
            
        }
        else{
            $results = DB::table('tech_articles')
                ->where($request->input('filter'), $request->input('search'))
                ->get();
        }

        

        return view('search', ['results'=> $results]);
    }


}
