@extends('layouts.master')
@section('css')

@section('title')
{{__('main_page.school_management')}}/{{__('section.add_section')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('section.add_section')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('section.add_section')}}</li>
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
                <form action="{{route('section.store')}}" method="POST">
                    @csrf

                    <label for="">{{__('section.name_section_ar')}}</label><br>
                    <input class="form-control form-control-lg" type="text" name="name_ar" 
                    placeholder="{{__('section.name_section_ar')}}" aria-label=".form-control-lg example">
                    @error('name_ar')
                    <small class="form-text text-danger" >{{$message}}</small>
                    @enderror
                    <br>

                    <label for="">{{__('section.name_section_en')}}</label><br>
                    <input class="form-control form-control-md" type="text" name="name_en" 
                    placeholder="{{__('section.name_section_en')}}" aria-label=".form-control-lg example">
                    @error('name_en')
                    <small class="form-text text-danger" >{{$message}}</small>
                @enderror
                <br>

                    <label >{{__('grades.name_grade_ar')}}</label>
                    <br>
              <select class="form-control form-control-lg" id="grade_id" name="grade_id" 
               onchange="console.log($(this).val())">>
                <option>--Select type--</option>
               
              @foreach ($grades as $grade)
              <option value="{{$grade->id}}">{{$grade->name}}</option>
              @error('grade_id')
              <small class="form-text text-danger" >{{$message}}</small>
              @enderror
              @endforeach
             
                  <br>
                </select>
                <br>
                <label for="">{{__('grades.name_class_ar')}}</label>
                <select class="form-control form-control-lg" id="classroom_id"  name="classroom_id">
                
                    @error('classroom_id')
              <small class="form-text text-danger" >{{$message}}</small>
              @enderror
                        <br>

                      </select>
                      <label>{{__('section.status')}}</label>
                      <input type="checkbox" name="status" value="1" />
                     
                      @error('status')
              <small class="form-text text-danger" >{{$message}}</small>
              @enderror
                    <br><br> 
                    <input type="submit" class="btn btn-dark" value="{{__('section.submit')}}">
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