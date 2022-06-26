<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use lemonpatwari\bangladeshgeocode\Models\Division;
use lemonpatwari\bangladeshgeocode\Models\District;
use lemonpatwari\bangladeshgeocode\Models\Thana;
use lemonpatwari\bangladeshgeocode\Models\Union;

class LocationController extends Controller
{
    public function division()
    {
        $divisions = Division::all();
        return view('admin.modules.division.index', compact('divisions'));
    }

    public function districts()
    {
        $districts = District::with('division','thanas')->get();
        return view('admin.modules.districts.index', compact('districts'));
    }


}
