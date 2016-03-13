<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
        
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
         * 
	 */
        
         public static $rules = [
            'username' =>'required|unique:users',
           
            'email' =>'required|email|unique:users',
            'name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'mobile' => 'required'
             
        ];
        public static $urules = [
            
            'name' => 'required'
        ];
        
        protected $fillable = array( 'username', 'password','name');
	protected $hidden = array('password', 'remember_token');
        function countPhaseIRefferals(){
            return User::where('parent1',$this->id)->count();
            
        }
        function countPhaseIIRefferals(){
            return User::where('parent2',$this->id)->count();
            
        }
        function orders(){
            return $this->hasMany('Order');
            
        }
}
