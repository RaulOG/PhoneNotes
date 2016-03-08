<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneCallRequest;
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
        $phoneCalls = PhoneCall::orderBy('created_at', 'desc')->get();
        return view('phonecalls.index', compact('phoneCalls'));
    }

    public function create()
    {
        return view('phonecalls.create');
    }

    public function store(Request $request)
    {
        $phoneCall = new PhoneCall;
        $phoneCall->name = $request->name;
        $phoneCall->phone_number = $request->phone_number;
        $phoneCall->notes = $request->notes;
        $phoneCall->save();
        return redirect()->route('phone_calls.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $phoneCall = PhoneCall::find($id);
        return view('phonecalls.edit', compact('phoneCall'));
    }

    public function update(PhoneCallRequest $request, $id)
    {
        $phoneCall = PhoneCall::find($id);

        $phoneCall->name = $request->input('name');
        $phoneCall->phone_number = $request->input('phone_number');
        $phoneCall->notes = $request->input('notes');
        $phoneCall->save();

        return redirect()->route('phone_calls.index');
    }

    public function destroy(Request $request, $id)
    {
        $phoneCall = PhoneCall::find($id);
        $phoneCall->delete();

        return redirect()->route('phone_calls.index');
    }
}
