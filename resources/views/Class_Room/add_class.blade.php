@extends('layouts.master')
@section('css')

@section('title')
{{__('mainpage.School_management')}}/{{__('grades.Add_Class')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('grades.Add_Class')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('grades.Add_Class')}}</li>
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
                <div class="container ">
                 <form action="{{route('class.store')}}" method="POST">
                     @csrf
                     <label for="">{{__('grades.name_class_ar')}}</label><br>
                     <input class="form-control form-control-lg" type="text" name="name_class_ar" 
                     placeholder="{{__('grades.name_class_ar')}}" aria-label=".form-control-lg example">
                     @error('name_class_ar')
                        <small class="form-text text-danger" >{{$message}}</small> 
                     @enderror
                     <br>
                     <label for="">{{__('grades.name_class_en')}}</label><br>
                     <input class="form-control form-control-md" type="text" name="name_class_en" 
                     placeholder="{{__('grades.name_class_en')}}" aria-label=".form-control-lg example">
                     @error('name_class_en')
                     <small class="form-text text-danger" >{{$message}}</small> 
                     @enderror
                     <br>
                     <label >{{__('grades.name_grade_ar')}}</label>
                     <br>
                     <select class="form-control form-control-lg"  name="grade_id" >
                     @foreach ($grades as $grade)
                    <option value="{{$grade->id}}">{{$grade->name_ar}}</option>
                     @endforeach
                     @error('grade_id')
                     <small class="form-text text-danger" >{{$message}}</small> 
                     @enderror
                     <br>
                     </select>
                     <br><br><input type="submit" src="" class="btn btn-dark" value="{{__('grades.submit')}}">
                   </form>  
                </div>
                
            </div>
        </div>
    </div>
</div>
   
             
<!-- row closed -->
@endsection

