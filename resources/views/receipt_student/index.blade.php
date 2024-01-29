@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
   {{ trans('students.receipt_students') }} 
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle') 
    {{ trans('students.receipt_students') }} 
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
   
                                            <th>{{ trans('students.Name') }} </th>
                                            <th>{{ trans('students.the_amount') }}</th>
                                            <th>{{ trans('students.statement') }}</th>
                                            <th>{{ trans('students.procsess') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($receipt_student as $receipt_student)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$receipt_student->student->name}}</td>
                                            <td>{{ number_format($receipt_student->Debit, 2) }}</td>
                                            <td>{{$receipt_student->description}}</td>
                                                <td>
                                                    <a href="{{route('receipt_student.edit',$receipt_student->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_receipt{{$receipt_student->id}}" ><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @include('receipt.Delete')
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
