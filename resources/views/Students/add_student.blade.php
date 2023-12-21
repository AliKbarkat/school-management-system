@extends('layouts.master')
@section('css')

@section('title')
    Add student
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Add student</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Add student</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <form action="{{route('students.store')}}" method="POST">
                    @csrf
                    {{-- one row --}}
                    <div class="form-row">
                        <div class="col">
                            <label for="title">{{trans('my_parant.name_student_ar')}}</label>
                            <input type="text" name="name_ar" class="form-control" >
                            @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('my_parant.name_student_en')}}</label>
                            <input type="text" name="name_en" class="form-control" >
                            @error('name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- two row --}}
                    <div class="form-row">    
                        <div class="col">
                            <label for="title">{{trans('Student.Email')}}</label>
                            <input type="email" name="email"  class="form-control">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('Student.Password')}}</label>
                            <input type="password" name="password" class="form-control" >
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                 {{-- three row --}}

                      <div class="form-row">
                        <div class="form-group col">
                            <label >{{trans('student.gender_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="gender_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                @foreach($Genders as $gander)
                                    <option value="{{$gander->id}}">{{$gander->Name}}</option>
                                @endforeach 
                            </select>
                            @error('gender_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="">{{trans('students.National_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="nationalite_id">
                                <option selected>{{trans('students.Choose')}}...</option>
                                 @foreach($Nationals as $National)
                                    <option value="{{$National->id}}">{{$National->Name}}</option>
                                @endforeach 
                            </select>
                            @error('nationalitie_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="">{{trans('students.bload_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="bload_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                 @foreach($bloods as $Type_Blood)
                                    <option value="{{$Type_Blood->id}}">{{$Type_Blood->Name}}</option>
                                @endforeach
                            </select>
                            @error('bload_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label>{{trans('student.birth')}}</label>
                            <br>
                                <input type="date" name="date_Birth"  class=" my-1 mr-sm-2">
                            @error('date_Birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- four row --}}

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="">{{trans('student.grades')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="grade_id">
                                <option selected>{{trans('student.Choose')}}...</option>
                                 @foreach($Grades as $grade)
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
                                 @foreach($grade->classes as $class)
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
                                @foreach($grade->Section as $section)
                                    <option value="{{$section->id}}">{{$section->name_ar}}</option>
                                @endforeach 
                            </select>
                            @error('section_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="">{{trans('my_parant.parant_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="parant_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                @foreach($parants as $parant)
                                    <option value="{{$parant->id}}">{{$parant->Name_Father}}</option>
                                @endforeach 
                            </select>
                            @error('parant_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="">{{trans('my_parant.academic_year')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="academic_year">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                    <option value="2020">2020</option>
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
