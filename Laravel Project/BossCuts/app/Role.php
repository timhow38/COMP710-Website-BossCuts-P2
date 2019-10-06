<?php
/**
 *Code Ref:
 *HTTP Requests | https://laravel.com/docs/5.8/requests
 *Eloquent: Mutators | https://laravel.com/docs/5.7/eloquent-mutators 
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class Role extends Model
{
    protected $fillable = ['title'];
    
    
}
