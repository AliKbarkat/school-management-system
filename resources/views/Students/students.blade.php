@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
students
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('mainpage.students')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('mainpage.students')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <a href="{{route('students.create')}}" class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button">add student</a>
                <div class="table-responsive">
                    <table id="datatable" class="table table-hover table-sm tablebordered p-0" data-page-lenth="50" >
                <thead>
                    <tr class="table-success">
                        <th>#</th>
                        <th>{{__('Students.Email')}}</th>
                        <th>{{__('students.Name')}}</th>
                        <th>{{__('students.Gender')}}</th>
                        <th>{{__('students.Date_Birth')}}</th>
                        <th>{{__('students.grade')}}</th>    
                        <th>{{__('students.classroom')}} </th>
                        <th>{{__('students.Section')}}</th>  
                        <th>{{__('students.procsessn')}} </th>  
                    </tr>
                </thead>
                <tbody>
                     @foreach ($students as $student)
                    <tr>
                    <td> {{$student->id}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->gender->Name}}</td>
                    <td>{{$student->date_Birth}}</td>
                    <td>{{$student->grade->name_ar}}</td>
                    <td>{{$student->classroom->name_class_ar}}</td>
                    <td>{{$student->Section->name_ar}}</td>
                    
                    <td>
                        <a class="btn btn-info btn-sm" href="{{route('students.edit',$student->id)}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        
                        <a class="btn btn-danger btn-sm"href="{{route('students.destroy',$student->id)}}" >
                            <i class="fa fa-trash"></i>
                        </a>
                         <a class="btn btn-warning btn-sm"href="" >
                            <i class="fa fa-eye"></i>
                        </a>
                       
                    </td>
                </tr>
                 @endforeach 
                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
