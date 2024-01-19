<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animacao extends Model
{
    use SoftDeletes;
    
    protected $table = 'animacoes';

    protected $dateFormat = 'U';
    
    protected $fillable = [
        'id', 'url', 'descricao', 'grupo', 'album_id', 'qtd_cliques', 'user_id'
    ];

    protected $hidden = [
        'deleted_at', 'user_id'
    ];

    ///////////////////////
    //decorators
    const decorators = [
        'user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
