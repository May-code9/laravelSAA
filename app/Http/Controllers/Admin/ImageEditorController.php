<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Image;

class ImageEditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getUser = User::findOrFail($id);
        return view('admin.body.passport.edit', compact('getUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $rule = [
        'passport' => 'required|mimes:jpeg,png|max:4000',
      ];

      $validator = Validator::make($request->all(), $rule);
      if($validator->passes()) {
        $imageFile = $request->file('passport');
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();

        $destinationPath = public_path('/passports');
        Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

        $passport = User::findOrFail($id);
        $passport->update(['passport' => $imageName]);

        $first_name = $passport->first_name;
        $last_name = $passport->last_name;

        return redirect('/users')->with('success_status', $first_name . ' ' . $last_name . " 's Image Uploaded Successfully");
      } else {
        return back()->withErrors($validator)->withInput();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
