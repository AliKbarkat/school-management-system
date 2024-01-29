@extends('layouts.master')
@section('css')

@section('title') 
{{ trans('fees.edit_fees') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ trans('fees.edit_fees') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{ trans('fees.edit_fees') }}</li>
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
                <form method="post" action="{{ route('fees.update',$fee->id) }}">
                    @csrf
                    
                            <div class="form-row">
                                <div class="form-group col">
                                    <label >{{__('fees.title_fees_ar')}}</label><br>
                                    <input class="form-control form-control-md" type="text" name="title_ar" value="{{$fee->getTranslation('title','ar')}}"
                                    placeholder="{{__('fees.title_fees_ar')}}" aria-label=".form-control-lg example">
                                    @error('title_fees_ar')
                                    <small class="form-text text-danger" >{{$message}}</small> 
                                    @enderror
                                
                                </div>

                                <div class="form-group col">
                                    <label >{{__('fees.title_fees_en')}}</label><br>
                                    <input class="form-control form-control-md" type="text" name="title_en"  value="{{$fee->getTranslation('title','en')}}"
                                    placeholder="{{__('fees.title_fees_en')}}" aria-label=".form-control-lg example">
                                    @error('title_fees_en')
                                    <small class="form-text text-danger" >{{$message}}</small> 
                                    @enderror
                                
                                </div>
                                <div class="form-group col">
                                    <label >{{__('fees.ammount')}}</label><br>
                                    <input class="form-control form-control-md" type="text" name="ammount" value="{{$fee->ammount}}"
                                    placeholder="{{__('fees.ammount')}}" aria-label=".form-control-lg example">
                                    @error('ammount')
                                    <small class="form-text text-danger" >{{$message}}</small> 
                                    @enderror
                                
                                </div>
                            </div>
                            
                            
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="">{{trans('fees.grades')}}</label>
                                        <select class="custom-select my-1 mr-sm-2" name="grade_id" >
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
                                        <select class="custom-select my-1 mr-sm-2" name="classroom_id">
                                            <option selected>{{trans('fees.choose')}}...</option>
                                          
                                        </select>
                                        @error('classroom_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group col">
                                        <label for="">{{trans('my_parant.section_id')}}</label>

                                        <select class="custom-select my-1 mr-sm-2" name="section_id">
                                            <option selected>{{trans('fees.choose')}}...</option>
                                               
                                        </select> 
                                        @error('section_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="academic_year">{{trans('Students_trans.academic_year')}} : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="year">
                                            <option selected disabled>{{trans('fees.choose')}}...</option>
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
                                    <label for="exampleFormControlTextarea1">{{trans('fees.description')}}</label>
                                    <input class="form-control" name="descreption" id="exampleFormControlTextarea1" value="{{$fee->descreption}}">
                                    @error('descreption')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
           
                        <div>

                            <input type="submit" class="btn btn-dark btn-sm btn-lg pull-right">
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
