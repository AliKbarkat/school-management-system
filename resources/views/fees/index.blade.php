@extends('layouts.master')
@section('css')

@section('title')
    قائمة الرسوم
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> قائمة الرسوم </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">قائمة الرسوم</li>
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

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('grades.name_class_ar')}}</th>
                        <th scope="col">{{__('grades.name_grade_ar')}}</th>
                        <th scope="col">{{__('grades.procsess')}}</th>
                     
                      </tr>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <th scope="row"></th>

                        <td><a href=""></a></td>
                 
                      <td></td> 
                          
                      <td><a class="btn btn-info btn-sm" href="">
                        <i class="fa fa-edit"></i></a>
                       <a class="btn btn-danger btn-sm" href=""  >
                        <i class="fa fa-trash"></i></a></td>

                      </tr>
                        
                     
                    </tbody>
             
                  </table>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
