<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use SoftDeletes;
    
    protected $dateFormat = 'U';
    
    protected $fillable = [
        'id', 'nome', 'descricao', 'tipo', 'qtd_cliques', 'user_id'
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
