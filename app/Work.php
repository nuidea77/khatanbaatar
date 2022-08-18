<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Work extends Model
{
    use Translatable;
	protected $translatable = ['name', 'client', 'description'];
}
