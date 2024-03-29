@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('students.student_details')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('students.student_details')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">
                        <div class="tab nav-border">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02"
                                       role="tab" aria-controls="home-02"
                                       aria-selected="true">{{trans('students.student_details')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02"
                                       role="tab" aria-controls="profile-02"
                                       aria-selected="false">{{trans('students.image_tybe')}}</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="home-02" role="tabpanel"
                                     aria-labelledby="home-02-tab">
                                    <table class="table table-striped table-hover" style="text-align:center">
                                        <tbody>
                                        <tr>
                                            <th scope="row">{{trans('students.Name')}}</th>
                                            <td>{{ $student->name }}</td>
                                            <th scope="row">{{trans('students.email')}}</th>
                                            <td>{{$student->email}}</td>
                                            <th scope="row">{{trans('students.gender')}}</th>
                                            <td>{{$student->gender->name}}</td>
                                            <th scope="row">{{trans('students.national')}}</th>
                                            <td>{{$student->nationalite->name}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">{{trans('students.grades')}}</th>
                                            <td>{{ $student->grade->name }}</td>
                                            <th scope="row">{{trans('students.class')}}</th>
                                            <td>{{$student->classroom->name}}</td>
                                            <th scope="row">{{trans('students.section')}}</th>
                                            <td>{{$student->section->name}}</td>
                                            <th scope="row">{{trans('students.joining_date')}}</th>
                                            <td>{{ $student->date_birth}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">{{trans('students.parant')}}</th>
                                            <td>{{ $student->myParent->name_father}}</td>
                                            <th scope="row">{{trans('students.academic_year')}}</th>
                                            <td>{{ $student->academic_year }}</td>
                                            <th scope="row"></th>
                                            <td></td>
                                            <th scope="row"></th>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="profile-02" role="tabpanel"
                                     aria-labelledby="profile-02-tab">
                                    <div class="card card-statistics">
                                        <div class="card-body">
                                          <form method="post" action="{{route('students.uploadFile')}}" enctype="multipart/form-data"> 
                                         @csrf
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label
                                                            for="academic_year">{{trans('students.image_tybe')}}
                                                            : <span class="text-danger">*</span></label>

                                                        <input type="file" accept="image/*" name="photos[]" multiple required>
                                                        <input type="hidden" name="name" value="{{$student->name}}">
                                                        <input type="hidden" name="imageable_id" value="{{$student->id}}">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <button type="submit" class="button button-border x-small">
                                                       {{trans('students.submit')}}
                                                </button>
                                            </form>
                                        </div>
                                        <br>
                                        <table class="table center-aligned-table mb-0 table table-hover"
                                               style="text-align:center">
                                            <thead>
                                            <tr class="table-secondary">
                                                <th scope="col">#</th>
                                                <th scope="col">{{trans('students.file_name')}}</th>
                                                <th scope="col">{{trans('students.created_at')}}</th>
                                                <th scope="col">{{trans('students.procsess')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($student->images as $attachment)
                                                <tr style='text-align:center;vertical-align:middle'>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$attachment->filename}}</td>
                                                    <td>{{$attachment->created_at->diffForHumans()}}</td>
                                                    <td colspan="2">
                                                        <a class="btn btn-outline-info btn-sm"
                                                           href="{{url('Download_attachment')}}/{{ $attachment->imageable->name }}/{{$attachment->filename}}"
                                                           role="button"><i class="fas fa-download"></i>&nbsp; {{trans('Students_trans.Download')}}</a>
                                                        <a class="btn btn-outline-success btn-sm"
                                                           href="{{ url('Show_attachment') }}/{{ $attachment->imageable->name }}/{{$attachment->filename}}"
                                                           role="button"><i class="fas fa-eye"></i>&nbsp;
                                                            عرض</a>
                                                        <button type="button" class="btn btn-outline-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#Delete_img{{ $attachment->id }}"
                                                                title="{{ trans('Grades_trans.Delete') }}">{{trans('Students_trans.delete')}}
                                                        </button>

                                                    </td>
                                                </tr>
                                                @include('pages.Students.Delete_img')
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- row closed -->
@endsection
