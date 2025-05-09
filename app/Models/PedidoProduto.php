<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    public function produto()
    {
        return $this->belongsTo('App\Produto', 'produto_id', 'id');
    }
}
