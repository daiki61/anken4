<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uuidreservation extends Model
{
    use HasFactory;
    protected $table = 'uuidreservations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'reservation_id';
    protected $keyType = 'string';
   
    protected $fillable = ['uuid', 'shop_id', 'shopname', 'reservation_id',  'reservationDate', 'reservationTime', 'reservationNum',];
    protected $guarded = ['reservation_id', 'uuid',];
    //public static $rules = array(
        //'reservationDate' => 'required|date',
        //'reservationTime' => 'required',
        //'reservationNum' => 'required|integer|min:1',
        //'user_id' => 'required',
        //'shop_id' => 'required',
    //);


    public function getReservation(){
        return '予約'.
        $this->reservation_id . $this->reservationDate . $this->reservationTime . $this->reservationNum;
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function useru()
    {
        return $this->belongsTo(Useru::class, 'uuid', 'uuid');
    }
}
