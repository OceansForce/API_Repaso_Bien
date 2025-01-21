<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class erabiltzaileak_moduluak extends Model
{
    /** @use HasFactory<\Database\Factories\ErabiltzaileakModuluakFactory> */
    use HasFactory;

    protected $table = "erabiltzaileak";

    protected $primaryKey= ['erabiltzaile_id','modulu_id'];

    protected $fillable = [
        'erabiltzaile_id',
        'modulu_id',
    ];
       
}
