<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Category;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activitie::all();
        return view('activities.index', compact('activities'));
    }

    public function show($id)
    {
        $category_id = $id;
        $activities = Activitie::where('categorie_id', $id)->get();
        return view('activities.show', compact('activities', 'category_id'));
    }
}
