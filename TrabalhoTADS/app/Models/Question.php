<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'enunciado',
        'respA',
        'respB',
        'respC',
        'respD',
        'respE',
        'respCorreta',
        'valorTotalQuestao',
        'test_id'
    ];
    function test(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Test::class);
    }

}
