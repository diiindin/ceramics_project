<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function index(Request $req) {

        $allowedFileExtensions = ['png','jpg'];
        $file = $req->file('file');
        $extension = $file->getClientOriginalExtension();
        $check = in_array($extension, $allowedFileExtensions);

        if($check) {
            $req->file('file')->store('uploads');
            return 'successfully added';
        }
        return 'failed to upload';
    }
}
