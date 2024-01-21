@extends('layouts.master')
@section('css')

@section('title')
    {{ trans('fees.add_fees') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ trans('fees.add_fees') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{ trans('fees.add_fees') }}</li>
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
                        <form method="post" action="{{ route('fees.store') }}">
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
                                <label for="">{{trans('fees.grades_fees')}}</label>
                                <select class="form-control form-control-lg" name="tybe">
                                    <option selected>{{trans('fees.choose')}}...</option>
                                
                                        <option value="1">رسوم باص</option>
                                        <option value="2">رسوم مدرسة</option>
                                </select>
                                @error('grade_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        

                            <div class="form-group col">
                                <label for="">{{trans('fees.grades')}}</label>
                                <select class="form-control form-control-lg" name="grade_id">
                                    <option selected>{{trans('fees.choose')}}...</option>
                                    @foreach($grades as $grade)
                                        <option value="{{$grade->id}}">{{$grade->name}}</option>
                                    @endforeach 
                                </select>
                                @error('grade_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col">
                                <label for="">{{trans('fees.class_room')}}</label>
                                <select class="form-control form-control-lg" name="classroom_id">
                                    <option selected>{{trans('fees.choose')}}...</option>
                                    
                                </select>
                                @error('classroom_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col">
                                <label for="">{{trans('fees.section')}}</label>

                                <select class="form-control form-control-lg" name="section_id">
                                    <option selected>{{trans('fees.choose')}}...</option>
                                    
                                </select>
                                @error('section_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-col">
                                <label for="academic_year">{{trans('students.academic_year')}} : <span class="text-danger">*</span></label>
                                <select class="form-control form-control-lg" name="year">
                                    <option selected disabled>{{trans('fees.choose')}}...</option>
                                    @php
                                        $current_year = date("Y");
                                    @endphp
                                    @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                        <option value="{{ $year}}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                


                        <div class="form-group ml-1">
                            <label for="exampleFormControlTextarea1">{{trans('fees.descreption')}}</label>
                            <input class="form-control form-control-lg" name="descreption" id="exampleFormControlTextarea1" >
                            @error('Address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                

                
                        <div>
                        <input type="submit" class="btn btn-dark btn-sm btn-lg pull-right">
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
