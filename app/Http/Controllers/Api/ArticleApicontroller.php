<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleApicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article=Article::all();
        return $article;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article= new Article();
        $article->code=$request->input('code');
        $article->name=$request->input('name');
        $article->Sale_Price=$request->input('Sale_Price');
        $article->stock=$request->input('stock');
        $article->description=$request->input('description');
        $article->state=$request->input('state');
        $article->idcategory=$request->input('idcategory');
        $article->save();
        return $article;
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        try {
            $article = Article::find($id);
            if (!$article) {
                return response()->json(['error' => 'Artículo no encontrado'], 404);
            }
            $article->update($request->all());
            return response()->json($article);
        } catch (Exception $e) {
            return response()->json(['error' => 'No se pudo actualizar', 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy($id) {
        $article = Article::find($id);
        if (!$article) {
            return response()->json(['error' => 'Artículo no encontrado'], 404);
        }
        $article->delete();
        return response()->json(['message' => 'Artículo eliminado']);
    }
}

