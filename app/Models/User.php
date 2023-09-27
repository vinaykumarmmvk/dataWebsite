<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
	use AuthenticableTrait;
	use HasFactory;
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'users';
    
    /**
     * Indicates primary key of the table
     *
     * @var bool
     */
    public $primaryKey = 'id';
    
    /**
     * Indicates if the model should be timestamped
     * 
     * default value is 'true'
     * 
     * If set 'true' then created_at and updated_at columns 
     * will be automatically managed by Eloquent
     * 
     * If created_at and updated_at columns are not in your table
     * then set the value to 'false'
     *
     * @var bool
     */
    public $timestamps = true;
    
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = array('name', 'email', 'password', 'created_at', 'updated_at');
    
    /**
     * The attributes that aren't mass assignable
     *
     * @var array
     */
    protected $guarded = array();
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');
}