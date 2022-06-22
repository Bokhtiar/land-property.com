<?php

namespace App\Models;

use App\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table='properties';
    protected $primaryKey='property_id';

    protected $fillable = [
        'property_id',
        'title',
        'body',
        'image',
        'category_id',
        'location',
        'phone',
        'price',
    ];

    public function scopeValidation($value, $request){
        return Validator::make($request, [
            'title' => 'string | required | min:3',
            'body' => 'required',
            'category_id' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'price' => 'required',
        ])->validate();

    }

    public function scopeImage($value, $request){
        $image=$request->file('image');
            if ($image){
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='property/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                    return $image_url;
                    }
                }
    }


    public function scopeFindId($q, $id)
    {
        return self::find($id);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
