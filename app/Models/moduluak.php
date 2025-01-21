<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\erabiltzaileak;

class moduluak extends Model
{
    /** @use HasFactory<\Database\Factories\ModuluakFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $table='moduluak';
    protected $primaryKey='id';

    protected $fillable=[
        'id',
        'izena',
        'gela',
    ];

    // Relación muchos a muchos con Module
    public function erabiltzaileak(): BelongsToMany
    {
        return $this->belongsToMany(erabiltzaileak::class,'erabiltzaileak_moduluak', 'modulu_id', 'erabiltzaile_id');
    }
}
