<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class HelloController extends Controller
{
    public function index(Request $request) {
        return view('hello.index', ['msg' => 'フォームを入力：']);
    }

    public function add(Request $request) {
        // WRITE DOWN SOME CODES
        // INSERT
        DB::table('m_women')->insert(
               ['tall' => $request->tall, 'age' => $request->age, 'cup' => $request->cup]
        );
        return redirect('/hello/list');
    }

    public function list(Request $request) {
        // WRITE DOWN SOME CODES
        // SELECT
        $items = DB::table('m_women')->get();
        return view('hello.list', ['items' => $items]);
    }

    public function update(Request $request) {
        // WRITE DOWN SOME CODES
        // UPDATE
        DB::table('m_women')
            ->where('id', '=', $request->id)
            ->update([
                'tall' => $request->tall,
                'age' => $request->age,
                'cup' => $request->cup,
            ]);
        return redirect('/hello/list');
    }

    public function delete(Request $request) {
        // WRITE DOWN SOME CODES
        // DELETE
        DB::table('m_women')
            ->where('id', '=', $request->id)
            ->delete();
        return redirect('/hello/list');
    }

}
