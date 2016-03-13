<?php


class Order extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
        function product(){
            return $this->belongsTo('Product');
            
        }
        function user(){
            return $this->belongsTo('User');
            
        }
}
