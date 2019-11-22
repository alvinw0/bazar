<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodcuto extends Model
{
    protected $table='prodcutos';
    protected $primaryKey='id';
	public $timestamps=false;

	protected $fillable =[
		'descripcion',
		'precio_propuesto',
		'precio_vendido',
		'consignado',
        'clienta_vende',
        'area_id',
        'disponibles',
    ];

    public function foto()
    {
        $this->hasMany('App\Foto', 'producto_id', id)
        ->withDefault([
            'path' =>'Sin Foto'
        ]);
    }
}
