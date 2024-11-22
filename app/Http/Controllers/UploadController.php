<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function __invoke(Request $request)
    {
        $validasi = Validator::make([
            'upload' => $request->upload
        ], [
            'upload' => 'required|image|max:1024'
        ], [
            'image' => 'File bukan foto',
            'max' => 'File maksimal 1 MB'
        ]);

        if($validasi->fails()){
            return [
                'error' => [
                    'message' => $validasi->errors()->first()
                ]
            ];
        }

        return [
            'url' => Storage::url($request->file('upload')->storePublicly('artikel-folder', 'public'))
        ];
    }
}
