<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaliMuridController extends Controller
{
    public function getAllWaliMurid()
    {
        return view('cms.page.WaliMurid');
    }
}
