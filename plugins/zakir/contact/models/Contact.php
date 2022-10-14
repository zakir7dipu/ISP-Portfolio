<?php namespace Zakir\Contact\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zakir_contact_messages';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
