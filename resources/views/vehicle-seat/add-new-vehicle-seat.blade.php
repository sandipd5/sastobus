@extends('home-master')

@section('page-title')
Add New Vechicle Seat
@endsection


@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Vechicle Seat
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('view-all-vehicle-seat')}}">View All Vehicle Seats</a></li>
			<li class="active">Add New Vechicle Seat</li>
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
								<label for="inputVechicleSeatName3" class="col-sm-4 control-label">Vechicle Seat Name</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-medium"></i>
										</div>
										<input type="text" class="form-control" id="inputVechicleSeatName3" placeholder="Enter Vechicle Seat Name" name="inputVechicleSeatName3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputRow3" class="col-sm-4 control-label">No of Rows</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-medium"></i>
										</div>
										<input type="text" class="form-control" id="inputRow3" placeholder="Enter No Of Rows" name="inputRow3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputColumn3" class="col-sm-4 control-label">No of Column</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-medium"></i>
										</div>
										<input type="text" class="form-control" id="inputColumn3" placeholder="Enter No Of Column" name="inputColumn3">
									</div>
									<br>
									<a id="plot" class="btn btn-success btn-sm">Create Seat Plan</a>
								</div>
							</div>
							<div class="form-group">
								<label for="inputColumn3" class="col-sm-4 control-label">Seat Plan</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div id="seat_plan">
											<script>
												document.getElementById("plot").onclick = function(){
													var rows = document.getElementById("inputRow3").value;
													var column = document.getElementById("inputColumn3").value;



													var tablearea = document.getElementById('seat_plan');


													var table = document.createElement('table');
													table.setAttribute("border", "2px");

													var tr = [];

													for (var i = 0; i < rows; i++){
														tr[i] = document.createElement('tr');   


														for (var j = 0; j < column; j++){
															var x = document.createElement("INPUT");
															x.setAttribute("type", "checkbox");
															x.setAttribute("name", "row_"+i+"column_"+j);
															x.setAttribute("value","1");
															var td = document.createElement('td');
															td.setAttribute("width","60px");
															td.setAttribute("height","60px");
															td.append(x);
															tr[i].appendChild(td);
														}           

														table.appendChild(tr[i]);

													}
													tablearea.appendChild(table);
												}



											</script>

										</div>
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
							<button type="submit" class="btn btn-info">Add Vehicle Seat</button>
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