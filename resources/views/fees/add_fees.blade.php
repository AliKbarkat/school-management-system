@extends('layouts.master')
@section('css')

@section('title')
    اضافة رسوم
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  اضافة رسوم </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">اضافة رسوم</li>
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
                <form method="post" action="{{ route('Fees.store') }}">
                    @csrf

               <div class="form-row">
                 <div class="form-group col">
                    <label for="">{{__('fees.title_fees_ar')}}</label><br>
                    <input class="form-control form-control-md" type="text" name="title_ar" 
                    placeholder="{{__('fees.title_fees_ar')}}" aria-label=".form-control-lg example">
                    @error('title_fees_ar')
                    <small class="form-text text-danger" >{{$message}}</small> 
                    @enderror
                   
                </div>

                <div class="form-group col">
                    <label for="">{{__('fees.title_fees_en')}}</label><br>
                    <input class="form-control form-control-md" type="text" name="title_en" 
                    placeholder="{{__('fees.title_fees_en')}}" aria-label=".form-control-lg example">
                    @error('title_fees_en')
                    <small class="form-text text-danger" >{{$message}}</small> 
                    @enderror
                   
                </div>
                <div class="form-group col">
                    <label for="">{{__('fees.ammount')}}</label><br>
                    <input class="form-control form-control-md" type="text" name="ammount" 
                    placeholder="{{__('fees.ammount')}}" aria-label=".form-control-lg example">
                    @error('ammount')
                    <small class="form-text text-danger" >{{$message}}</small> 
                    @enderror
                   
                </div>
               </div>
               
               
                <div class="form-row">
                    <div class="form-group col">
                        <label for="">{{trans('fees.grades')}}</label>
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
                        <label for="">{{trans('fees.class_room')}}</label>
                        <select class="custom-select my-1 mr-sm-2" name="classroom_id">
                            <option selected>{{trans('my_parant.Choose')}}...</option>
                             @foreach($class as $class)
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
                                @foreach($section as $section)
                             <option value="{{$section->id}}">{{$section->name_ar}}</option>
                                @endforeach 
                         </select>
                           @error('section_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="academic_year">{{trans('Students_trans.academic_year')}} : <span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" name="year">
                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                            @php
                                $current_year = date("Y");
                            @endphp
                            @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                <option value="{{ $year}}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">{{trans('Teacher.Address')}}</label>
                     <input class="form-control" name="descreption" id="exampleFormControlTextarea1">
                      @error('Address')
                       <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                 </div>
               </div>
           
              <div>
                <input type="submit" class="btn btn-success btn-sm btn-lg pull-right">
              </div>
                </div>
              
                </div>
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
