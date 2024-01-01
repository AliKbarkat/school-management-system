@extends('layouts.master')
@section('css')

@section('title')
{{__('mainpage.School_management')}}/{{__('grades.edit')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('grades.edit')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('grades.edit')}}</li>
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
            <div class="card-body col-md-6 mb-30">
                <div class="container">
                    <form action="{{route('class.update',$class->id)}}" method="POST">
                        @csrf
                        <label >{{__('grades.name_grade_en')}}</label><br>
                        <input class="form-control form-control-lg" type="text" name="name_class_ar" placeholder="{{__('grades.name_class_ar')}}"
                         value="{{$class->name_class_ar}}" aria-label=".form-control-lg example">
                        @error('name_class_ar')
                            {{$message}}
                        @enderror
                        <br>
                        <label for="">{{__('grades.name_grade_ar')}}</label><br>
                        <input class="form-control form-control-md" type="text" name="name_class_en"
                        value="{{$class->name_class_en}}" placeholder="{{__('grades.name_class_ar')}}" aria-label=".form-control-lg example">
                        @error('name_ar')
                        {{$message}}
                    @enderror
                    <br>
                       
                        <label >{{__('grades.name_grade_ar')}}</label>
                        <br>
                  <select class="form-control form-control-lg"  name="grade_id" >
                  @foreach ($grade as $grad)
                  <option value="{{$grad->id}}">{{$grad->name_ar}}<br></option>
                  @endforeach
                      <br>
                    </select>
                        <br><br> <input type="submit" src="" class="btn btn-dark" value="{{__('grades.submit')}}">
                    </form>
            </div>
               
        </div>
    </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
