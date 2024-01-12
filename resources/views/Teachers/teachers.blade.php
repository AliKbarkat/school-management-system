@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
 {{__('mainpage.Teachers')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('teachers.list_teachers')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('mainpage.Teachers')}}</li>
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
                <a href="{{route('teacher.create')}}" 
                class="btn btn-success btn-sm nextBtn btn-lg pull-right" 
                type="button">{{ trans('teachers.add_teacher')}}</a>

                <div class="table-responsive">     
                <table id="datatable" 
                class="table table-hover table-sm tablebordered p-0" data-page-lenth="50" >
                <thead>
                    <tr class="table-success">
                        <th>#</th>
                        <th>{{__('teachers.email')}}</th>
                        <th>{{__('teachers.name_teacher')}}</th>
                        <th>{{__('teachers.gender')}}</th>
                        <th>{{__('teachers.joining_date')}}</th>
                        <th>{{__('teachers.address')}}</th>    
                        <th>{{__('teachers.specializations')}} </th>  
                        <th>{{__('teachers.procsess')}} </th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                    <tr>
                    <td> {{$teacher->id}}</td>
                    <td>{{$teacher->Email}}</td>
                    <td>{{$teacher->Name}}</td>
                    <td>{{$teacher->genders->Name}}</td>
                    <td>{{$teacher->joining_Date}}</td>
                    <td>{{$teacher->Address}}</td>
                    <td>{{$teacher->speciallztions->Name}}</td>
                    
                    <td>
                        <a class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" href="{{route('teacher.edit',$teacher->id)}}" >
                            <i class="fa fa-edit"></i>
                        </a>
                        
                        <a class="btn btn-danger btn-sm" href="{{route('teacher.destroy',$teacher->id)}}">
                            <i class="fa fa-trash"></i>
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
