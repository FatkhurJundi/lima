<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sprint extends Model
{
    use SoftDeletes;

    protected $table = 'sprints';

    protected $fillable = ['nama_sprint', 'desc_sprint', 'tgl_mulai', 'tgl_selesai'];

    public function tasks()
    {
    	return $this->hasMany('App\Task','sprint_id');
    }
}
