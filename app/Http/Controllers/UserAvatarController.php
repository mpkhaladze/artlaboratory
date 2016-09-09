<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Http\Requests;

class UserAvatarController extends Controller
{
        /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
/*    public function update(Request $request)
    {
        $path = $request->file('avatar')->store('avatars');
        dd($path);

        return $path;
    }*/

    public function upload(Request $request)
    {

    dd($request->all());
    $imageTempName = $request->file('1')->getPathname();
    dd($imageTempName);
        $imageName = $request->file('photo')->getClientOriginalName();
        $path = base_path() . '/public/uploads/consultants/images/';
        $request->file('photo')->move($path , $imageName);
        DB::table('consultants')
            ->where('photo', $imageTempName)
            ->update(['photo' => $imageName]);
        return back()->with(compact('fileName'));

    }
}
