<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller {

	public function index() {

		$client = Client::orderBY('id', 'desc')->paginate(6);
		return view('clients.index')->withClient($client);
	}

	public function create() {
		return view('clients.create');
	}

	public function store(Request $request) {

		$request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255',
			'password' => 'required|string|min:6',
			'mobile_number' => 'required|numeric',
			'primary_address' => 'required|string|max:255',
			'temp_address' => 'required|string|max:255',
			'phone_number' => 'required|numeric',
			'wallet_id' => 'required|integer',
			'total_amount' => 'required|integer',
			'bonus_amount' => 'required|integer',
			//	'user_type' => 'required|in:admin,normal,travel_agent,travel_agent_admin',
			//	'active' => 'required',
			'travel_company_id' => 'required|integer',

		]);

		$client = new Client;
		$client->name = $request->name;
		$client->password = bcrypt('$request->password');
		$client->email = $request->email;
		$client->mobile_number = $request->mobile_number;
		$client->primary_address = $request->primary_address;
		$client->temp_address = $request->temp_address;
		$client->phone_number = $request->phone_number;
		$client->wallet_id = $request->wallet_id;
		$client->total_amount = $request->total_amount;
		$client->bonus_amount = $request->bonus_amount;
		$client->user_type = $request->user_type;
		$client->active = $request->active;
		$client->travel_company_id = $request->travel_company_id;
		$client->save();
		return redirect()->route('clients.index');
		//dd($client);

	}

	public function show($id) {
		//

	}

	public function edit($id) {
		$client = Client::find($id);
		return view('clients.edit')->withClient($client);

	}

	public function update(Request $request, $id) {
		var_dump($request);
		/*	$request->validate([

				'name' => 'required|string|max:255',
				'email' => 'required|string|email|max:255',
				'password' => 'required|string|min:6',
				'mobile_number' => 'required|numeric',
				'primary_address' => 'required|string|max:255',
				'temp_address' => 'required|string|max:255',
				'phone_number' => 'required|numeric',
				'wallet_id' => 'required|integer',
				'total_amount' => 'required|integer',
				'bonus_amount' => 'required|integer',
				//  'user_type' => 'required|in:admin,normal,travel_agent,travel_agent_admin',
				//  'active' => 'required',
				'travel_company_id' => 'required|integer',

			]);

			$client = Client::find($id);
			$client->name = $request->name;
			$client->password = bcrypt('$request->password');
			$client->email = $request->email;
			$client->mobile_number = $request->mobile_number;
			$client->primary_address = $request->primary_address;
			$client->temp_address = $request->temp_address;
			$client->phone_number = $request->phone_number;
			$client->wallet_id = $request->wallet_id;
			$client->total_amount = $request->total_amount;
			$client->bonus_amount = $request->bonus_amount;
			$client->user_type = $request->user_type;
			$client->active = $request->active;
			$client->travel_company_id = $request->travel_company_id;
			$client->save();
			return redirect()->route('clients.index');

			//return redirect()->route('clients.index');
		*/
	}

	public function destroy($id) {

		//
	}
}
