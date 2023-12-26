@extends('layouts.master')
@section('css')

@section('title')
{{$student->name}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">بيانات الطالب</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Page Title</li>
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
                <a class="btn btn-success btn-md tab-nav-border" href="#name">
                </a>
                <a class="btn btn-success btn-md tab-nav-border" href="#tos">
                </a>
                <div id="name">
                    {{$student->name}}
                </div>
                <div id="tos">
                    {{$student->classroom->name_ar}}
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
