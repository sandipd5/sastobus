@extends('home-master')

@section('page-title')
Add New Travel
@endsection


@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Travel
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('view-all-travel')}}">View All Travels</a></li>
			<li class="active">Add New Travel</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title"></h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="" action="">
						<div class="box-body">
							<div class="form-group">
								<label for="inputTravelCompany3" class="col-sm-4 control-label">Travel Company</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTravelCompany3" placeholder="Enter Travel Company Name" name="inputTravelCompany3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputbannerImage3" class="col-sm-4 control-label">Banner Image</label>
								<div class="col-sm-6">
									<div class="input-group">
										<input class="inputfile inputfile-1" type="file" id="file-1" name="inputBannerImage3" data-multiple-caption="{count} files selected" multiple >
										<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload Image&hellip;</span></label>
										<p class="help-block">Upload your banner image</p>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputCompanyLogo3" class="col-sm-4 control-label">Company Logo</label>
								<div class="col-sm-6">
									<div class="input-group">
										<input class="inputfile inputfile-1" type="file" id="file-1" name="inputCompanyLogo3" data-multiple-caption="{count} files selected" multiple >
										<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload Image&hellip;</span></label>
										<p class="help-block">Upload your company logo</p>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress3" class="col-sm-4 control-label">Address</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-map-marker"></i>
										</div>
										<input type="text" class="form-control" id="inputAddress3" placeholder="Enter Address" name="inputAddress3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPhoneNumber3" class="col-sm-4 control-label">Phone Number</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input type="number" class="form-control" id="inputPhoneNumber3" placeholder="Enter Phone Number" name="inputPhoneNumber3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputMobileNumber3" class="col-sm-4 control-label">Mobile Number</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-mobile"></i>
										</div>
										<input type="number" class="form-control" id="inputMobileNumber3" placeholder="Enter Mobile Number" name="inputMobileNumber3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputDescription3" class="col-sm-4 control-label">Description</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control" rows="5" id="inputDescription3" placeholder="Enter Description" name="inputDescription3"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputUserType3" class="col-sm-4 control-label">Active</label>
								<div class="col-sm-6">
									<label>
										<input type="radio" name="active" value="1" class="flat-red" checked>Yes
									</label>
									<label>
										<input type="radio" name="active" value="0" class="flat-red">No
									</label>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer col-md-offset-4">
							<button type="submit" class="btn btn-info">Add Travel</button>
							<button type="submit" class="btn btn-danger">Cancel</button>
						</div>
						<!-- /.box-footer -->
					</form>

					<div class="box-header">
						<h3 class="box-title"></h3>
					</div>
				</div>
			</div>
			<!--/.col (right) -->
		</div>
		<!-- /.row -->
	</section>
</div>
@endsection