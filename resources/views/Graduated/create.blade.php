@extends('layouts.master')
@section('css')

@section('title')
  {{ trans('main_page.school_management') }}/{{ trans('students.add_graduated') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ trans('students.add_graduated') }} </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{ trans('students.add_graduated') }}</li>
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
                <form method="post" action="{{ route('graduated.store') }}">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputState">{{trans('Students_trans.Grade')}}</label>
                            <select class="custom-select mr-sm-2" name="grade_id" >
                                <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                @foreach($grades as $grade)
                                    <option value="{{$grade->id}}">{{$grade->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="Classroom_id">{{trans('Students_trans.classrooms')}}: <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select mr-sm-2" name="classroom_id" >

                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="section_id">:{{trans('Students_trans.section')}} </label>
                            <select class="custom-select mr-sm-2" name="section_id" >
                                @foreach($sections as $sections)
                                <option value="{{$grade->id}}">{{$grade->name}}</option>
                            @endforeach
                            </select>
                        </div>

                        
                    </div>
                    <button type="submit" class="btn btn-dark">{{ trans('students.submit') }}</button>
                </form>

               
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
{{-- <script>
    $(document).ready(function () {
        $('select[name="grade_id"]').on('change', function () {
            var grade_id = $(this).val();
            if (grade_id) {
                $.ajax({
                    url: "{{ URL::to('classes') }}/" + grade_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="classroom_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="classroom_id"]').append('<option value="' +value  + '">' +  key + '</option>');
                        });
                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script> --}}

 

@endsection
