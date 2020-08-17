<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\CustomerOrder;
use App\Model\Bills;
class ProcessSubmitOrder extends Controller
{
	public function processSubmitOrder(Request $request){
	// Do somethings
	$bill = new Bills;
    event(new CustomerOrder($bill));
    }
}
