<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Avis;
use App\Models\Service;
use Illuminate\Http\Request;

class G_pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apropos = Apropos::all();
        $avis = Avis::all();
        $services = Service::all();
        return view('dashbord',["avis" => $avis, "apropos" => $apropos, "services" => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $apropos = Apropos::all();
    //     $avis = Avis::all();
    //     $services = Service::all();
    //     return view('admin.dashbord', ["avis" => $avis, "apropos" => $apropos, "services" => $services]);

    // }

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
