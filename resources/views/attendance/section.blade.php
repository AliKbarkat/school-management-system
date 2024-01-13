@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
  {{__('section.title')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{__('section.title')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active"> {{__('section.title')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card card-statistics h-100">
            <div class="card-body">
                @foreach ($Grades as $Grade)
                <div class="accordion gray plus-icon round">
                       <div class="acd-group">
                         <a href="#" class="acd-heading">{{$Grade->name_ar }}</a> 
                            <div class="acd-des">
                                <div class="row">
                                    <div class="col-xl-12 mb-30">
                                        
                                        <div class="card card-statistics h-100">
                                            <div class="card-body">
                                                <div class="d-block d-md-flex justify-content-between">
                                                    <div class="d-block">
                                                  </div>
                                                </div>
                                                <div class="table-responsive mt-15">
                                                    <table class="table center-aligned-table mb-0">
                                                        <thead>
                                                        <tr class="text-dark">
                                                            <th>#</th>
                                                            <th>{{__('section.name_section_ar') }}
                                                            </th>
                                                            <th>{{__('grades.name_class_ar') }}</th>
                                                            <th>{{__('section.status') }}</th> 
                                                            <th>{{__('grades.procsess')}}</th>                                       
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                         @foreach ($Grade->Section as $list_Section)
                                                            <tr>
                                                                <td>{{ $list_Section->id }}</td>
                                                                <td>{{ $list_Section->name}}</td>
                                                                <td>{{ $list_Section->classroom->name }}</td> 
                                                                <td>
                                                                @if ( $list_Section->status =='1')
                                                                <span class="badge badge-success">{{ $list_Section->status }}</span> 
                                                                @elseif( $list_Section->status == '2')
                                                                <span class="badge badge-danger">{{$list_Section->status }}</span> 
                                                                    
                                                                @endif
                                                                </td>
                                                                <td> 
                                                                    <a class="btn btn-warning btn-sm" href="{{route('Attendance.show',$list_Section->id)}}">
                                                                       قائمة الطلاب 
                                                                    </a>
                                                                  
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
                            </div>
                        </div>
                      
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
