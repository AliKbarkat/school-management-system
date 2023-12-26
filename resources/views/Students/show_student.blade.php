@extends('layouts.master')
@section('css')

@section('title')
{{$student->name_ar}}
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
                <button type="button" class="btn btn-primary btn-sm" 
                data-toggle="modal" data-target="#flipFlop">add
            </button>
                ​<!-- The modal -->
                <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog"
                 aria-labelledby="modalLabel" aria-hidden="true">

                 <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" 
                    aria-label="Close"><span aria-hidden="true">
                        &times;</span></button><h4 class="modal-title" id="modalLabel">Modal Title</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="{{route('grad.store')}}" method="POST">
                                @csrf
                                <label for="">{{__('grades.name_grade_en')}}</label><br>
                                <input class="form-control form-control-lg" type="text" name="name_en" placeholder="{{__('grades.name_grade_en')}}" aria-label=".form-control-lg example">
                                @error('name_en')
                                <small class="form-text text-danger" >{{$message}}</small> 
                                @enderror
                                <br>
                                <label for="">{{__('grades.name_grade_ar')}}</label><br>
                                <input class="form-control form-control-md" type="text" name="name_ar" placeholder="{{__('grades.name_grade_ar')}}" aria-label=".form-control-lg example">
                                @error('name_ar')
                                <small class="form-text text-danger" >{{$message}}</small> 
                                @enderror
                                <br>
                                <label for="">{{__('grades.notes')}}</label><br>
                                <input class="form-control form-control-lg" type="text" name="procsess" placeholder="{{__('grades.notes')}}" aria-label=".form-control-lg example">
                                @error('procsess')
                                <small class="form-text text-danger" >{{$message}}</small> 
                                @enderror
                                <br>
                                <input type="submit" class="btn btn-dark" value="{{__('grades.submit')}}">
                            </form>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                  </div> --}}
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
