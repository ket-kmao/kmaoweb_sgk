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
    <strong>Events</strong>
@endsection


@section('content')
<!-- Row start -->
<div class="row gutters">
	<div class="col-sm-12">
        <div class="table-container">
            <div class="t-header">Basic Example
                <!-- Large modal -->
                <a href="#" type="button" class="btn btn-primary btn-sm btn-oval float-right" data-toggle="modal"
                data-target=".bd-example-modal-lg"> <i class="fa fa-plus-circle"></i> Create</a>   
            </div>
                
            <div class="table-responsive">
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
                        <tr>
                            <td>1</td>
                            <td>
                                
                            </td>
                            <td>name</td>
                            <td>email</td>
                            <td>
                                <a href="#" class="edit" style="font-size : 24px">
                                    <i class="icon-mode_edit" data-toggle="tooltip" title="Edit"></i>
                                </a>
                                <a href="#" class="delete" style="font-size : 24px">
                                    <i class="icon-delete" data-toggle="tooltip" title="Delete"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div>
<div class="row justify-content-center gutters">
	<div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
		<form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Modal Title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

