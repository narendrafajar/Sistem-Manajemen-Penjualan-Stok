<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        return Supplier::all();
    }

    public function store(Request $r) {
        return Supplier::create($r->all());
    }

    public function show($id) {
        return Supplier::findOrFail($id);
    }

    public function update(Request $r, $id) {
        $data = Supplier::findOrFail($id);
        $data->update($r->all());
        return $data;
    }

    public function destroy($id) {
        Supplier::destroy($id);
        return response()->json(['message'=>'deleted']);
    }
}
