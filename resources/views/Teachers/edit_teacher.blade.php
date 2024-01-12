@extends('layouts.master')
@section('css')

@section('title')
   {{ trans('mainpage.School_management') }}/{{ trans('teachers.edit_taecher') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{ trans('teachers.edit_taecher') }}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <br>
                        <form action="{{route('teacher.update',$Teacher->id)}}" method="POST">
                            @csrf
                         <div class="form-row">
                            <div class="col-md-6">
                                <input type="hidden" name="id" value="{{$Teacher->id}}">
                                <label for="title">{{trans('teachers.email')}}</label>
                                
                                <input type="email" name="email"  value="{{$Teacher->Email}}" class="form-control">
                                @error('Email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="title">{{trans('teachers.password')}}</label>
                                <input type="password" name="password" value="{{$Teacher->Password}}" class="form-control" >
                                @error('Password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title">{{trans('teachers.name_ar')}}</label>
                                <input type="text" name="name_ar" value="{{$Teacher->getTranslation('Name','ar')}}" class="form-control" >
                                @error('Name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title">{{trans('teachers.name_en')}}</label>
                                <input type="text" name="name_en" value="{{$Teacher->getTranslation('Name','en')}}" class="form-control" >
                                @error('Name_en')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                         </div>
                         <div class="form-row">
                            <div class="col-md-3">
                                <label for="title">{{trans('teachers.joining_date')}}</label>
                                <input type="date" name="joining_date" value="{{$Teacher->joining_Date}}" class="form-control">
                                @error('joining_Date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="inputState">{{trans('teachers.gender')}}</label>
                                <select class="custom-select my-1 mr-sm-2" value="{{$Teacher->Gender_id}}" name="Gender_id">
                                    <option selected>{{trans('teachers.choose')}}...</option>
                                    @foreach($gender as $gendr)
                                        <option value="{{$gendr->id}}">{{$gendr->Name}}</option>
                                    @endforeach
                                </select>
                                @error('Gender_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="inputZip">{{trans('teachers.specializations')}}</label>
                                <select class="custom-select my-1 mr-sm-2" value="{{$Teacher->Specialization_id}}"
                                     name="specialization_id">
                                    <option selected>{{trans('teachers.choose')}}...</option>
                                    @foreach($specialization as $specialization)
                                        <option value="{{$specialization->id}}">{{$specialization->Name}}</option>
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
