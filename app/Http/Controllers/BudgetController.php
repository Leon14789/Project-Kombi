<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::all();  

        return view('dashboard', compact('budgets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Budget::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),

        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
