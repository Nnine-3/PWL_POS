<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_level';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'level_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'level_kode',
        'level_nama',
    ];
    
    public function users()
    {
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}