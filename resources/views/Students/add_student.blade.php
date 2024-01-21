@extends('layouts.master')
@section('css')

@section('title')
{{ trans('main_page.school_management') }}/{{__('students.add_student')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('students.add_student')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('students.add_student')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
               
                <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- one row --}}
                    <div class="form-row">

                        <div class="col">
                            <label>{{trans('students.name_ar')}}</label>
                            <input type="text" name="name_ar" class="form-control" >
                            @error('name_ar')
                            <small class="text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col">
                            <label >{{trans('students.name_en')}}</label>
                            <input type="text" name="name_en" class="form-control" >
                            @error('name_en')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                    </div>

                    {{-- two row --}}
                    <div class="form-row"> 

                        <div class="col">
                            <label >{{trans('students.email')}}</label>
                            <input type="email" name="email"  class="form-control">
                            @error('email')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>

                        <div class="col">
                            <label >{{trans('students.password')}}</label>
                            <input type="password" name="password" class="form-control" >
                            @error('password')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                      </div>

                 {{-- three row --}}

                      <div class="form-row">

                        <div class="form-group col">
                            <label >{{trans('students.gender')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="gender_id">
                                <option selected>{{trans('students.choose')}}...</option>
                                @foreach($genders as $gender)
                                    <option value="{{$gender->id}}">{{$gender->name}}</option>
                                @endforeach 
                            </select>
                            @error('gender_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>

                        <div class="form-group col">
                            <label>{{trans('students.national')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="nationalite_id">
                                <option selected>{{trans('students.choose')}}...</option>
                                 @foreach($nationals as $national)
                                    <option value="{{$national->id}}">{{$national->name}}</option>
                                @endforeach 
                            </select>
                            @error('nationalite_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>

                        <div class="form-group col">
                            <label>{{trans('students.bload')}}</label>
                            <select class="custom-select my-1 mr-sm-2 " name="bload_id">
                                <option selected>{{trans('students.choose')}}...</option>
                                 @foreach($bloads as $type_blood)
                                    <option value="{{$type_blood->id}}">{{$type_blood->name}}</option>
                                @endforeach
                            </select>
                            @error('bload_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>

                        <div class="form-group col">
                            <label>{{trans('students.joining_date')}}</label>
                           
                            <input type="date" name="date_birth" class="form-control">
                            @error('date_birth')
                            <small class="text text-danger">{{ $message }}</small>
                           
                            @enderror
                        </div>
                    </div>
                    {{-- four row --}}

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="">{{trans('students.grades')}}</label>

                            <select class="custom-select my-1 mr-sm-2" name="grade_id">
                                <option selected>{{trans('students.choose')}}...</option>
                                 @foreach($grades as $grade)
                                    <option value="{{$grade->id}}">{{$grade->name}}</option>
                                @endforeach 
                            </select>
                            @error('grade_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="">{{trans('students.class')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="classroom_id" >
                         
                                <option selected>{{trans('students.choose')}}...</option>
                             
                            </select>
                            @error('classroom_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="">{{trans('students.section')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="section_id" >
                                <option selected>{{trans('students.choose')}}...</option>

                             
                            </select>
                            @error('section_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="">{{trans('students.parant')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="parant_id">
                                <option selected>{{trans('students.choose')}}...</option>
                                @foreach($parants as $parant)
                                    <option value="{{$parant->id}}">{{$parant->name_father}}</option>
                                @endforeach 
                            </select>
                            @error('parant_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                       
                        <div class="form-group col">
                            <label>{{trans('students.academic_year')}}</label>
                            <select class="custom-select mr-sm-2" name="academic_year">
                                <option selected disabled>{{trans('students.choose')}}...</option>
                                @php
                                    $current_year = date("Y");
                                @endphp
                                @for($year = $current_year; $year <= $current_year +1 ;$year++)
                                    <option value="{{ $year}}">{{ $year }}</option>
                                @endfor
                            </select>
                            @error('academic_year')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                            
                        </div>
                       
                    </div>
                    <br>
                    <div class="form-group col">
                        <label>{{trans('students.image_tybe')}}</label>
                       <input type="file" accept="image/*" name="photos[]" multiple>
                       <br>
                        @error('photos')
                        <small class="text text-danger">{{ $message }}</small>
                        @enderror  
                    </div>
                    
                    <button class="btn btn-success btn-sm  btn-lg pull-right" 
                    type="submit">{{trans('students.submit')}}
                   </button> 
                </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
