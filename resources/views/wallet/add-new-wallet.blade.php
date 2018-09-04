@extends('home-master')

@section('page-title')
Add New Wallet
@endsection


@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Wallet
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('view-all-wallet')}}">View All Wallets</a></li>
			<li class="active">Add New Wallet</li>
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
								<label for="inputUserName3" class="col-sm-4 control-label">User Name</label>

								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select class="form-control select2" style="width: 100%;" id="inputUserName3" name="inputUserName3">
											<option selected="selected">Select User</option>
											<option value="first_user">First User</option>
											<option value="second_user">Second User</option>
											<option value="third_user">Third User</option>
											<option value="fourth_user">Fourth User</option>
											<option value="fifth_user">Fifth User</option>
											<option value="sixth_user">Sixth User</option>
											<option value="seventh_user">Seventh User</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputAmount3" class="col-sm-4 control-label">Amount</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input type="number" class="form-control" id="inputAmount3" placeholder="Enter Amount" name="inputAmount3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputBonusAmount3" class="col-sm-4 control-label">Bonus Amount</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input type="number" class="form-control" id="inputBonusAmount3" placeholder="Enter Bonus Amount" name="inputBonusAmount3">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputTranscationType3" class="col-sm-4 control-label">Transaction Type</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-gg-circle"></i>
										</div>
										<select class="form-control" id="inputTransactionType3" placeholder="Enter TransactionType3" name="inputTransactionType3">
											<option>Select Transaction Type</option>
											<option value="debit">Debit</option>
											<option value="credit">Credit</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPaymentMode3" class="col-sm-4 control-label">Payment Mode</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-gg-circle"></i>
										</div>
										<select class="form-control" id="inputPaymentMode3" placeholder="Enter TransactionType3" name="inputPaymentMode3">
											<option>Select Payment Mode</option>
											<option value="bank">Bank</option>
											<option value="esewa">Esewa</option>
											<option value="khalti">Khalti</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputRemark3" class="col-sm-4 control-label">Remark</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control" rows="5" id="inputRemark3" placeholder="Enter Remark" name="inputRemark3"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputVoucherImage3" class="col-sm-4 control-label">Voucher Image</label>
								<div class="col-sm-6">
									<div class="input-group">
										<input class="inputfile inputfile-1" type="file" id="file-1" name="inputVoucherImage3" data-multiple-caption="{count} files selected" multiple >
										<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload Image&hellip;</span></label>
										<p class="help-block">Upload your voucher image</p>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputUserType3" class="col-sm-4 control-label">Active</label>
								<div class="col-sm-6">
									<label>
										<input type="radio" name="r3" class="flat-red" checked>Yes
									</label>
									<label>
										<input type="radio" name="r3" class="flat-red">No
									</label>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer col-md-offset-4">
							<button type="submit" class="btn btn-info">Add Wallet</button>
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