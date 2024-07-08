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
    <strong>Reset Password</strong>
@endsection


@section('content')
<div class="row justify-content-center gutters">
	<div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
		<form action="{{route('user.save')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card m-0">
				<div class="card-header">
					<div class="toolbox">
						<button class="btn btn-primary btn-sm btn-oval">
						<i class="fa fa-save"></i> Save
						</button>
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
								<label for="password" class="col-form-label">New Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
								<label for="cpassword" class="col-form-label">Confirmed Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control" id="cpassword" name="cpassword" required>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection	