<?php

namespace App\Models;
use App\Models\Todoitem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = ['name','description'];
    public function todoitem(){
       return $this->hasMany(Todoitem::class);
    }
}
