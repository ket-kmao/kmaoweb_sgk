@extends('admin::layouts.master');
@section('css')

@endsection


@section('title')
    {{'Create Users'}}
@endsection 
@section('menu')
    <strong>Settings</strong>
@endsection
@section('header')
    <strong>Create Users</strong>
@endsection


@section('content')
<div class="row justify-content-center gutters">
	<div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
		<form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
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
									required autofocus value="{{old('name')}}">
							</div>
							<div class="form-group">
								<label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control" id="email" name="email"
									required value="{{old('email')}}">
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-12">
							<div class="form-group">
								<label for="password" class="col-form-label">Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
								<div class="form-group">
									<label for="photo"class="col-form-label">Photo <span class="text-danger">*</span></label>
										<input type="file" class="form-control" id="photo" name="photo"
										onchange="preview (event)" accept="image/*">
										<div style="margin-top: 9px">
											<img src="" alt="" id="img" width="120">
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