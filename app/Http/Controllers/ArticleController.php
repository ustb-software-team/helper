<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Articles as ArticleResource;
use App\Models\Article;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index(Request $request)
    {
        // 是否仅仅请求根节点列表 TODO: API 为 get 方式，参数 onlyRoot 1 时仅返回根节点，默认为 0
        $onlyRoot = $request->input('onlyRoot',0);
        $articles = Article::where('isRoot',$onlyRoot)->get();
//        $articles = Article::where('isRoot',0)->get();
        return ArticleResource::collection($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
