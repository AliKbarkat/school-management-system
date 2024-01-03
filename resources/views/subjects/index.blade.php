@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
المواد المدرسية
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> المواد المدرسية</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active"> المواد المدرسية</li>
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
              <p>{{__('grades.List_class')}}</p>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المادة</th>
                        <th scope="col">المرحلة التعليمية</th>
                        <th scope="col">الصف</th>
                        <th scope="col">العمليات</th>

                     
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($subjects as $subject)
                        
                 
                      <tr>
                        <th scope="row">{{$subject->id}}</th>

                        <td>{{$subject->grade->name_ar}}</td>
                 
                      <td>{{$subject->clases->name_class_ar}}</td> 
                      <td>{{$subject->teacher->Name}}</td>
                      <td><a class="btn btn-info btn-sm" href="">
                        <i class="fa fa-edit"></i></a>
                       <a class="btn btn-danger btn-sm" href=""  >
                        <i class="fa fa-trash"></i></a></td>

                      </tr>
                        
                      @endforeach
                    </tbody>
             
                  </table>
            </div>
            <a class="btn btn-dark"
                  href="{{route('subject.create')}}"
                 >اضافة مادة</a>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
