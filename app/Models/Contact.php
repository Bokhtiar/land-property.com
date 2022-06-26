<?php

namespace App\Models;

use App\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Contact extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table='contacts';
    protected $primaryKey='contact_id';

    protected $fillable = [
        'email',
        'name',
        'body'
    ];

    public function scopeValidation($value, $request){
        return Validator::make($request, [
            'name' => 'string | required',
            'body' => 'string | required',
            'email' => 'string | required',
        ])->validate();

    }


    public function scopeFindId($q, $id)
    {
        return self::find($id);
    }
}
