<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $properties = Property::latest()->get(['property_id','title', 'status']);
            return view('admin.modules.property.index', compact('properties'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->latest()->Active()->get(['category_id', 'name']);
        return view('admin.modules.property.createOrUpdate', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Property::query()->Validation($request->all());
        if($validated){
            try{
                DB::beginTransaction();
                $image = Property::query()->Image($request);
                $property = Property::create([
                    'title' => $request->title,
                    'body' => $request->body,
                    'image' => $image,
                    'category_id' => $request->category_id,
                    'location' => $request->location,
                    'phone' => $request->phone,
                    'price' => $request->price,
                ]);

                if (!empty($property)) {
                    DB::commit();
                    return redirect()->route('admin.property.index')->with('success','Property Created successfully!');
                }
                throw new \Exception('Invalid About Information');
            }catch(\Exception $ex){
                return back()->withError($ex->getMessage());
                DB::rollBack();
            }
        }
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
            return view('admin.modules.property.show', compact('show'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $categories = Category::query()->Active()->latest()->get(['category_id', 'name']);
            $edit = Property::query()->FindId($id);
            return view('admin.modules.property.createOrUpdate', compact('edit', 'categories'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = Property::query()->Validation($request->all());
        if($validated){
            try{
                DB::beginTransaction();
                $property = Property::query()->FindId($id);
                $reqImage = $request->image;
                if($reqImage){
                    $image = Property::query()->Image($request);
                }else{
                    $bannerImage = $property->image;
                }
                $propertyU = $property->update([
                    'title' => $request->title,
                    'body' => $request->body,
                    'image' => $reqImage ? $image : $bannerImage,
                    'category_id' => $request->category_id,
                    'location' => $request->location,
                    'phone' => $request->phone,
                    'price' => $request->price,
                ]);

                if (!empty($propertyU)) {
                    DB::commit();
                    return redirect()->route('admin.property.index')->with('success','Property Created successfully!');
                }
                throw new \Exception('Invalid About Information');
            }catch(\Exception $ex){
                return back()->withError($ex->getMessage());
                DB::rollBack();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Property::query()->FindId($id)->delete();
            return redirect()->route('admin.property.index')->with('success','Property Deleted Successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function status($id)
    {
        try {
            $property = Property::query()->FindID($id); //self trait
            Property::query()->Status($property); // crud trait
            return redirect()->route('admin.property.index')->with('warning','Property Status Change successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
