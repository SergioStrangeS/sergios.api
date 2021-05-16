<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return Country::all();
    }

    public function store(Request $request)
    {
        return Country::create($request->all());
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function update(Country $country, Request $request)
    {
        $country->update($request->all());
    }

    public function destroy(Country $country) {
        $country->delete();

        return "Пост удален!";
    }
}
