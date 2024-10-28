<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Carrinho extends Model
{
    protected $table = 'carrinhos';

    // Definir os atributos que podem ser atribuídos em massa
    protected $fillable = [
        'produto_id',
        'quantidade',
        'user_id', // Relaciona o carrinho ao usuário
    ];

    // Relação: Um carrinho pertence a um produto
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
