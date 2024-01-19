@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
  {{__('main_page.class_room')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{__('main_page.class_room')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active"> {{__('main_page.class_room')}}</li>
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
              <p>{{__('grades.list_class')}}</p>
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
                      @foreach ($clases as $class)
                      <tr>
                        <th scope="row">{{$class->id}}</th>

                        <td><a href="">{{$class->name}}</a></td>
                 
                      <td>{{$class->grade->name}}</td> 
                          
                      <td><a class="btn btn-info btn-sm" href="{{route('class.edit',$class->id)}}">
                        <i class="fa fa-edit"></i></a>
                       <a class="btn btn-danger btn-sm" href="{{route('class.destroy',$class->id)}}"  >
                        <i class="fa fa-trash"></i></a></td>

                      </tr>
                        
                      @endforeach
                    </tbody>
             
                  </table>
            </div>
            <a class="btn btn-dark"
                  href="{{route('class.create')}}"
                 >{{__('grades.add_Class')}}</a>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
