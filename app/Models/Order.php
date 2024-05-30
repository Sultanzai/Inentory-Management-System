<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'tbl_orders';
    protected $id = 'id';
    protected $fillable = ['O_Description', 'O_TOtal', 'O_Date', 'Customer_ID'] ;
    
    use HasFactory;
}