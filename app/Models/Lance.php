<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lance extends Model
{
    use HasFactory;

    protected $table = 'Lance';

    public function pessoa()
    {

        return $this->hasOne(Pessoa::class, 'id','Pessoa_Lance');
    }

    public function produto()
    {
        return $this->hasOne(Produtos::class, 'id', 'Produto_Lance');
    }
}
