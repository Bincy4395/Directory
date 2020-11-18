<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FilesController extends Controller
{
    public function search(Request $request)
    {      
        $path='public/directories';
        $keyword = $request->get('search_keyword');
        $allFiles = [];

        if(! $keyword)
           return view('search')->with('files', $allFiles); 

        //check for extensions
        $extension =  strstr($keyword,".");
       
        $sub_folder = $path .'/' . $keyword;
        $allFiles = Storage::allFiles( $sub_folder);
        
        return view('search')->with('files', $allFiles); 
              
    }
}
