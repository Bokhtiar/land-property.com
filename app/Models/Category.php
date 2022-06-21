<?php

namespace App\Models;

use App\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Category extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table='categories';
    protected $primaryKey='category_id';

    protected $fillable = [
        'category_id',
        'name'
    ];

    public function scopeValidation($value, $request){
        return Validator::make($request, [
            'name' => 'string | required | max:15 | min:3',
        ])->validate();

    }


    public function scopeFindId($q, $id)
    {
        return self::find($id);
    }
}
