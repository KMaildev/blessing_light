<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCv;
use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function store(StoreCv $request)
    {
        $cv = new Cv();
        $cv->name = $request->name;
        $cv->email = $request->email;
        $cv->age = $request->age;
        $cv->salary = $request->salary;
        $cv->website = $request->website;
        $cv->position = $request->position;
        $cv->details = $request->details;
        $cv->submit_date = date('Y-m-d');
        $cv->save();
        return redirect()->back()->with('success', 'Thank you for your contact. our team is ready to response all your queries..');
    }
}
