<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;


class OkrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $response = $this->processOkr();
        $okrs = $response->original;
        return view('okr.index', compact('okrs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        //
    }


    private function processOkr(): JsonResponse
    {
        $user = new User();
        $okrs = $user->processOkr();
        return response()->json($okrs);
    }
}
