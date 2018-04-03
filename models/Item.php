<?php namespace Hessel\Behandelingen\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hessel_behandelingen_items';

     /**
     * @var array Relations
     */
     public $belongsTo = [
        'category' => 'Hessel\Behandelingen\Models\Category'
    ];
}
