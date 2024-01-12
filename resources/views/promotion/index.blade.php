@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
{{__('mainpage.Promotion')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">

    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{__('mainpage.Promotion')}}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">{{__('mainpage.Promotion')}}</li>
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
        <button type="button" class="btn btn-primary btn-sm" 
    data-toggle="modal" data-target="#Delete_all">
        تراجع الكل
    </button>
        <div class="card card-statistics h-100">
            <div class="card-body">
                <a href="{{route('Promotion.create')}}" class="btn btn-success btn-sm nextBtn btn-lg pull-rigt" type="button">{{__('students.add_promotion')}}</a>
                <div class="table-responsive">
                    <table id="datatable" class="table table-hover table-sm tablebordered p-0" data-page-lenth="50" >
                <thead>
                    <tr class="table-success">
                        <th>#</th>
                        <th>{{__('students.email')}}</th>
                        <th>{{__('students.Name')}}</th>
                        <th>{{__('students.gender')}}</th>
                        <th>{{__('students.grades')}}</th>    
                        <th>{{__('students.class')}} </th>
                        <th>{{__('students.section')}}</th>  
                        <th>{{__('students.procsess')}} </th>  
                    </tr>
                </thead>
                <tbody>
                     
                    <tr>
                        
                    @foreach ($promotions as $promotion)
                    <td>{{$promotion->id}}</td>     
                    <td>{{$promotion->student->name}}</td>
                    <td>{{$promotion->f_grade->name}}</td>
                    <td>{{$promotion->f_class->name}}</td>
                    <td>{{$promotion->f_section->name}}</td>
                    <td>{{$promotion->to_grade->name}}</td>
                           <td>{{$promotion->to_grade->name}}</td>
                                  <td>{{$promotion->to_grade->name}}</td>
                   
                    
                    <td>
                        <a class="btn btn-info btn-sm" href="{{route('Promotion.edit')}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        
                        <a class="btn btn-danger btn-sm"href="{{route('Promotion.destroy')}}" >
                            <i class="fa fa-trash"></i>
                        
                       
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
