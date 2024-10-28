<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pedido extends Model
{
    protected $fillable = [
        'user_id', 'status', 'total',
    ];

    // Relacionamento: Pedido pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento: Um pedido tem vários produtos
    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'pedido_produto')
                    ->withPivot('quantidade')
                    ->withTimestamps();
    }
}
