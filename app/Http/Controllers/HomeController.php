<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    // return view('home');
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function prijem()
	{
		return view('prijem');
	}
	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function jsonUsers()
    {
		//$users = DB::table('users')->pluck('name');
		$users = DB::table('users')->get();
		return response()->json($users);
	}
	/**
	 * @return \Illuminate\Http\JsonResponse
	 *
	 * http://www.devtrainings.com/2016/04/laravel-how-to-get-route-parameters-in-controller.html
	 * https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers
	 * https://scotch.io/tutorials/simple-and-easy-laravel-routing
	 */
	public function jsonCustomers($id = null)
	{
		// $customers = DB::table('customers')->get();


/*		$customers = DB::table('customers')
			->leftJoin('addresses', 'customers.zakaznik_adresa', '=', 'addresses.id')
			->orderBy('customers.id', 'asc')
			->get();
		return response()->json($customers);*/

		/*$customers = DB::table('addresses')
			->leftJoin('customers', 'customers.zakaznik_adresa', '=', 'addresses.id')
			->leftJoin('towns', 'towns.id', '=', 'addresses.obec')
			->orderBy('customers.id', 'asc')
			->get();
		return response()->json($customers);*/


		/*$customers = DB::table('customers')
			->select('customers.id', 'customers.zakaznik_priezvisko', 'customers.zakaznik_meno', 'customers.zakaznik_titul')
			->get();
		return response()->json($customers);*/

		$query = DB::table('customers')
			->leftJoin('addresses', 'customers.zakaznik_adresa', '=', 'addresses.id')
			->leftJoin('towns', 'addresses.obec', '=', 'towns.id')
			//->select('customers.id', 'addresses.id', 'towns.id')
			->select('customers.id', 'zakaznik_je_firma', 'customers.zakaznik_priezvisko', 'addresses.ulica', 'towns.obec_nazov')
			//->orderBy('customers.zakaznik_priezvisko', 'asc')
			;

		if ( $id != null )
		{
			$customers = $query->where('customers.id','=', $id)->get();
			return response()->json($customers);

		}
		else
		{
			$customers = $query->get();
			return response()->json($customers);

		}

		
		/*$customers = DB::table('customers')
			->leftJoin('addresses','addresses.id','=','customers.zakaznik_adresa')
			->leftJoin('towns',function($join){
				$join->on('addresses.obec','=','towns.id');
				$join->on('customers.zakaznik_adresa','=','addresses.id')
					->on('addresses.obec','=','towns.id');
			})
			//->select('customers.id', 'addresses.id', 'towns.id')
			->get();
		return response()->json($customers);*/

	}
}
