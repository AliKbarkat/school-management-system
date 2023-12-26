@extends('layouts.master')
@section('css')

@section('title')
{{__('student.add_student')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('student.add_student')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('student.add_student')}}</li>
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
                            <label>{{trans('student.name_student_ar')}}</label>
                            <input type="text" name="name_ar" class="form-control" >
                            @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label >{{trans('student.name_student_en')}}</label>
                            <input type="text" name="name_en" class="form-control" >
                            @error('name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- two row --}}
                    <div class="form-row">    
                        <div class="col">
                            <label >{{trans('student.Email')}}</label>
                            <input type="email" name="email"  class="form-control">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label >{{trans('student.Password')}}</label>
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
                                @foreach($genders as $gander)
                                    <option value="{{$gander->id}}">{{$gander->Name}}</option>
                                @endforeach 
                            </select>
                            @error('gender_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label>{{trans('student.national_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="nationalite_id">
                                <option selected>{{trans('students.Choose')}}...</option>
                                 @foreach($nationals as $national)
                                    <option value="{{$national->id}}">{{$national->Name}}</option>
                                @endforeach 
                            </select>
                            @error('nationalitie_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label>{{trans('student.bload_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="bload_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                 @foreach($bloods as $type_blood)
                                    <option value="{{$type_blood->id}}">{{$type_blood->Name}}</option>
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
                            <label>{{trans('my_parant.academic_year')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="academic_year">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                    <option value="2020">2020</option>
                            </select>
                            @error('academic_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                        </div>
                        <div class="form-group col">
                            <label>{{trans('my_parant.image_tybe')}}</label>
                           <input type="file" accept="image/*" name="photos[]" multiple>
                            @error('image_tybe')
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
