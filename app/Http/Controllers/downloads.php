<?php

namespace app\http\controllers;

use Illuminate\Support\Facades\Storage;
use illuminate\Http\Request;

class downloads extends Controller{
    /* get file from storage */
    public function download(Request $request){
        if(Storage::disk('public')->exists("public/$request->file")){
            $path = Storage::disk('public')->path("public/$request->file");
            $content = file_get_contents($path);
            return response($content)->withHeaders([
                'Content-Type' => mime_content_type($path)
            ]);
        }
        return redirect('/404');
    }
}


?>
