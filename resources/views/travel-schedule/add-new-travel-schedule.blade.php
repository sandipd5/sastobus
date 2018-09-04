@extends('home-master')

@section('page-title')
Add New Travel Schedule
@endsection


@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Travel Schedule
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('view-all-travel-schedule')}}">View All Travel Schedules</a></li>
			<li class="active">Add New Travel Schedule</li>
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
								<label for="inputTravelRoute3" class="col-sm-4 control-label">Travel Route</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-map"></i>
										</div>
										<select class="form-control select2" style="width: 100%;" id="inputTravelRoute3" name="inputTravelRoute3">
											<option selected="selected">Select Travel Route</option>
											<option value="first_route">First Travel Route</option>
											<option value="second_route">Second Travel Route</option>
											<option value="third_route">Third Travel Route</option>
											<option value="fourth_route">Fourth Travel Route</option>
											<option value="fifth_route">Fifth Travel Route</option>
											<option value="sixth_route">Sixth Travel Route</option>
											<option value="seventh_route">Seventh Travel Route</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputScheduleName3" class="col-sm-4 control-label">Schedule Name</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input type="text" class="form-control" id="inputScheduleName3" placeholder="Enter Schedule Name" name="inputScheduleName3">
									</div>
								</div>
							</div>
							<div class="bootstrap-timepicker">
								<div class="form-group">
									<label for="inputStartTime3" class="col-sm-4 control-label">Start Time</label>
									<div class="col-sm-6">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input type="text" class="form-control timepicker" id="inputStartTime3" name="inputStartTime3">
										</div>
									</div>
								</div>
							</div>
							<div class="bootstrap-timepicker">
								<div class="form-group">
									<label for="inputReachTime3" class="col-sm-4 control-label">Reach Time</label>
									<div class="col-sm-6">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input type="text" class="form-control timepicker" id="inputReachTime3" name="inputReachTime3">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPrice3" class="col-sm-4 control-label">Price</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input type="number" class="form-control" id="inputPrice3" placeholder="Enter Price" name="inputPrice3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputExtraCharge3" class="col-sm-4 control-label">Extra Charge</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input type="number" class="form-control" id="inputExtraCharge3" placeholder="Enter Extra Charge" name="inputExtraCharge3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputDiscount3" class="col-sm-4 control-label">Discount</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input type="number" class="form-control" id="inputDiscount3" placeholder="Enter Discount" name="inputDiscount3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputFeature3" class="col-sm-4 control-label">Feature</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control" rows="5" id="inputFeature3" placeholder="Enter Feature" name="inputFeature3"></textarea>
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
										<textarea class="form-control" rows="5" id="inputSummary3" placeholder="Enter Summary" name="inputSummary3"></textarea>
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
							<button type="submit" class="btn btn-info">Add Travel Schedule</button>
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