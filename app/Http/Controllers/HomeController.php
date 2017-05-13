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

		$query = DB::table('customers')
			->leftJoin('addresses', 'customers.zakaznik_adresa', '=', 'addresses.id')
			->leftJoin('towns', 'addresses.obec', '=', 'towns.id')
			//->select('customers.id', 'addresses.id', 'towns.id')
			/*->select('customers.id', 'customers.zakaznik_je_firma', 'customers.zakaznik_priezvisko', 'customers.zakaznik_meno',
					'addresses.ulica', 'addresses.cislo_domu','towns.obec_nazov')*/
			->orderBy('customers.zakaznik_priezvisko', 'asc')
			;

		/** @var TYPE_NAME $customers */
		$customers = $id != null ? $query->where('customers.id', '=', $id)->get() : $query->get();

		return response()->json([
			'customers'=>$customers
		]);

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

	public function jsonProducts($id = null)
	{
		$query = DB::table('products')
			->leftJoin('product_groups', 'products.vyrobok_kategoria', '=', 'product_groups.id')
			->leftJoin('manufacturers', 'products.vyrobok_vyrobca', '=', 'manufacturers.id')
			//->select('products.id', 'products.vyrobok_model','product_groups.vyrobok_skupina_kod','manufacturers.vyrobca_meno')//, 'manufacturers.id')
			//->orderBy('products.vyrobok_cislo', 'asc')
		;

		/** @var TYPE_NAME $products */
		$products = $id != null ? $query->where('products.id', '=', $id)->get() : $query->get();

		return response()->json([
			'products'=>$products
		]);
	}

	/**
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Support\Collection
	*/
	public function jsonData()
	{
		$customers = DB::table('customers')
			->leftJoin('addresses', 'customers.zakaznik_adresa', '=', 'addresses.id')
			->leftJoin('towns', 'addresses.obec', '=', 'towns.id')
			//->orderBy('customers.zakaznik_priezvisko', 'asc')
			->get();

		$products = DB::table('products')
			->leftJoin('product_groups', 'products.vyrobok_kategoria', '=', 'product_groups.id')
			->leftJoin('manufacturers', 'products.vyrobok_vyrobca', '=', 'manufacturers.id')
			//->orderBy('products.vyrobok_cislo', 'asc')
			->get();


		$customers = array('customers' => $customers);
		$products = array('products' => $products);

		$data = array_merge($customers,$products);

		return response()->json($data);

	}


}
