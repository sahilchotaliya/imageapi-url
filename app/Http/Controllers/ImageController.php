<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showUploadForm()
{
    return view('upload');
}

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $fileName);

            $downloadLink = url('uploads/' . $fileName);

            return response()->json(['link' => $downloadLink], 200);
        }

        return response()->json(['error' => 'No image found'], 400);
    }
}
