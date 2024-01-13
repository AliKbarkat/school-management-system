@if($currentStep != 1)
    <div style="display: none" class="row setup-content" id="step-1">
        @endif
         <div class="col-xs-12">
            <div class="col-md-12">
                <br>
                <div class="form-row">

                    <div class="col">
                        <label for="title">{{trans('my_parant.email')}}</label>
                        <input type="email" wire:model="email"  class="form-control">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('my_parant.password')}}</label>
                        <input type="password" wire:model="password" class="form-control" >
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">

                    <div class="col">
                        <label for="title">{{trans('my_parant.name_father')}}</label>
                        <input type="text" wire:model="name_father" class="form-control" >
                        @error('name_father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('my_parant.name_father_en')}}</label>
                        <input type="text" wire:model="name_father_en" class="form-control" >
                        @error('name_father_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">

                    <div class="col-md-3">
                        <label for="title">{{trans('my_parant.job_father')}}</label>
                        <input type="text" wire:model="job_father" class="form-control">
                        @error('job_father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="title">{{trans('my_parant.job_father_en')}}</label>
                        <input type="text" wire:model="Job_Father_en" class="form-control">
                        @error('job_father_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">

                        <label for="title">{{trans('my_parant.national_id')}}</label>
                        <input type="text" wire:model="national_id_father" class="form-control">
                        @error('national_id_father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('my_parant.passport_id')}}</label>
                        <input type="text" wire:model="passport_id_father" class="form-control">
                        @error('passport_id_father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('my_parant.phone')}}</label>
                        <input type="text" wire:model="phone_father" class="form-control">
                        @error('phone_father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">{{trans('my_parant.nationality')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="nationality_father_id">
                            <option selected>{{trans('my_parant.choose')}}...</option>
                            @foreach($nationalities as $national)
                                <option value="{{$national->id}}">{{$national->name}}</option>
                            @endforeach
                        </select>
                        @error('nationality_father_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col">
                        <label for="inputState">{{trans('my_parant.bload_type')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="bload_type_father_id">
                            <option selected>{{trans('my_parant.choose')}}...</option>
                            @foreach($bloads as $type_blood)
                                <option value="{{$type_bload->id}}">{{$type_bload->name}}</option>
                            @endforeach
                        </select>
                        @error('blood_type_father_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col">
                        <label for="inputZip">{{trans('my_parant.religion')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="religion_father_id">
                            <option selected>{{trans('my_parant.choose')}}...</option>
                            @foreach($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                        </select>
                        
                        @error('religion_father_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">{{trans('my_parant.address')}}</label>
                    <textarea class="form-control" wire:model="address_father" id="exampleFormControlTextarea1" rows="4"></textarea>
                    @error('address_father')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 

                @if($updateMode) 
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit_edit"
                            type="button">{{trans('Parent_trans.next')}}
                    </button> 
                @else 
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                            type="button">{{trans('my_parant.next')}}
                    </button>
               @endif

             </div>
        </div>
    </div>