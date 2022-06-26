<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Prophecy\Prophet;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $divisions = DB::table('divisions')->get();
            $properties = Property::query()->Active()->get();
            return view('user.property.list', compact('properties', 'divisions'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function property_search(Request $request)
    {
        $divisions = DB::table('divisions')->get();
        $properties = Property::query()->Active()
                            ->where('division_name', $request->division_name)
                            ->where('category_id', $request->category_id)
                            ->get();
        return view('user.property.list', compact('properties', 'divisions'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $show = Property::query()->FindId($id);
            return view('user.property.show', compact('show'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function property_division($name)
    {
        $divisions = DB::table('divisions')->get();
        $properties = Property::query()->Active()->where('division_name', $name)->get();
        return view('user.property.list', compact('properties','divisions'));
    }


}
