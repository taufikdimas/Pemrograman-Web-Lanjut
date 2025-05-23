<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;

    protected $table      = 'm_user';
    protected $primaryKey = 'user_id';

    //JS4: Pratikum 1
    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    // protected $fillable = ['level_id', 'username', 'nama']; error karena masih ada password pada User Controller

    public function level(): BelongsTo
    {
        // JS4: Praktikum 2.7
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

}
