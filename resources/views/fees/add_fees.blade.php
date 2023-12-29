@extends('layouts.master')
@section('css')

@section('title')
    اضافة رسوم
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  اضافة رسوم </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">اضافة رسوم</li>
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
               
                <div class="form-row">
                    <div class="form-group col">
                        <label for="">{{trans('student.grades')}}</label>
                        <select class="custom-select my-1 mr-sm-2" name="grade_id">
                            <option selected>{{trans('student.Choose')}}...</option>
                             @foreach($grades as $grade)
                                <option value="{{$grade->id}}">{{$grade->name_ar}}</option>
                            @endforeach 
                        </select>
                        @error('grade_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="">{{trans('students.class_room')}}</label>
                        <select class="custom-select my-1 mr-sm-2" name="classroom_id">
                            <option selected>{{trans('my_parant.Choose')}}...</option>
                             @foreach($class_room as $class)
                                <option value="{{$class->id}}">{{$class->name_class_ar}}</option>
                            @endforeach
                        </select>
                        @error('classroom_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="">{{trans('my_parant.section_id')}}</label>
                        <select class="custom-select my-1 mr-sm-2" name="section_id">
                            <option selected>{{trans('my_parant.Choose')}}...</option>
                            @foreach($sections as $section)
                                <option value="{{$section->id}}">{{$section->name_ar}}</option>
                            @endforeach 
                        </select>
                        @error('section_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
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
