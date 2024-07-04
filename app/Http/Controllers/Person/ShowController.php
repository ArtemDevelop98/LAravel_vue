<?php

namespace App\Http\Controllers\Person;

use App\Http\Resources\Person\PersonResource;
use App\Models\Person;
use Illuminate\Routing\Controller;

class ShowController extends Controller
{
    public function __invoke(Person $person)
    {

        return new PersonResource($person);
    }
}
