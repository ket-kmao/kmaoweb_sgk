@extends('admin::layouts.master');
@section('css')

@endsection


@section('title')
    {{'Edit Users'}}
@endsection 
@section('menu')
    <strong>Settings</strong>
@endsection
@section('header')
    <strong>Edit Users</strong>
@endsection


@section('content')
<div class="row justify-content-center gutters">
	<div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
		<form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
            @method('PATCH')
			<div class="card m-0">
				<div class="card-header">
					<div class="toolbox">
						<button class="btn btn-primary btn-sm btn-oval">
						<i class="fa fa-save"></i> Save
						</button>
						<a href="{{route('user.index')}}" class="btn btn-warning btn-sm btn-oval">
							<i class="fa fa-reply"></i> Back
						</a>
					</div>
						<ul class="text-muted custom">
							<li>* Custom form controls and selects are also supported.</li>
						</ul>
				</div>
				
					@component('admin::coms.alert')
					@endcomponent
				<div class="card-body">
					<div class="row gutters">
						<div class="col-md-6 col-sm-12 col-12">
							<div class="form-group">
								<label for="name" class="col-form-label">Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="name" name="name"
									required autofocus value="{{$user->name}}">
							</div>
							<div class="form-group">
								<label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control" id="email" name="email"
									required value="{{$user->email}}">
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-12">
							<div class="form-group">
								<label for="password" class="col-form-label">Password </label>
								<input type="password" class="form-control" id="password" name="password">
                                <p>
                                    <small>Keep it blank to use the Old password!</small>
                                </p>
                                
							</div>
								<div class="form-group">
									<label for="photo"class="col-form-label">Photo <span class="text-danger">*</span></label>
										<input type="file" class="form-control" id="photo" name="photo"
										onchange="preview (event)" accept="image/*">
										<div style="margin-top: 9px">
											<img src="{{asset($user->photo)}}" alt="" id="img" width="120">
										</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</form>
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