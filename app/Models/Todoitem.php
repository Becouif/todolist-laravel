<?php

namespace App\Models;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todoitem extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','image','collection_id'];
    public function collection(){
        return $this->belongsTo(Collection::class,'collection_id', 'id');
    }
}
