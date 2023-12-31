@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
{{trans('all.lastBook')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{trans('all.lastBook')}}

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
                                <a href="{{route('library.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true"> {{trans('all.AddBook')}} </a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('all.NameBook')}} </th>
                                            <th>{{trans('all.NameTeacher')}} </th>
                                            <th>{{trans('all.Educationallevel')}} </th>
                                            <th>{{trans('all.Classroom')}} </th>
                                            <th>{{trans('all.Section')}}</th>
                                            <th>{{trans('all.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($books as $book)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$book->title}}</td>
                                                <td>{{$book->teacher->name}}</td>
                                                <td>{{$book->grade->name}}</td>
                                                <td>{{$book->classroom->name_class}}</td>
                                                <td>{{$book->section->name_section}}</td>
                                                <td>
                                                    <a href="{{route('downloadAttachment',$book->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                                    <a href="{{route('library.edit',$book->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_book{{ $book->id }}" title="حذف"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                        @include('pages.library.destroy')
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
