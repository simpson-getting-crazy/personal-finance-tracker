<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * Boot the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $appends = ['color'];

    /**
     * Get the color attribute.
     *
     * @return string
     */
    public function getColorAttribute(): string
    {
        $type = $this->type ?? null;

        return match ($type) {
            'checking'   => 'text-bg-info',
            'savings'    => 'text-bg-success',
            'credit'     => 'text-bg-warning',
            'investment' => 'text-bg-indigo',
            default      => '',
        };
    }
}
