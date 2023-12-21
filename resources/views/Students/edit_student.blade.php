@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> page empty</h4>
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

                <form action="{{route('students.update',$Student->id)}}" method="POST">
                    @csrf
                    {{-- one row --}}
                    <div class="form-row">
                        <input type="hidden" value="{{$Student->id}}">
                        <div class="col">
                            <label for="title">{{trans('my_parant.name_student_ar')}}</label>
                            <input type="text" name="Name_ar" value="{{$Student->getTranslation('Name','ar')}}" class="form-control" >
                            @error('Name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('my_parant.name_student_en')}}</label>
                            <input type="text" name="Name_en" value="{{$Student->getTranslation('Name','en')}}" class="form-control" >
                            @error('Name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- two row --}}
                    <div class="form-row">    
                        <div class="col">
                            <label for="title">{{trans('Student.Email')}}</label>
                            <input type="email" name="Email" value="{{$Student->Email}}" class="form-control">
                            @error('Email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('Student.Password')}}</label>
                            <input type="password" name="Password" value="{{$Student->Password}}" class="form-control" >
                            @error('Password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                 {{-- three row --}}

                      <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCity">{{trans('student.gender_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="gender_id" >
                                <option selected>{{$Student->gender->Name}}</option>
                                @foreach($Genders as $gander)
                                    <option value="{{$gander->id}}">{{$gander->Name}}</option>
                                @endforeach 
                            </select>
                            @error('gender_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('students.National_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="nationalitie_id">
                                <option selected>{{$Student->nationalitie_id}}</option>
                                 @foreach($Nationals as $National)
                                    <option value="{{$National->id}}">{{$National->Name}}</option>
                                @endforeach 
                            </select>
                            @error('nationalitie_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('students.bload_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="bload_id">
                                <option select>{{$Student->bload_id}}</option>
                                 @foreach($bloods as $Type_Blood)
                                    <option value="{{$Type_Blood->id}}">{{$Type_Blood->Name}}</option>
                                @endforeach
                            </select>
                            @error('bload_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('student.birth')}}</label>
                            <br>
                                <input type="date" name="Date_Birth"  value="{{$Student->Date_Birth}}" class=" my-1 mr-sm-2">
                            @error('Date_Birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- four row --}}

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCity">{{trans('student.grades')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="grade_id">
                                <option selected>{{$Student->grade->name_ar}}</option>
                                 @foreach($Grades as $grade)
                                    <option value="{{$grade->id}}">{{$grade->name_ar}}</option>
                                @endforeach 
                            </select>
                            @error('grade_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('students.class_room')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="classroom_id">
                                <option selected>{{$Student->classroom->name_class_ar}}</option>
                                 @foreach($my_class as $class)
                                    <option value="{{$class->id}}">{{$class->name_class_ar}}</option>
                                @endforeach
                            </select>
                            @error('classroom_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('my_parant.section_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="section_id">
                                <option selected>{{$Student->section->name}}</option>
                                @foreach($sections as $section)
                                    <option value="{{$section->id}}">{{$section->name_ar}}</option>
                                @endforeach 
                            </select>
                            @error('section_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('my_parant.parant_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="parant_id">
                                <option selected>{{$Student->parant_id}}</option>
                                @foreach($parants as $parant)
                                    <option value="{{$parant->id}}">{{$parant->Name_Father}}</option>
                                @endforeach 
                            </select>
                            @error('parant_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('my_parant.academic_year')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="academic_year">
                                <option selected>{{$Student->academic_year}}</option>
                                {{-- @foreach($parants as $parant) --}}
                                    <option value="2020">2020</option>
                                {{-- @endforeach  --}}
                            </select>
                            @error('academic_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                  
                </div>
                   <div>
                    <button class="btn btn-success btn-sm  btn-lg pull-right" 
                    type="submit">{{trans('Parent_trans.Next')}}
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
