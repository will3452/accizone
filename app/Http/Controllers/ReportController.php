<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Notifications\ReportHasBeenSubmitted;
use Laravel\Nova\Notifications\NovaNotification;

class ReportController extends Controller
{
    public function index () {
        $reports = Report::latest()->get(); 
        return view('report.index', compact('reports')); 
    }

    public function create () {
        return view('report.create'); 
    }

    public function store(Request $request) {


        $data = $request->validate([
            'descriptions' => 'required',
            'image' => ['image', 'max:5000'],
            'video' => ['file', 'max:5000'],
            'lat' => ['required'],
            'lng' => ['required'], 
            'type' => ['required']
        ]); 

        $data['status'] = Report::STATUS_FOR_REVIEW;  

        if ($request->image) {
            $pathStr = $data['image']->store('public'); 
            $pathArr = explode('/', $pathStr); 
            $data['image'] = end($pathArr); 
        }

        if ($request->video) {
            $pathStr = $data['video']->store('public'); 
            $pathArr = explode('/', $pathStr); 
            $data['video'] = end($pathArr); 
        }

        $data['user_id'] = auth()->id(); 

        Report::create($data);

        auth()->user()->notify(new ReportHasBeenSubmitted()); 

        $admin = User::find(1)->notify(NovaNotification::make()->message('New Report has been received')->type('info') ); 


        alert()->success('Report has been submitted!'); 

        return back(); 
    }
}
