@extends('layouts.master')
@section('css')

@section('title')
    edit taecher
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> ncvlxcnvxcnvxcv</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active"> edit taecher</li>
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
                        <form action="{{route('teacher.update',$Teacher->id)}}" method="POST">
                            @csrf
                          <div class="form-row">
                            <input type="hidden" value="{{$Teacher->id}}">
                            <div class="col">
                                <label for="title">{{trans('Teacher.Email')}}</label>
                                
                                <input type="email" name="Email"  value="{{$Teacher->Email}}" class="form-control">
                                @error('Email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title">{{trans('Teacher.Password')}}</label>
                                <input type="password" name="Password" value="{{$Teacher->Password}}" class="form-control" >
                                @error('Password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col">
                                <label for="title">{{trans('Teacher.Name')}}</label>
                                <input type="text" name="Name_ar" value="{{$Teacher->Name_ar}}" class="form-control" >
                                @error('Name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title">{{trans('Teacher.Name_en')}}</label>
                                <input type="text" name="Name_en" value="{{$Teacher->Name_en}}" class="form-control" >
                                @error('Name_en')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                         </div> 
                         <div class="form-row">
                            <div class="col-md-3">
                                <label for="title">{{trans('Teacher.joining_Date')}}</label>
                                <input type="date" name="joining_Date" value="{{$Teacher->joining_Date}}" class="form-control">
                                @error('joining_Date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

        
        
                          <div class="form-row">
                            <div class="form-group col">
                                <label for="inputState">{{trans('Teacher.Gender')}}</label>
                                <select class="custom-select my-1 mr-sm-2" value="{{$Teacher->Gender_id}}" name="Gender_id">
                                    <option selected>{{trans('Teacher.Choose')}}...</option>
                                    @foreach($gender as $g)
                                        <option value="{{$g->id}}">{{$g->Name}}</option>
                                    @endforeach
                                </select>
                                @error('Gender_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="inputZip">{{trans('Teacher.specialization')}}</label>
                                <select class="custom-select my-1 mr-sm-2" value="{{$Teacher->Specialization_id}}"
                                     name="specialization_id">
                                    <option selected>{{trans('my_parant.Choose')}}...</option>
                                    @foreach($specialization as $s)
                                        <option value="{{$s->id}}">{{$s->Name}}</option>
                                    @endforeach
                                </select>
                                @error('specialization_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                         </div>  
                         <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{trans('Teacher.Address')}}</label>
                            <input class="form-control" name="Address" value="{{$Teacher->Address}}" id="exampleFormControlTextarea1">
                            @error('Address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
