<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tarefa;


class Categoria extends Model
{
    protected $fillable = ['nome', 'cor', 'descricao'];

    public function tarefas(){
        return $this->hasMany(Tarefa::class);
    }
}
