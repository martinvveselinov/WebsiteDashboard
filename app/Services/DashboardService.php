<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardService
{
    public static function getDashboard(){
        $dashboard = Dashboard::all();
        return $dashboard;
    }
    public static function updateRow(Request $request, $id){
        $updateData = $request->validate([
            'number' => 'numeric',
            'title' => 'required|max:255',
            'url' => 'required|max:255',
            'color' => 'required|max:255',
        ]);
        Dashboard::whereId($id)->update($updateData);
    }
    public static function getEditForm($id){
        $dashboard = Dashboard::findOrFail($id);
        return $dashboard;
    }
    public static function deleteRow($id){
        $dashboard = Dashboard::findOrFail($id);
        Dashboard::whereId($id)->update(array("title" => "", "url" =>  "", "color" => "#000000"));
        return $dashboard;
    }
}