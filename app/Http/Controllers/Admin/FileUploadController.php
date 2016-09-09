<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
        public function upload(Request $request)
    {
dd('here');
		$imageTempName = $request->file('photo')->getPathname();
        $imageName = $request->file('photo')->getClientOriginalName();
        $path = base_path() . '/public/uploads/consultants/images/';
        $request->file('photo')->move($path , $imageName);
        DB::table('consultants')
            ->where('photo', $imageTempName)
            ->update(['photo' => $imageName]);
		return back()->with(compact('fileName'));

    }
}
