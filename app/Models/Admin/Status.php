<?php

namespace App\Models\Admin;

use App\Models\Admin\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    public function tasks()
    {
        return $this->hasMany(Task::class,'status_id','id');
    }
}
