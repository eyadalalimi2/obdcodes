<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObdCodeTranslation extends Model
{
    protected $table = 'obd_code_translations';

    protected $fillable = [
        'obd_code_id',
        'language_code',
        'title',
        'description',
        'symptoms',
        'causes',
        'solutions',
        'diagnosis'
    ];

    public $timestamps = true;

    // علاقة بالـ OBD Code
    public function obdCode()
    {
        return $this->belongsTo(ObdCode::class, 'obd_code_id');
    }
    
}
