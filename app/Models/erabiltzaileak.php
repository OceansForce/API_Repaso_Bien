<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;//Token ruta
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\moduluak;

class erabiltzaileak extends Model
{
    /** @use HasFactory<\Database\Factories\ErabiltzaileakFactory> */
    use HasFactory;

    use HasApiTokens;// Token

    protected $table = "erabiltzaileak";

    protected $primaryKey= "id";

    protected $fillable = [
        'izena',
        'abizena',
        'email',
        'pasahitza',
        'remember_token',
        'jaiotze_data',
        'created_at',
        'updated_at',
        'Irakaslea',
    ];

    // Relación muchos a muchos con User
    public function moduluak(): BelongsToMany
    {
        return $this->belongsToMany(moduluak::class,'erabiltzaileak_moduluak', 'erabiltzaile_id', 'modulu_id');
    }
       
}
