@extends('layouts.master')
@section('css')

@section('title')
 {{ trans('students.edit_student') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ trans('students.edit_student') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active"> {{ trans('students.edit_student') }}</li>
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

                <form action="{{route('students.update',$student->id)}}" method="post">
                    @csrf
                    {{-- one row --}}
                    <div class="form-row">
                        <input type="hidden" name="id" value="{{$student->id}}">
                        <div class="col">
                            <label for="title">{{trans('students.name_ar')}}</label>
                            <input type="text" name="name_ar" value="{{$student->getTranslation('name','ar')}}" class="form-control" >
                            @error('name_ar')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('students.name_en')}}</label>
                            <input type="text" name="name_en" value="{{$student->getTranslation('name','en')}}" class="form-control" >
                            @error('name_en')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                    </div>
                    {{-- two row --}}
                    <div class="form-row">    
                        <div class="col">
                            <label for="title">{{trans('students.email')}}</label>
                            <input type="email" name="email" value="{{$student->email}}" class="form-control">
                            @error('email')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('students.password')}}</label>
                            <input type="password" name="password" value="{{$student->password}}" class="form-control" >
                            @error('password')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                      </div>
                 {{-- three row --}}

                      <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCity">{{trans('students.gender')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="gender_id" >
                                <option selected>{{$student->gender->name}}</option>
                                @foreach($genders as $gander)
                                    <option value="{{$gander->id}}">{{$gander->name}}</option>
                                @endforeach 
                            </select>
                            @error('gender_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label>{{trans('students.national')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="nationalite_id">
                                <option selected>{{trans('students.Choose')}}...</option>
                                 @foreach($nationals as $national)
                                    <option value="{{$national->id}}">{{$national->name}}</option>
                                @endforeach 
                            </select>
                            @error('nationalite_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('students.bload')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="bload_id">
                                <option select>{{$student->bload->name}}</option>
                                 @foreach($bloads as $type_blood)
                                    <option value="{{$type_blood->id}}">{{$type_blood->name}}</option>
                                @endforeach
                            </select>
                            @error('bload_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('students.joining_date')}}</label>
                            <br>
                                <input type="date" name="date_birth"  value="{{$student->date_birth}}" class=" my-1 mr-sm-2">
                            @error('date_birth')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                    </div>
                    {{-- four row --}}

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCity">{{trans('students.grades')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="grade_id">
                                <option selected>{{$student->grade->name}}</option>
                                 @foreach($grades as $grade)
                                    <option value="{{$grade->id}}">{{$grade->name}}</option>
                                @endforeach 
                            </select>
                            @error('grade_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('students.class')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="classroom_id">
                                <option selected>{{$student->classroom->name}}</option>
                                 @foreach($my_class as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                            @error('classroom_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('students.section')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="section_id">
                                <option selected>{{$student->section->name}}</option>
                                @foreach($sections as $section)
                                    <option value="{{$section->id}}">{{$section->name}}</option>
                                @endforeach 
                            </select>
                            @error('section_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label>{{trans('students.parant')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="parant_id">
                                @foreach($myParant as $parant)
                                    <option value="{{$parant->id}}">{{$parant->name_father}}</option>
                                @endforeach 
                            </select>
                            @error('parant_id')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label>{{trans('students.academic_year')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="academic_year">
                                <option selected>{{$student->academic_year}}</option>
                              
                                    <option value="2020">2020</option>
                             
                            </select>
                            @error('academic_year')
                            <small class="text text-danger">{{ $message }}</small>

                            @enderror
                        </div>
                    </div>
                </div>
                   
                
                    <button class="btn btn-dark btn-sm  btn-lg pull-right" type="submit">{{ trans('students.submit') }} </button> 
                

                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection

