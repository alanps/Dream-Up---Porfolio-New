<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagem extends Model
{
    use SoftDeletes;
    
    protected $table = 'imagens';

    protected $dateFormat = 'U';
    
    protected $fillable = [
        'id', 'url', 'descricao', 'grupo', 'album_id', 'qtd_cliques', 'user_id'
    ];

    protected $hidden = [
        'album_id', 'deleted_at', 'user_id'
    ];

    ///////////////////////
    //decorators
    const decorators = [
        'album', 'user'
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
