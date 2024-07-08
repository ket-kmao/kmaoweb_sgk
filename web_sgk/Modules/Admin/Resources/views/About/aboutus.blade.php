@extends('admin::layouts.master');
@section('css')

@endsection



@section('menu')
    <strong>Home</strong>
@endsection
@section('header')
    <strong>About Us</strong>
@endsection


@section('content')
 
				<!-- Main container start -->
				<div class="main-container">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-sm-12">
							<div class="documents-section">
								<!-- Row start -->
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item">
										<a class="nav-link active" id="logo-tab" data-toggle="tab" href="#logo" role="tab" aria-controls="logo" aria-selected="true">Logo</a>
										</li>
										<li class="nav-item">
										<a class="nav-link" id="favicon-tab" data-toggle="tab" href="#favicon" role="tab" aria-controls="favicon" aria-selected="false">Favicon</a>
										</li>
										<li class="nav-item">
										<a class="nav-link" id="generelcontent-tab" data-toggle="tab" href="#generelcontent" role="tab" aria-controls="generelcontent" aria-selected="false">General Content</a>
										</li>
										<li class="nav-item">
										<a class="nav-link" id="emailsetting-tab" data-toggle="tab" href="#emailsetting" role="tab" aria-controls="emailsetting" aria-selected="false">Email Setting</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="sidebars-tab" data-toggle="tab" href="#sidebars" role="tab" aria-controls="sidebars" aria-selected="false">Sidebar</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="homepage-tab" data-toggle="tab" href="#homepage" role="tab" aria-controls="homepage" aria-selected="false">Home Page Mete</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Other</a>
										</li>
									</ul>
									
									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="logo" role="tabpanel" aria-labelledby="logo-tab">
											
											<!-- Row start -->
											<div class="row gutters justify-content-center">
												<div class="col-lg-5 col-sm-6 col-12">
													<form>
														<div class="card m-0">
															<div class="card-header">
																<div class="card-title">Logo</div>
																<div class="card-sub-title">How can uploard new logo at buttom.</div>
															</div>
															<div class="card-body">
																<div class="card-body">

																	<div class="row gutters">
																		<div class="col-sm-4 col-12">
																			<img src="img/img2.jpg" class="img-thumbnail" alt="Admin & Dashboards">
																		</div>
																		
																	</div>
		
																</div>
																<div class="form-group">
																	<div class="input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
																		</div>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="inputGroupFile01"
																				aria-describedby="inputGroupFileAddon01">
																			<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
																		</div>
																	</div>
																</div>
																<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
																	Form</button>
															</div>
														</div>
													</form>
												</div>
											</div>
											<!-- Row end -->
										</div>
										<div class="tab-pane" id="favicon" role="tabpanel" aria-labelledby="favicon">
											<!-- Row start -->
											<div class="row gutters justify-content-center">
												<div class="col-lg-5 col-sm-6 col-12">
													<form>
														<div class="card m-0">
															<div class="card-header">
																<div class="card-title">Logo</div>
																<div class="card-sub-title">How can uploard new logo at buttom.</div>
															</div>
															<div class="card-body">
																<div class="card-body">

																	<div class="row gutters">
																		<div class="col-sm-4 col-12">
																			<img src="img/img2.jpg" class="img-thumbnail" alt="Admin & Dashboards">
																		</div>
																		
																	</div>
		
																</div>
																<div class="form-group">
																	<div class="input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
																		</div>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="inputGroupFile01"
																				aria-describedby="inputGroupFileAddon01">
																			<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
																		</div>
																	</div>
																</div>
																<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
																	Form</button>
															</div>
														</div>
													</form>
												</div>
											</div>
											<!-- Row end -->
										</div>
										<div class="tab-pane" id="generelcontent" role="tabpanel" aria-labelledby="generelcontent-tab">
											<!-- Row start -->
											<div class="row justify-content-center gutters">
												<div class="col-lg-10 col-sm-12 col-12">
													<form>
														<div class="card m-0">
															<div class="card-header">
																<div class="card-title">General Contact</div>
																<ul class="text-muted custom">
																	<li>* Custom form controls and selects are also supported.</li>
																	<li>* You can then remix that once again with size-specific column classes.</li>
																	<li>* Group checkboxes or radios on the same horizontal row by adding .form-check-inline to any
																		.form-check.</li>
																</ul>
															</div>
															<div class="card-body">

																<!-- Row start -->
																<div class="row gutters">
																		<div class="col-sm-12">
																			<div class="card m-0">
																				<div class="card-header">
																					<label for="inputName" class="col-form-label">Footer-About us</label>
																				</div>
																				<div class="card-body">
												
																					<div class="summernote"></div>
												
																				</div>
																			</div>
												
																		</div>
																	<div class="col-lg-6 col-md-6 col-sm-12">
																		<div class="form-group">
																			<label for="inputName" class="col-form-label">Footer-Copyright</label>
																			<input type="text" class="form-control" id="inputName" placeholder="@Copyright">
																		</div>
																		<div class="form-group">
																			<label for="inputEmail" class="col-form-label">Contact Phone Number</label>
																			<input type="email" class="form-control" id="inputEmail" placeholder="000-000-000">
																		</div>
																		<div class="form-group">
																			<label for="inputMessage" class="col-form-label">Contact Address</label>
																			<textarea class="form-control" id="message" placeholder="ABC Steet, Cambodia." maxlength="140"
																				rows="4"></textarea>
																			<div class="form-text text-muted">
																				<p id="characterLeft" class="help-block ">140 characters left</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-6 col-sm-12">
																		<div class="form-group">
																			<label for="inputSubject" class="col-form-label">Contact Email</label>
																			<input type="text" class="form-control" id="inputSubject" placeholder="info@yourdomain.com">
																		</div>
																		<div class="form-group">
																			<label for="inputMobNumber" class="col-form-label">Contact Fax Number</label>
																			<input type="number" class="form-control" id="inputMobNumber" placeholder="000-000-000">
																		</div>
																		<div class="form-group">
																			<label for="inputMessage" class="col-form-label">Contact Map iframe</label>
																			<textarea class="form-control" id="message" placeholder="Google Maps" maxlength="140"
																				rows="4"></textarea>
																			<div class="form-text text-muted">
																				<p id="characterLeft" class="help-block ">140 characters left</p>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- Row end -->

																<!-- Row start -->
																<div class="row gutters">
																	<div class="col-xl-12">
																		<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
																			Form</button>
																	</div>
																</div>
																<!-- Row end -->

															</div>
														</div>
													</form>
												</div>
											</div>
											<!-- Row end -->
										</div>
										<div class="tab-pane" id="emailsetting" role="tabpanel" aria-labelledby="emailsetting-tab">
											<!-- Row start -->
											<div class="row justify-content-center gutters">
												<div class="col-xl-7 col-lg-7 col-md-9 col-sm-10">
													<form>
														<div class="card m-0">
															<div class="card-header">
																<div class="card-title">Email Settings</div>
																<div class="card-sub-title">How can we help you? A placeholder for small description.</div>
															</div>
															<div class="card-body">

																<div class="form-group row gutters">
																	<label for="inputName" class="col-sm-3 col-form-label text-right">Send Email From*</label>
																	<div class="col-lg-8 col-sm-4">
																		<input type="text" class="form-control" id="inputName" placeholder="contact@yourwesite.com">
																	</div>
																</div>

																<div class="form-group row gutters">
																	<label for="inputName" class="col-sm-3 col-form-label text-right">Receive Email To*</label>
																	<div class="col-lg-8 col-sm-4">
																		<input type="text" class="form-control" id="inputName" placeholder="admin@gmail.com">
																	</div>
																</div>

																<div class="form-group row gutters">
																	<label for="inputEmail" class="col-sm-3 col-form-label text-right">SMTP Active?*</label>
																	<div class="col-lg-8 col-sm-4">
																		<div class="form-group">
																			<select class="form-control form-control-lg">
																				<option>Yes</option>
																				<option>No</option>
																			</select>
																		</div>
																	</div>
																</div>

																<div class="form-group row gutters">
																	<label for="inputEmail" class="col-sm-3 col-form-label text-right">SMTP SSL?*</label>
																	<div class="col-lg-8 col-sm-4">
																		<div class="form-group">
																			<select class="form-control form-control-lg">
																				<option>Yes</option>
																				<option>No</option>
																			</select>
																		</div>
																	</div>
																</div>

																<div class="form-group row gutters">
																	<label for="inputEmail" class="col-sm-3 col-form-label text-right">SMTP Host*</label>
																	<div class="col-lg-8 col-sm-4">
																		<input type="email" class="form-control" id="inputEmail" placeholder="smtp.mailtrap.io">
																	</div>
																</div>

																<div class="form-group row gutters">
																	<label for="inputMobNumber" class="col-sm-3 col-form-label text-right">SMTP Port*</label>
																	<div class="col-lg-8 col-sm-4">
																		<input type="number" class="form-control" id="inputMobNumber" placeholder="300">
																	</div>
																</div>

																<div class="form-group row gutters">
																	<label for="inputSubject" class="col-sm-3 col-form-label text-right">SMTP Username</label>
																	<div class="col-lg-8 col-sm-4">
																		<input type="text" class="form-control" id="inputSubject" placeholder="er34dfdrt43d">
																	</div>
																</div>

																<div class="form-group row gutters">
																	<label for="inputSubject" class="col-sm-3 col-form-label text-right">SMTP Password</label>
																	<div class="col-lg-8 col-sm-4">
																		<input type="text" class="form-control" id="inputSubject" placeholder="gh56rdgf65d">
																	</div>
																</div>

																<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
																	Form</button>

															</div>
														</div>
													</form>
												</div>
											</div>
											<!-- Row end -->
										</div>
										<div class="tab-pane" id="sidebars" role="tabpanel" aria-labelledby="sidebars">
											<!-- Row start -->
											<div class="row justify-content-center gutters">
												<div class="col-xl-7 col-lg-7 col-md-9 col-sm-10">
													<form>
														<div class="card m-0">
															<div class="card-header">
																<div class="card-title">Email Settings</div>
																<div class="card-sub-title">How can we help you? A placeholder for small description.</div>
															</div>
															<div class="card-body">

																<div class="form-group">
																	<label for="inputMessage" class="col-form-label">How many recent news? *</label>
																	<input type="text" class="form-control" id="inputName" placeholder="">
																	<small id="passwordHelpBlock" class="form-text text-muted">
																		If you do not want to show recent news, put value to 0.
																	</small>
																</div>

																<div class="form-group">
																	<label for="inputMessage" class="col-form-label">How many popular news? *</label>
																	<input type="text" class="form-control" id="inputName" placeholder="">
																	<small id="passwordHelpBlock" class="form-text text-muted">
																		If you do not want to show popular news, put value to 0.
																	</small>
																</div>

																<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
																	Form</button>

															</div>
														</div>
													</form>
												</div>
											</div>
											<!-- Row end -->
										</div>
										<div class="tab-pane" id="homepage" role="tabpanel" aria-labelledby="homepage-tab">
											<!-- Row start -->
											<div class="row justify-content-center gutters">
												<div class="col-xl-7 col-lg-7 col-md-9 col-sm-10">
													<form>
														<div class="card m-0">
															<div class="card-header">
																<div class="card-title">Home Page Meta</div>
																<div class="card-sub-title">How can we help you? A placeholder for small description.</div>
															</div>
															<div class="card-body">

																<div class="form-group">
																	<label for="inputMessage" class="col-form-label">Meta Title</label>
																	<input type="text" class="form-control" id="inputName" placeholder="">
																</div>

																<div class="form-group">
																	<label for="inputMessage" class="col-form-label">Meta Keyword</label>
																	<textarea class="form-control" id="message" placeholder="Google Maps" maxlength="140"
																		rows="4"></textarea>
																</div>

																<div class="form-group">
																	<label for="inputMessage" class="col-form-label">Meta Description</label>
																	<textarea class="form-control" id="message" placeholder="Google Maps" maxlength="140"
																		rows="4"></textarea>
																</div>

																<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
																	Form</button>

															</div>
														</div>
													</form>
												</div>
											</div>
											<!-- Row end -->
										</div>
										<div class="tab-pane" id="other" role="tabpanel" aria-labelledby="other-tab">
											Other
										</div>
									</div>
								<!-- Row end -->
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Main container end -->

@endsection
