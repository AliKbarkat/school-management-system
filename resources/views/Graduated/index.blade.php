@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('main_page.list_graduate')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('main_page.list_graduate')}} <i class="fas fa-user-graduate"></i>
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr class="alert-success">
                                            <th>#</th>
                                            <th>{{trans('students.Name')}}</th>
                                            <th>{{trans('students.email')}}</th>
                                            <th>{{trans('students.gender')}}</th>
                                            <th>{{trans('students.grades')}}</th>
                                            <th>{{trans('students.class')}}</th>
                                            <th>{{trans('students.section')}}</th>
                                            <th>{{trans('students.procsess')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($students as $student)
                                            <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->gender->name}}</td>
                                            <td>{{$student->grade->name}}</td>
                                            <td>{{$student->classroom->name}}</td>
                                            <td>{{$student->section->name}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#return_student{{ $student->id }}" title="{{ trans('Grades_trans.Delete') }}">{{trans('students.return_student')}}</button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_student{{ $student->id }}" title="{{ trans('Grades_trans.Delete') }}">{{trans('students.delete_student')}}</button>

                                                </td>
                                            </tr>
                                         @include('graduated.return')
                                        @include('graduated.delete') 
                                        @endforeach 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
