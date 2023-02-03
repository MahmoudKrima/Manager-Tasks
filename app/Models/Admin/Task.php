<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $fillable  = ['description' , 'status_id'];

    public function users()
    {
        return $this->belongsToMany(User::class,'employee_tasks','task_id','user_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id','id');
    }

    public function empTasks()
    {
        return $this->belongsToMany(EmployeeTasks::class,'employee_tasks','task_id','user_id');
    }
}
