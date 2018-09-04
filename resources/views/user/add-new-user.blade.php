@extends('home-master')

@section('page-title')
Add New User
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New User
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('view-all-user')}}">View All Users</a></li>
			<li class="active">Add New User</li>
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
					<form class="form-horizontal" method="POST" action='clients.store'>
                        @csrf
						<div class="box-body">
							<div class="form-group">
								<label for="inputName3" class="col-sm-4 control-label">Name</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputName3" placeholder="Enter Full Name" name="inputName3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Email</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope"></i>
										</div>
										<input type="email" class="form-control" id="inputEmail3" placeholder="Enter Email" name="inputEmail3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Password</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-cog"></i>
										</div>
										<input type="password" class="form-control" id="inputPassword3" placeholder="Enter Password" name="inputPassword3">
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
								<label for="inputUserType3" class="col-sm-4 control-label">User Type</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select class="form-control" id="inputUserType3" placeholder="Enter Mobile Number" name="inputUserType3">
											<option>Select User Type</option>
											<option value="normal">Normal</option>
											<option value="travel_agent">Travel Agent</option>
											<option value="travel_agent_admin">Travel Agent Admin</option>
											<option value="admin">Admin</option>
										</select>
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
							<button type="submit" class="btn btn-info">Add User</button>
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
