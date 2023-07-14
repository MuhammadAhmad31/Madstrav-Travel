<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TravelPackage;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $members = User::count();
        $items = TravelPackage::with(['galleries'])->get();
        $travels = TravelPackage::count();
        $transactions = Transaction::count();
        return view('pages.home',[
            'items' => $items,
            'members' => $members,
            'travels' => $travels,
            'transactions' => $transactions
        ]);
    }
}
