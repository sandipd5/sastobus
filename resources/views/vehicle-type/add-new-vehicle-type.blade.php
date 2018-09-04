@extends('home-master')

@section('page-title')
Add New Vehicle Type
@endsection


@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Vehicle Type
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('view-all-vehicle-type')}}">View All Vehicle Types</a></li>
			<li class="active">Add New Vehicle Type</li>
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
											<i class="fa fa-bus"></i>
										</div>
										<select class="form-control select2" style="width: 100%;" id="inputTravelCompany3" name="inputTravelCompany3">
											<option selected="selected">Select Travel Company</option>
											<option value="first_company">First Travel Company</option>
											<option value="second_company">Second Travel Company</option>
											<option value="third_company">Third Travel Company</option>
											<option value="fourth_company">Fourth Travel Company</option>
											<option value="fifth_company">Fifth Travel Company</option>
											<option value="sixth_company">Sixth Travel Company</option>
											<option value="seventh_company">Seventh Travel Company</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputVehicleTypeName3" class="col-sm-4 control-label">Vehicle Type Name</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-bus"></i>
										</div>
										<input type="text" class="form-control" id="inputVehicleTypeName3" placeholder="Enter Vehicle Type Name" name="inputVehicleTypeName3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputAvatar3" class="col-sm-4 control-label">Avatar</label>
								<div class="col-sm-6">
									<div class="input-group">
										<input class="inputfile inputfile-1" type="file" id="file-1" name="inputAvatar3" data-multiple-caption="{count} files selected" multiple >
										<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload Image&hellip;</span></label>
										<p class="help-block">Upload your avatar</p>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputSummary3" class="col-sm-4 control-label">Summary</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control" rows="5" id="inputSummary3" placeholder="Enter Summary" name="inputRemark3"></textarea>
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
							<button type="submit" class="btn btn-info">Add Vehicle Type</button>
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