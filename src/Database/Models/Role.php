<?php
namespace AvoRed\Framework\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Role extends Model
{
    /**
     * Admin Role name Constatnt
     */
    const ADMIN = 'Administrator';
    
     /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'description'];
}