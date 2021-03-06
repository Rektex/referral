<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWhitelist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function saveForm(CreateWhitelist $request)
    {
        $user = $request->user();
        $user->formData()->create($request->all());
        return redirect('/?ref=' . $user->affiliate_id);
    }
}
