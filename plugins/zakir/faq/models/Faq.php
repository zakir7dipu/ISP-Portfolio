<?php namespace Zakir\Faq\Models;

use Model;

/**
 * Model
 */
class Faq extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zakir_faq_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
