<?php
namespace App\Repositry;

use App\Http\Traits\AttachFilesTrait;
use App\Models\Grade;
use App\models\Library;

class LibraryRepositry implements LibraryInterface{

    use AttachFilesTrait;
    public function index()
    {
        $library=Library::all();
        return view('library.index',compact('library'));
    }
    public function download($id)
    {

        return response()->download(public_path('attchments/library/'.$file_name));
    
    }
    public function create()
    {

        $grade=Grade::all();
        return view('library.create',compact('grade'));

    }
    public function edit($id){
        $library=Library::findOrfail($id);
        $grade=Grade::all();
        return view('library.edit',compact('grade','library'));
    }
    public function store($request){

        try{


            $library=new Library();
            $library->title=$request->title;
            $library->namefile=$request->namefile;
            $library->grade_id=$request->grade_id;
            $library->classroom_id=$request->classroom_id;
            $library->section_id=$request->section_id;
            $library->teacher_id= 1;
            $library->save();
            $this->uploadFile($request,'name_file','upload_attachments');
        }catch(\Exception $e)
        {
            return $e;
}
    }
    public function delete($id){

    }
    public function update($request){

        try{


            $library=Library::findOrFail($request->id);
            $library->title=$request->title;
            $this->
            $library->namefile=$request->namefile;
            $library->grade_id=$request->grade_id;
            $library->classroom_id=$request->classroom_id;
            $library->section_id=$request->section_id;
            $library->teacher_id= 1;
            $library->save();
            $this->uploadFile($request,'name_file','upload_attachments');
        }catch(\Exception $e)
        {
            return $e;
}
    }
}