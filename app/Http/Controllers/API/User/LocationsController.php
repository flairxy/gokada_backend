<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\UserLocation;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function store(Request $request)
    {
        // skipped linking to user.

        $location = UserLocation::create($request->all());
        if ($location) {
            return response('success');
        } else {
            return response('failed', 500);
        }
    }

    public function index()
    {
        // Since authentication wasn't implemented and each search history isn't attached to a aparticular user I simply returned all the search history
        $locations = UserLocation::all();
        return response($locations);
    }
}
