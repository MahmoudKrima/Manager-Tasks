<?php

namespace App\Models\Admin;

use App\Models\Admin\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeTasks extends Model
{
    use HasFactory;
    protected $table = "employee_tasks";
    protected $fillable = ['task_id','user_id'];

}
