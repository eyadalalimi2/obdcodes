<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObdCode extends Model
{
    protected $fillable = [
        'code',
        'title',
        'description',
        'symptoms',
        'causes',
        'category',
        'diagnosis',
        'severity',
        'solutions',
        'status',
        'source_url',
        'lang',
        'image',
        // إذا أردت التحكم بــ created_at/updated_at أضفها هنا
    ];
    public function translations()
    {
        return $this->hasMany(ObdCodeTranslation::class);
    }
}