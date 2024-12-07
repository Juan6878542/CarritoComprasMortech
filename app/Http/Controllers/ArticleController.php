<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article=Article::all();
        return view('dashboard.article.index',['article'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view ('dashboard.article.create',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article= new Article();
        $article->code=$request->input('code');
        $article->name=$request->input('name');
        $article->Sale_Price=$request->input('Sale_price');
        $article->stock=$request->input('stock');
        $article->description=$request->input('description');
        $article->state=$request->input('state');
        $article->idcategory=$request->input('category');
        $article->save();
        return view("dashboard.article.message",['msg'=>"Articulo Creado con Exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article=Article::find($id);
        return view('dashboard.article.edit',['article'=>$article,'category'=>Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Obtener el artículo por su ID
    $article = Article::findOrFail($id);

    $article->code = $request->input('code');
    $article->name = $request->input('name');
    $article->Sale_Price = $request->input('Sale_Price');
    $article->stock = $request->input('stock');
    $article->description = $request->input('description');
    $article->state = $request->input('state');
    $article->idcategory = $request->input('category');

    $article->save();

    return view('dashboard.article.message', ['msg' => 'Artículo Actualizado con Éxito']);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect("dashboard/article");
    }
}
