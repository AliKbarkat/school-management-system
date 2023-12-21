<div>
<button class="btn btn-success btn-sm nextBtn btn-lg pull-right" 
wire:click="show_form" type="button">add parant</button>
<div class="table-responsive">
    <table id="datatable" class="table table-hover table-sm tablebordered p-0" data-page-lenth="50" >
<thead>
    <tr class="table-success">
        <th>#</th>
        <th>{{__('my_parant.Email')}}</th>
        <th>{{__('my_parant.Name_Father')}}</th>
        <th>{{__('my_parant.National_ID_Father')}}</th>
        <th>{{__('my_parant.Job_Father')}}</th>
        <th>{{__('grades.procsess')}}</th>        
    </tr>
</thead>
<tbody>
    @foreach ($my_parants as $myparant)
    <tr>
    <td> {{$myparant->id}}</td>
    <td>{{$myparant->Email}}</td>
    <td>{{$myparant->Name_Father}}</td>
    <td>{{$myparant->National_ID_Father}}</td>
    <td>{{$myparant->Job_Father}}</td>
    <td>
        <button class="btn btn-info btn-sm" wire:click="edit({{$myparant->id}})" >
            <i class="fa fa-edit"></i>
        </button>
        <button class="btn btn-danger btn-sm" wire:click="delete({{$myparant->id}})">
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