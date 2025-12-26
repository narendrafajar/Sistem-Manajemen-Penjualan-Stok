<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        return Customer::all();
    }

    public function store(Request $r) {
        return Customer::create($r->all());
    }

    public function show($id) {
        return Customer::findOrFail($id);
    }

    public function update(Request $r, $id) {
        $data = Customer::findOrFail($id);
        $data->update($r->all());
        return $data;
    }

    public function destroy($id) {
        Customer::destroy($id);
        return response()->json(['message'=>'deleted']);
    }
}
