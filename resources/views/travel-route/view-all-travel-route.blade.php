@extends('home-master')

@section('page-title')
View All Travel Routes
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			View All Travel Routes
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li class="active">View All Travel Routes</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<a href="{{url('add-new-user')}}"><button type="submit" class="btn btn-info"><i class="fa fa-list"></i>&emsp;Add Travel Route</button></a>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Travel Company</th>
									<th>Route Name</th>
									<th>Start Point</th>
									<th>End Point</th>
									<th>Pickup Point</th>
									<th>Description</th>
									<th>Status</th>
									<th>Created</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>John Doe Companny</td>
									<td>bhaktapur</td>
									<td>koteshwor</td>
									<td>suryabinayak</td>
									<td>koteshwor</td>
									<td>Limit two lines at max</td>
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
									<td>Mellisa Doe Company</td>
									<td>Kathmandu</td>
									<td>Koteshwor</td>
									<td>Ratnapark</td>
									<td>Koteshwor</td>
									<td>Limit two lines at max</td>
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
									<th>Travel Company</th>
									<th>Route Name</th>
									<th>Start Point</th>
									<th>End Point</th>
									<th>Pickup Point</th>
									<th>Description</th>
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