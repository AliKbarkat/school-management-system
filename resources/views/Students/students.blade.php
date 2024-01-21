@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
{{__('main_page.students')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('main_page.students')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('main_page.students')}}</li>
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
                <a href="{{route('students.create')}}" class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button">{{ trans('students.add_student') }}</a>
                <div class="table-responsive">
                    <table id="datatable" class="table table-hover table-sm tablebordered p-0" data-page-lenth="50" >
                <thead>
                    <tr class="table-success">
                        <th>#</th>
                        <th>{{__('students.email')}}</th>
                        <th>{{__('students.Name')}}</th>
                        <th>{{__('students.gender')}}</th>
                        <th>{{__('students.joining_date')}}</th>
                        <th>{{__('students.grades')}}</th>    
                        <th>{{__('students.class')}} </th>
                        <th>{{__('students.section')}}</th>  
                        <th>{{__('students.procsess')}} </th>  
                    </tr>
                </thead>
                <tbody>
                     @foreach ($students as $student)
                    <tr>
                    <td> {{$student->id}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->gender->name}}</td>
                    <td>{{$student->date_birth}}</td>
                    <td>{{$student->grade->name}}</td>
                    <td>{{$student->classroom->name}}</td>
                    <td>{{$student->Section->name}}</td>
                    
                    <td>
                        <div class="dropdown show">
                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{trans('students.procsess')}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{route('students.show',$student->id)}}"><i style="color: #ffc107" class="fa fa-eye "></i>
                                    &nbsp;{{trans('students.showdatestdents')}}</a>
                                <a class="dropdown-item" href="{{route('students.edit',$student->id)}}"><i style="color:green" class="fa fa-edit"></i>
                                &nbsp;{{trans('students.edit_student')}}  </a>
                                <a class="dropdown-item" href="{{route('fee_invoice.index',$student->id)}}"><i style="color: #0000cc" class="fa fa-edit"></i>
                                &nbsp;{{trans('students.AddInvoices_fees')}}</a>
                                <a class="dropdown-item" href="{{route('receipt_student.show',$student->id)}}"><i style="color: #9dc8e2" class="fa fa-edit"></i>
                                    &nbsp; {{trans('students.receipt_students')}}</a>
                                <a class="dropdown-item" href="{{route('processingfee.show',$student->id)}}"><i style="color: #9dc8e2" class="fa fa-edit"></i> 
                                    &nbsp; {{trans('students.ProcessingFee')}}</a>
                                <a class="dropdown-item" href="{{route('payment.show',$student->id)}}"><i style="color:goldenrod" class="fa fa-calculator"></i>
                               &nbsp;{{trans('students.payment_students')}}</a>
                                <a class="dropdown-item" data-target="#Delete_Student{{ $student->id }}" data-toggle="modal" href="##Delete_Student{{ $student->id }}">
                                    <i style="color: red" class="fa fa-trash"></i>  &nbsp;{{trans('students.delete')}} </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Soft_delete{{$student->id}}"><i style="color:green" class="fa fa-edit">
                                </i>&nbsp; {{trans('students.add_graduated')}}  </a>
                            </div>
                        </td>
                     </tr>
                 @endforeach 
                </tbody>
             </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
