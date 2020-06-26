<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternshipLogbook extends Model
{
    protected $fillable = ['internship_id','date','activity'];

    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internship_id', 'id');
    }

    static $validation_rules = [
        'date' => 'required|date|unique:internship_logbooks',
        'activity' => 'required'
    ];

    static $validation_message = [
        'date.unique' => 'Hanya Bisa Menginputkan Satu Logbook dalam Satu Hari',
        'date.required' => 'Field Date Tidak Boleh Kosong',
        'activity.required' => 'Field Activity Tidak Boleh Kosong'
    ];

}
