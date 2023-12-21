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
                <form action="{{route('grad.update', $grade->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <label>{{__('grades.name_grade_en')}}</label><br>
                    <input class="form-control form-control-lg" type="text" name="name_en"  value="{{$grade->name_en}}" placeholder="{{__('grades.name_grade_en')}}" aria-label=".form-control-lg example">
                    <label>{{__('grades.name_grade_ar')}}</label><br>
                    <input class="form-control form-control-md" type="text" name="name_ar" value="{{$grade->name_ar}}" placeholder="{{__('grades.name_grade_ar')}}" aria-label=".form-control-lg example">
                    <label>{{__('grades.notes')}}</label><br>
                    <input class="form-control form-control-lg" type="text" name="procsess"  value="{{$grade->procsess}}" placeholder="{{__('grades.notes')}}" aria-label=".form-control-lg example">
                   <br><br>
                    <input type="submit" src="" class="btn btn-dark" value="{{__('grades.submit')}}">
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
