<?php namespace Zakir\Service\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zakir_service_item';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'icon' => 'System\Models\File',
        'service_image' => 'System\Models\File'
    ];
}
