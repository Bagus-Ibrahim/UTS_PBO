<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'guru_id'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
