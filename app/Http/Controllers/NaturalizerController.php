<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NaturalizerController extends Controller
{
    public function index()
    {
		return view('Naturalizer.index');
    }

    public function getForm($formName) {
    	$html = view('Naturalizer.' . $formName);
    	return response()->json(['success' => true, 'html' => $html->render()]);
    }
}
