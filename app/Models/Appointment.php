<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
class Appointment extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $casts = [
        'date' => 'datetime',
        'time' =>'datetime',
    ];

    public function client(){
        return $this->belongsTo(client::class);
    }

    public function getStatusBadgeAttribute(){
        $badges = [
            'SCHEDULED'=>'primary',
            'CLOSED'=>'success',
            'open'=>'danger',
         ];
        return $badges[$this->status];
    }
}
