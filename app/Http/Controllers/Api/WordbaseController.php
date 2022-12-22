<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\ImportWordbase;
use App\Services\Anagram\AnagramFinderInterface;

class WordbaseController extends Controller
{


    public function import()
    {
        ImportWordbase::dispatch();

        return ['message' => 'Importing wordbase job has been started...'];
    }


}
