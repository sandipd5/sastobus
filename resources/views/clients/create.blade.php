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
                    <form class="form-horizontal" method="POST" action="{{ route('clients.store') }}">
                       {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Name</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id=name placeholder="Enter Full Name" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-cog"></i>
                                        </div>
                                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
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
                                        <input type="number" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" name="mobile_number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="primary_address" class="col-sm-4 control-label">Primary Address</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id=primary_address placeholder="Enter Primary Address " name="primary_address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="temp_address" class="col-sm-4 control-label">Temporary Address</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id=temp_address placeholder="Enter Temporary Address" name="temp_address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone_number" class="col-sm-4 control-label">Phone Number</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id=phone_number placeholder="Enter Phone Number" name="phone_number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="total_amount" class="col-sm-4 control-label">Total Amount</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id=total_amount placeholder="Enter Total Amount" name="total_amount" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bonus_amount" class="col-sm-4 control-label">Bonus Amount</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id=bonus_amount placeholder="Enter Bonus Amount" name="bonus_amount" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wallet_id" class="col-sm-4 control-label">Wallet Id</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id=wallet_id placeholder="Enter Wallet Id" name="wallet_id" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="travel_company_id" class="col-sm-4 control-label">Travel Company Id</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id=travel_company_id placeholder="Enter Travel Company Id" name="travel_company_id" required>
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
                                        <select class="form-control" id="user_type"  name="user_type">
                                            <option>Select User Type</option>
                                            <option name="normal" value="normal">Normal</option>
                                            <option name="travel_agent" value="travel_agent">Travel Agent</option>
                                            <option name="travel_agent_admin" value="travel_agent_admin">Travel Agent Admin</option>
                                            <option name="admin" value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserType3" class="col-sm-4 control-label">Active</label>
                                <div class="col-sm-6">
                                    <label>
                                        <input type="radio" name="active" value="1" class="flat-red" checked >Yes
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
