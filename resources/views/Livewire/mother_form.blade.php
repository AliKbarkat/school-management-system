@if($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-2">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>

                <div class="form-row">

                    <div class="col">
                        <label for="title">{{trans('my_parant.name_mother')}}</label>
                        <input type="text" wire:model="name_mother" class="form-control">
                        @error('name_mother')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('my_parant.name_mother_en')}}</label>
                        <input type="text" wire:model="name_mother_en" class="form-control">
                        @error('name_mother_en')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3">
                        <label for="title">{{trans('my_parant.job_mother')}}</label>
                        <input type="text" wire:model="job_mother" class="form-control">
                        @error('job_mother')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="title">{{trans('my_parant.job_mother_en')}}</label>
                        <input type="text" wire:model="job_mother_en" class="form-control">
                        @error('job_mother_en')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('my_parant.national_id')}}</label>
                        <input type="text" wire:model="national_id_mother" class="form-control">
                        @error('national_id_mother')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('my_parant.passport_id')}}</label>
                        <input type="text" wire:model="passport_id_mother" class="form-control">
                        @error('Passport_id_mother')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('my_parant.phone')}}</label>
                        <input type="text" wire:model="phone_mother" class="form-control">
                        @error('phone_mother')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">{{trans('my_parant.nationality')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="nationality_mother_id">
                            <option selected>{{trans('my_parant.choose')}}...</option>
                              @foreach($nationalities as $national)
                            <option value="{{$national->id}}">{{$national->name}}</option>
                            @endforeach
                        </select>
                        @error('nationality_mother_id')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>

                    <div class="form-group col">
                        <label for="inputState">{{trans('my_parant.bload_type')}}</label>
                          <select class="custom-select my-1 mr-sm-2" wire:model="bload_type_mother_id">
                            <option selected>{{trans('my_parant.choose')}}...</option>
                             @foreach($bloods as $type_bload)
                            <option value="{{$type_bload->id}}">{{$type_bload->name}}</option>
                            @endforeach
                          </select>
                        @error('bload_type_mother_id')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>

                    <div class="form-group col">
                        <label for="inputZip">{{trans('my_parant.religion')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="religion_mother_id">
                            <option selected>{{trans('my_parant.choose')}}...</option>
                            @foreach($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                        </select>
                        @error('religion_mother_id')
                        <small class="text text-danger">{{ $message }}</small>

                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">{{trans('my_parant.address')}}</label>
                    <textarea class="form-control" wire:model="address_mother" id="exampleFormControlTextarea1"
                              rows="4"></textarea>
                    @error('address_mother')
                    <small class="text text-danger">{{ $message }}</small>

                    @enderror
                </div>

                <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(1)">
                    {{trans('my_parant.back')}}
                </button>

                @if($updateMode) 
                     <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="secondStepSubmit_edit"
                            type="button">{{trans('my_parant.next')}}
                    </button> 
                 @else 
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button"
                            wire:click="secondStepSubmit">{{trans('my_parant.next')}}</button>
                 @endif 

            </div>
        </div>
    </div>