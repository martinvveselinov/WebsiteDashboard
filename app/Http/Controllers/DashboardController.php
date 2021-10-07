<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Services\DashboardService;
class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = DashboardService::getDashboard();
        return view('index', compact('dashboard'));
    }

    // public function create()
    // {
    //     return view('create');
    // }

    // public function store(Request $request)
    // {
    //     $storeData = $request->validate([
    //         'number' => 'required|numeric',
    //         'title' => 'max:255',
    //         'url' => 'max:255',
    //         'color' => 'max:255',
    //     ]);
    //     $dashboard = Dashboard::create($storeData);

    //     return redirect('/dashboard')->with('completed', 'Dashboard has been saved!');
    // }

    // public function show($id)
    // {
        
    // }

    public function edit($id)
    {
        $dashboard = DashboardService::getEditForm($id);
        return view('edit', compact('dashboard'));
    }

    public function update(Request $request, $id)
    {
        DashboardService::updateRow($request, $id);
        return redirect('/dashboard')->with('completed', 'Dashboard has been updated');
    }

    public function destroy($id)
    {
        $dashboard = DashboardService::deleteRow($id);
        return redirect('/dashboard')->with('completed', 'Dashboard has been deleted');
    }
}