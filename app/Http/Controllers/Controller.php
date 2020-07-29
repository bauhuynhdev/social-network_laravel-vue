<?php

namespace App\Http\Controllers;

use App\Contracts\ResponseTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ResponseTrait;

    public function getUserId()
    {
        if (auth()->check()) {
            return auth()->user()->id;
        }

        return null;
    }
}
