@extends('home-master')

@section('page-title')
Add New Travel Route
@endsection


@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Travel Route
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('view-all-travel-route')}}">View All Travel Routes</a></li>
			<li class="active">Add New Travel Route</li>
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
								<label for="inputRouteName3" class="col-sm-4 control-label">Route Name</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-map"></i>
										</div>
										<input type="text" class="form-control" id="inputRouteName3" placeholder="Enter Route Name" name="inputRouteName3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputStartPoint3" class="col-sm-4 control-label">Start Point</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-hourglass-start"></i>
										</div>
										<input type="text" class="form-control" id="inputStartPoint3" placeholder="Enter Start Point" name="inputStartPoint3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEndPoint3" class="col-sm-4 control-label">End Point</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-hourglass-end"></i>
										</div>
										<input type="text" class="form-control" id="inputEndPoint3" placeholder="Enter End Point" name="inputEndPoint3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPickupPoint3" class="col-sm-4 control-label">Pickup Point</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-map-pin"></i>
										</div>
										<input type="text" class="form-control" id="inputPickupPoint3" placeholder="Enter Pickup Point" name="inputPickupPoint3">
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
							<button type="submit" class="btn btn-info">Add Travel Route</button>
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