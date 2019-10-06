<?php
/**
 *Code Ref:
 *HTTP Requests | https://laravel.com/docs/5.8/requests
 *Eloquent: Mutators | https://laravel.com/docs/5.7/eloquent-mutators 
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'price'];
	public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }
}
