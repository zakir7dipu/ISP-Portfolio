<?php namespace Zakir\Feature\Models;

use Model;

/**
 * Model
 */
class Feature extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zakir_feature_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'icon' => 'System\Models\File',
        'feature_image' => 'System\Models\File'
    ];
}
