@extends('layouts.master')
@section('css')

@section('title')
{{__('main_page.school_management')}}/{{__('grades.add_class')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('grades.add_class')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('grades.add_class')}}</li>
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
            <div class="card-body col-md-12 mb-30">
                <div class="container ">
                 <form action="{{route('class.store')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col md-6">
                            <label for="">{{__('grades.name_class_ar')}}</label><br>
                            <input class="form-control form-control-lg" type="text" name="name_ar" aria-label=".form-control-lg example">
                           
                                @error('name_ar')
                                 <small class="form-text text-danger" >{{$message}}</small> 
                                @enderror
                            <br>
                        </div>

                    <div class="col md-6">
                          <label for="">{{__('grades.name_class_en')}}</label><br>
                          <input class="form-control form-control-md" type="text" name="name_en"  aria-label=".form-control-lg example">
                       
                            @error('name_en')
                            <small class="form-text text-danger" >{{$message}}</small> 
                            @enderror
                        <br>
                    </div>
                    </div>

                     <div class="form-col">
                        <label>{{trans('grades.name_grade_ar')}}</label>
                        <select class="form-control form-control-lg" name="grade_id">
                            <option selected>{{trans('students.choose')}}...</option>
                             @foreach($grades as $grade)
                                <option value="{{$grade->id}}">{{$grade->name}}</option>
                            @endforeach 
                        </select>
                        @error('grade_id')
                        <small class="text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
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

