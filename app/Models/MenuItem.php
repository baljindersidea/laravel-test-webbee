<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $parentColumn = 'parent_id';

    public function parent()
    {
        return $this->belongsTo(MenuItem::class,$this->parentColumn);
    }

    public function childs()
    {
        return $this->hasMany(MenuItem::class, $this->parentColumn);
    }

    public function children()
    {
        return $this->childs('children')->with('childs');
    }
}
