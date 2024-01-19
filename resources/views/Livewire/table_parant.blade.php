<div>
<button class="btn btn-success btn-sm nextBtn btn-lg pull-right" 
wire:click="show_form" type="button">{{ trans('my_parant.add_parant') }}</button>
<div class="table-responsive">
    <table id="datatable" class="table table-hover table-sm tablebordered p-0" data-page-lenth="50" >
        <thead>
            <tr class="table-success">
                <th>#</th>
                <th>{{__('my_parant.email')}}</th>
                <th>{{__('my_parant.father_name')}}</th>
                <th>{{__('my_parant.national_id')}}</th>
                <th>{{__('my_parant.father_job')}}</th>
                <th>{{__('my_parant.procsess')}}</th>        
            </tr>
        </thead>
        <tbody>

                @foreach ($my_parants as $my_parant)
            <tr>
                <td>{{$my_parant->id}}</td>
                <td>{{$my_parant->email}}</td>
                <td>{{$my_parant->name_father}}</td>
                <td>{{$my_parant->national_id_father}}</td>
                <td>{{$my_parant->job_father}}</td>
                <td>
                    <button class="btn btn-info btn-sm" wire:click="edit({{$my_parant->id}})" >
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class="btn btn-danger btn-sm" wire:click="delete({{$my_parant->id}})">
                        <i class="fa fa-trash"></i>
                    </button>
                 </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
  </div>
</div>