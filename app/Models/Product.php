<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    /**
     * Get Total nilai
     *
     * @return string
     */
    public function getTotalNilaiAttribute(): string
    {
        return "Rp " .  (number_format($this->value_goods + $this->value_service , 2 , "." , ".")) ;
    }
    /**
     * Get User Relation
     * @return BelongsTo
     */
    public function username() : BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    /**
     * Format to Rupiah
     * @param $value
     * @return string
     */
    public function format_rupiah($value)
    {
        return "Rp " .  (number_format($value , 0 , "," , ".")) ;
    }
}
