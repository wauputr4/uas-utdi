<?php namespace ppipm\pci\Models;

use Model;

/**
 * Model
 */
class Lapor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ppipm_pci_lapor';
    
    protected $guarded = [];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        //'violance_type' => 'Ppipm\Pci\Models\ViolanceType',
        'user' => 'RainLab\User\Models\User'
        
    ];
}
