<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;
use App\Http\Requests;
use File;
use Input;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $records = courses::all();
        return view('admin.table',['records'=>$records]);
    }

    public function admin()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.playlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $file=$request->file;
            $file_name=$file->getClientOriginalName();
            $files_len=strlen($file_name);
            $dot_pos=strpos($file_name,".") + 1;
            $ext_len=$files_len - $dot_pos;
            $extension= substr($file_name, -$ext_len);
            if($extension=="jpg" || $extension=="jpeg" || $extension=="png")
            {
                $filename=uniqid().$file->getClientOriginalName();
                
                $file->move('assets/images',$filename);
                $data=array(
                        'name'=>$request->input('name'),
                        'playlist_id'=>$request->input('playlist_id'),
                        'picture'=>$filename
                    );

                courses::create($data);
            }
        return redirect('playlist_view');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        courses::findOrFail($id)->delete($id);
        return redirect('playlist_view');
    }
}
