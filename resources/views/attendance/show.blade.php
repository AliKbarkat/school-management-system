@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
students
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{date('y-m-d')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('mainpage.students')}}</li>
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
                <a href="{{route('students.create')}}" class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button">add student</a>
                <div class="table-responsive">
                    <form action="{{route('attendance.store')}}" method="POST">
                        @csrf
                    <table id="datatable" class="table table-hover table-sm tablebordered p-0" data-page-lenth="50" >
                <thead>
                    <tr class="table-success">
                        <th>#</th>
                        <th>{{__('Students.Email')}}</th>
                        <th>{{__('students.Name')}}</th>
                        <th>{{__('students.Gender')}}</th>
                        <th>{{__('students.Date_Birth')}}</th>
                        <th>{{__('students.grade')}}</th>    
                        <th>{{__('students.classroom')}} </th>
                        <th>{{__('students.Section')}}</th>  
                        <th>{{__('students.attendance')}} </th>  
                    </tr>
                </thead>
                <tbody>
                     @foreach ($students as $student)
                    <tr>
                    <td> {{$student->id}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->gender->Name}}</td>
                    <td>{{$student->date_Birth}}</td>
                    <td>{{$student->grade->name_ar}}</td>
                    <td>{{$student->classroom->name_class_ar}}</td>
                    <td>{{$student->Section->name_ar}}</td>
                    <td>
                        @if(isset($student->attendance()->where('attendence_date',date('Y-m-d'))->first()->student_id))

                        <label class="block text-gray-500 font-semibold sm:border-r sm:pr-4">
                            <input name="attendences[{{ $student->id }}]" disabled
                                   {{ $student->attendance()->first()->attendence_status == 1 ? 'checked' : '' }}
                                   class="leading-tight" type="radio" value="presence">
                            <span class="text-success">{{ trans('all.Attendees') }}</span>
                        </label>

                        <label class="ml-4 block text-gray-500 font-semibold">
                            <input name="attendences[{{ $student->id }}]" disabled
                                   {{ $student->attendance()->first()->attendence_status == 0 ? 'checked' : '' }}
                                   class="leading-tight" type="radio" value="absent">
                            <span class="text-danger">{{trans('all.Absence')}}</span>
                        </label>

                    @else

                        <label class="block text-gray-500 font-semibold sm:border-r sm:pr-4">
                            <input name="attendences[{{ $student->id }}]" class="leading-tight" type="radio"
                                   value="presence">
                            <span class="text-success">{{ trans('all.Attendees') }}</span>
                        </label>

                        <label class="ml-4 block text-gray-500 font-semibold">
                            <input name="attendences[{{ $student->id }}]" class="leading-tight" type="radio"
                                   value="absent">
                            <span class="text-danger">{{trans('all.Absence')}}</span>
                        </label>

                    @endif
                    </td>
                   <input type="hidden" name="student_id[]" value="{{$student->id}}">
                   <input type="hidden" name="grade_id" value="{{$student->grade->id}}">
                   <input type="hidden" name="classroom_id" value="{{$student->classroom->id}}">
                   <input type="hidden"name="section_id" value="{{$student->Section->id}}">

                </tr>
                 @endforeach 
                </tbody>
                    </table>
                    <button class="btn btn-success btn-sm  btn-lg pull-right" type="submit">حفظ </button> 
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
