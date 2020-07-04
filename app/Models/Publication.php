<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

/**
 * Class Publication
 * @property string $image_path
 * @property string $title
 * @property string $text
 * @property string $imageUrl
 *
 * @package App\Models
 */
class Publication extends Model
{
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'publication';

    protected $fillable = [
        'title',
        'text'
    ];

    /**
     * Тут можно выставлять значения по умолчанию для аттрибутов
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * url изображения
     * геттеры строяться так get[NameOfAttribute]Attribute
     *
     * @return string
     */
    public function getImageUrlAttribute(): string
    {
        if ($this->image_path) {
            $storagePath = Storage::url($this->image_path);
            return asset($storagePath);
        }

        return '';
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
