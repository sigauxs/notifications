<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterCost extends Model
{
    use HasFactory;
    protected $table = "center_costs";
    protected $guarded = [''];
}
