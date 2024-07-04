<?php

namespace App\Http\Controllers\Person;

use App\Models\Person;
use Illuminate\Routing\Controller;

class DeleteController extends Controller
{
    public function __invoke(Person $person)
    {
        $person->delete();

        return $person;
    }
}
