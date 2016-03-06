<?php

namespace App\Http\Controllers;

use App\PhoneCall;
use Illuminate\Http\Request;

use App\Http\Requests;

class PhoneCallsController extends Controller
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

    public function index()
    {
        $phoneCalls = PhoneCall::all();
        return view('phonecalls.index', compact('phoneCalls'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(Request $request, $id)
    {

    }
}
