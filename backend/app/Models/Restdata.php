<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $table = 'restdata';
    protected $guarded = array('id');

    public static $rules = array(
        'message' => 'required',
        'url' => 'required',
    );

    public function getData()
    {
        return $this->id . ':' . $this->message . '(' . $this->url . ')' ;
    }
}
