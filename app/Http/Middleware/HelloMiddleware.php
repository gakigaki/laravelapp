<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    public function handle($request, Closure $next)
    {
        $data = [
            ['name'=>'aya', 'mail'=>'aya@kanon'],
            ['name'=>'hiromi', 'mail'=>'hiromi@kanon'],
            ['name'=>'hitomi', 'mail'=>'hitomi@ogu'],
        ];
        $request->merge(['data'=>$data]);
        $response = $next($request); //　ここで次のミドルウェアか実処理に移動

        $content = str_replace('kanon', 'yoshida', $response->content()); //レスポンスの中身を変える
        $response = $response->setContent($content);
        return $response;
    }
}
