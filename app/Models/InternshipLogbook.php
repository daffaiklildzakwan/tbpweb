<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternshipLogbook extends Model
{
    protected $fillable = ['internship_id','date','activity','notes'];

    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internship_id', 'id');
    }

    static $validation_rules = [
        'date' => 'required|date',
        'activity' => 'required',
        'notes' => 'required',
    ];

}
