@extends('home-master')

@section('page-title')
View All Travel Schedules
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			View All Travel Schedules
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li class="active">View All Travel Schedules</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<a href="{{url('add-new-travel-schedule')}}"><button type="submit" class="btn btn-info"><i class="fa fa-list"></i>&emsp;Add Travel Schedule</button></a>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Travel Route</th>
									<th>Schedule Name</th>
									<th>Start Time</th>
									<th>Reach TIme</th>
									<th>Price</th>
									<th>Extra Charge</th>
									<th>Discount</th>
									<th>Feature</th>
									<th>Summary</th>
									<th>Status</th>
									<th>Created</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Bhaktapur</td>
									<td>Bhaktapur Schedule</td>
									<td>9:00AM</td>
									<td>5:00PM</td>
									<td>1000</td>
									<td>100</td>
									<td>10%</td>
									<td>Limit at max two lines</td>
									<td>Limit at max two lines</td>
									<td><span class="label bg-green">Active</span></td>
									<td>2012-12-12</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-info">Action</button>
											<button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
												<span class="caret"></span>
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#"><i class="fa fa-expand"></i>View</a></li>
												<li><a href="#"><i class="fa fa-edit"></i>Edit</a></li>
												<li><a href="#" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-remove"></i>Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Katdmandu</td>
									<td>Katdmandu Schedule</td>
									<td>9:00AM</td>
									<td>5:00PM</td>
									<td>2000</td>
									<td>200</td>
									<td>20%</td>
									<td>Limit at max two lines</td>
									<td>Limit at max two lines</td>
									<td><span class="label bg-red">Inactive</span></td>
									<td>2012-12-12</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-info">Action</button>
											<button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
												<span class="caret"></span>
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#"><i class="fa fa-expand"></i>View</a></li>
												<li><a href="#"><i class="fa fa-edit"></i>Edit</a></li>
												<li><a href="#" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-remove"></i>Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>Travel Route</th>
									<th>Schedule Name</th>
									<th>Start Time</th>
									<th>Reach TIme</th>
									<th>Price</th>
									<th>Extra Charge</th>
									<th>Discount</th>
									<th>Feature</th>
									<th>Summary</th>
									<th>Status</th>
									<th>Created</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
</div>

<div  class="example-modal">
	<div id="delete-modal" class="modal modal-danger">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Delete User</h4>
				</div>
				<div class="modal-body">
					<p>Are You Sure You Want to Delete This</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-outline">Delete</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
</div>
<!-- /.example-modal -->

@endsection