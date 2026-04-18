<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTable('Booking');
    }

    public $timestamps = false;

    protected $fillable = [
        'memberid'
    ];
}