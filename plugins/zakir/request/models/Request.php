<?php namespace Zakir\Request\Models;

use Model;

/**
 * Model
 */
class Request extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zakir_request_items';
    protected $fillable = ['package', 'cus_name', 'cus_phone', 'address'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
