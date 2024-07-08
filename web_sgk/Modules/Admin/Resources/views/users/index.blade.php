@extends('admin::layouts.master');
@section('css')

@endsection

@section('title')
    {{'Users'}}
@endsection 

@section('menu')
    <strong>Settings</strong>
@endsection
@section('header')
    <strong>Users</strong>
@endsection


@section('content')
<!-- Row start -->
<div class="row gutters">
	<div class="col-sm-12">
        <div class="table-container">
            <div class="t-header">Basic Example
                <a href="{{route('user.create')}}" class="btn btn-primary btn-sm btn-oval float-right">
                    <i class="fa fa-plus-circle"></i> Create
                </a>    
            </div>
                
            <div class="table-responsive">
            @component('admin::coms.alert')
            @endcomponent
                <table id="basicExample" class="table custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach ($users as $u)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                <img src="{{asset($u->photo)}}" alt="" width="50">
                            </td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>
                                <a href="{{route('user.edit', $u->id)}}" class="edit" style="font-size : 24px">
                                    <i class="icon-mode_edit" data-toggle="tooltip" title="Edit"></i>
                                </a>
                                <a href="{{route('user.delete', $u->id)}}" class="delete" style="font-size : 24px" onclick="return confirm('You want to delete?')">
                                    <i class="icon-delete" data-toggle="tooltip" title="Delete"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
            </div>
        </div> 
    </div>
</div>

@endsection
@section('js')
	<script>
		function preview(evt){
		let img = document.getElementById('img');
		img.src = URL.createObjectURL(evt.target.files[0]);
		}
	</script>
@endsection	

<!-- @section('js')

<script>
    $(document).ready(function(){
        $('#sidebar-menu li').removeClass('active open');
        $('#sidebar-menu li ul li').removeClass('active');


        $('#menu_config').addClass('active open');
        $('#collapse_config').addClass('collapse in');
        $("#menu_user").addClass('active');
    });
</script>

@endsection -->