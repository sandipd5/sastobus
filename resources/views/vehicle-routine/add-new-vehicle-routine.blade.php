@extends('home-master')

@section('page-title')
Add New Vehicle Routine
@endsection


@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Vehicle Routine
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('view-all-vehicle-routine')}}">View All Vehicle Routines</a></li>
			<li class="active">Add New Vehicle Routines</li>
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
								<label for="inputTravelRouteSchedule3" class="col-sm-4 control-label">Travel Route Schedule</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<select class="form-control select2" style="width: 100%;" id="inputTravelRouteSchedule3" name="inputTravelRouteSchedule3">
											<option selected="selected">Select Travel Route Schedule</option>
											<option value="first_route_schedule">First Travel Route Schedule</option>
											<option value="second_route_schedule">Second Travel Route Schedule</option>
											<option value="third_route_schedule">Third Travel Route Schedule</option>
											<option value="fourth_route_schedule">Fourth Travel Route Schedule</option>
											<option value="fifth_route_schedule">Fifth Travel Route Schedule</option>
											<option value="sixth_route_schedule">Sixth Travel Route Schedule</option>
											<option value="seventh_route_schedule">Seventh Travel Route Schedule</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputVehicle3" class="col-sm-4 control-label">Vehicle</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-bus"></i>
										</div>
										<select class="form-control select2" style="width: 100%;" id="inputVehicle3" name="inputVehicle3">
											<option selected="selected">Select Vehicle</option>
											<option value="first_vehicle">First Vehicle</option>
											<option value="second_vehicle">Second Vehicle</option>
											<option value="third_vehicle">Third Vehicle</option>
											<option value="fourth_vehicle">Fourth Vehicle</option>
											<option value="fifth_vehicle">Fifth Vehicle</option>
											<option value="sixth_vehicle">Sixth Vehicle</option>
											<option value="seventh_vehicle">Seventh Vehicle</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputVehicleSeat3" class="col-sm-4 control-label">Vehicle Seat</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-medium"></i>
										</div>
										<select class="form-control select2" style="width: 100%;" id="inputVehicleSeat3" name="inputVehicleSeat3">
											<option selected="selected">Select Vehicle</option>
											<option value="first_vehicle_seat">First Vehicle Seat</option>
											<option value="second_vehicle_seat">Second Vehicle Seat</option>
											<option value="third_vehicle_seat">Third Vehicle Seat</option>
											<option value="fourth_vehicle_seat">Fourth Vehicle Seat</option>
											<option value="fifth_vehicle_seat">Fifth Vehicle Seat</option>
											<option value="sixth_vehicle_seat">Sixth Vehicle Seat</option>
											<option value="seventh_vehicle_seat">Seventh Vehicle Seat</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputDepartureDate3" class="col-sm-4 control-label">Departure Date</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="datepicker" name="inputDepartureDate3">
									</div>
								</div>
							</div>
							<div class="bootstrap-timepicker">
								<div class="form-group">
									<label for="inputDepartureTime3" class="col-sm-4 control-label">Departure Time</label>
									<div class="col-sm-6">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input type="text" class="form-control timepicker" id="inputDepartureTime3" name="inputDepartureTime3">
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
								<label for="inputAmount3" class="col-sm-4 control-label">Extra Charge</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input type="number" class="form-control" id="inputAmount3" placeholder="Enter Extra Charge" name="inputAmount3">
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
								<label for="inputFeature3" class="col-sm-4 control-label">Features</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control" rows="5" id="inputFeature3" placeholder="Enter Remark" name="inputFeature3"></textarea>
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
							<button type="submit" class="btn btn-info">Add Vehicle Routine</button>
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