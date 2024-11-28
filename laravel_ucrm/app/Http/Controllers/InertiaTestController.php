<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 追加 , Inertia::render を使うために 読み込む 
use Inertia\Inertia;
// model 読み込み
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    //

    /**
     *  追加 24_1128
     */
    public function index()
    {
        return Inertia::render('Inertia/Index');
    }

    // create
    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    /**
     *  CRUD show
     */
    public function show($id)
    {
        // dd($id);
        return Inertia::render('Inertia/Show',
        [
            'id' => $id
        ]);
    }

    /**
     *  DB 保存
     */
    public function store(Request $request)
    {
        $inertiaTest = new InertiaTest;
        // 左 => カラム , 右 => フォームデータ
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;

        $inertiaTest->save();

        // Lravel 9 からのリダイレクト処理
        return to_route('inertia.index');


    }

}
