<?php

namespace App\Http\Controllers\Person;

use App\Http\Resources\Person\PersonResource;
use App\Models\Person;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $people = Person::all();

        return PersonResource::collection($people);
    }
}
