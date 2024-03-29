<div>
   @if (!empty($sucsessMassege))
   <div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{$sucsessMassege}}
</div>
       
   @endif

@if ($show_table)
@include('livewire.table_parant')
    
@else
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button"
            class="btn btn-circle{{$currentStep != 1 ? 'btn-defult' : 'btn btn-success'}}">1</a>
            <p>{{ trans('my_parant.information_father') }}</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button"
            class="btn btn-circle{{$currentStep != 2 ? 'btn-defult' : 'btn btn-success'}}">2</a>
            <p>{{ trans('my_parant.information_mother') }}</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button"
            class="btn btn-circle{{$currentStep != 3 ? 'btn-defult' : 'btn btn-success'}}">3</a>
            <p>{{ trans('my_parant.saved_data') }}</p>
        </div>
    </div>
</div>

    @include('livewire.father_form')

    @include('livewire.mother_form')


  

    @if ($currentStep != 3)
    <div style="display:none" class="row setup-content" id="step-3">
    @endif

<div class="col-xs-12">
    <div class="col-md-12">
    <label style="color: red">{{ trans('my_parant.chose_file_upload') }}</label>
    <div class="form-group">
        <input type="file" wire:model='photos' accept="image/*" multiple>
        <input type="hidden" wire:model='parent_id' >
   </div>

        <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(2)">{{__('my_parant.back')}} </button>
        @if($updateMode) 
        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="submitform_edit" type="button">{{trans('my_parant.submit')}}</button> 
            @else 
        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="submitform" type="button">{{trans('my_parant.submit')}} </button>
              @endif
            </div>
         </div>
     </div>
  </div>
 @endif
</div>