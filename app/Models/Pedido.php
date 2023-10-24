<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;

class Pedido extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'pedido';
    protected $fillable = [
        'filename',
        'path'
    ];

    public function produtos(): HasMany
    {
        return $this->HasMany(Produto::class, 'id', 'produto_id');
    }
}
