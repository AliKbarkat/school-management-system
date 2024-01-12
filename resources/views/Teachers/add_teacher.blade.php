@extends('layouts.master')
@section('css')

@section('title')
  {{ trans('mainpage.School_management') }}/{{trans('teachers.add_teacher')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('teachers.add_teacher')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{trans('teachers.add_teacher')}}</li>
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
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <br>
                        <form action="{{route('teacher.store')}}" method="POST">
                            @csrf
                          <div class="form-row">
                           
                            <div class="col">
                                <label for="title">{{trans('teachers.email')}}</label>
                                <input type="email" name="email"  class="form-control">
                                @error('Email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title">{{trans('teachers.password')}}</label>
                                <input type="password" name="password" class="form-control" >
                                @error('Password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col">
                                <label for="title">{{trans('teachers.name_ar')}}</label>
                                <input type="text" name="name_ar" class="form-control" >
                                @error('Name_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title">{{trans('teachers.name_en')}}</label>
                                <input type="text" name="name_en" class="form-control" >
                                @error('Name_en')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                         </div> 
                         <div class="form-row">
                            <div class="col">
                                <label for="title">{{trans('teachers.joining_date')}}</label>
                                <input type="date" name="joining_date" class="form-control">
                                @error('joining_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="inputState">{{trans('teachers.gender')}}</label>
                                <select class="custom-select my-1 mr-sm-2" name="gender_id">
                                    <option selected>{{trans('teachers.choose')}}...</option>
                                    @foreach($gender as $g)
                                        <option value="{{$g->id}}">{{$g->Name}}</option>
                                    @endforeach
                                </select>
                                @error('gender_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
        
                            <div class="form-group col">
                                <label for="inputZip">{{trans('teachers.specializations')}}</label>
                                <select class="custom-select my-1 mr-sm-2" name="specialization_id">
                                    <option selected>{{trans('teachers.choose')}}...</option>
                                    @foreach($specialization as $s)
                                        <option value="{{$s->id}}">{{$s->Name}}</option>
                                    @endforeach
                                </select>
                                @error('specialization_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                    
                         </div>
                            <br> 
                         <div class="form-row">
                            <label for="exampleFormControlTextarea1">{{trans('teachers.address')}}</label>
                         <textarea class="form-control"name="address"  id="exampleFormControlTextarea1" rows="4"></textarea>
                        
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                         </div>
                        </div> 
                       
                         <br>
                         <input type="submit" class="btn btn-success btn-sm btn-lg pull-right">
                        </form>
        
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
