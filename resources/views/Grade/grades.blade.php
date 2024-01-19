@extends('layouts.master')
@section('css')
@toaster_css
@section('title')
{{__('grades.title_page')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{__('grades.list_grade')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('grades.list_grade')}}</li>
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
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('grades.name_grade')}}</th>
                        <th scope="col">{{__('grades.notes')}}</th>
                        <th scope="col">{{__('grades.procsess')}}</th>
                    </tr>
                    </thead>

                    <tbody>

                      @foreach ($grades as $grade)
                      <tr>
                        <th scope="row">{{$grade->id}}</th>
                        <td>{{$grade->name}}</td>
                        <td>{{$grade->descreption}}</td>
                        <td>
                        <a class="btn btn-info btn-sm" href="{{route('grad.edit',$grade->id)}}"> <i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" href="{{route('grade_delete',$grade->id)}}"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>  
                      @endforeach
                    </tbody>
                  </table>
            </div>

            <button class="btn btn-dark" data-toggle="modal" data-target="#flipFlop">{{__('grades.add_grade')}}</button>

            {{-- statr model add grade --}}
            <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog"
            aria-labelledby="modalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="modalLabel">{{__('grades.add_grade')}}</h4>
                   <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               
               <div class="modal-body">
                   <div class="container">
                       <form action="{{route('grad.store')}}" method="POST">
                           
                        @csrf

                           <label>{{__('grades.name_grade_en')}}</label><br>
                           <input class="form-control form-control-lg" type="text" name="name_en" aria-label=".form-control-lg example">
                           @error('name_en')
                           <small class="form-text text-danger">{{$message}}</small> 
                           @enderror
                           <br>

                           <label>{{__('grades.name_grade_ar')}}</label><br>
                           <input class="form-control form-control-md" type="text" name="name_ar"  aria-label=".form-control-lg example">
                           @error('name_ar')
                           <small class="form-text text-danger" >{{$message}}</small> 
                           @enderror
                           <br>

                           <label>{{__('grades.notes')}}</label><br>
                           <input class="form-control form-control-lg" type="text" name="descreption" aria-label=".form-control-lg example">
                           @error('descreption')
                           <small class="form-text text-danger" >{{$message}}</small> 
                           @enderror
                           <br>

                           <input type="submit" class="btn btn-dark" value="{{__('grades.submit')}}">
                     
                       </form>
                </div>
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
