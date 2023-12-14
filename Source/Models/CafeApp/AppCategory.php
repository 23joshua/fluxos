<?php 

namespace Source\Models\CafeApp;

use Source\Core\Model;

/**
 * summary
 */
class AppCategory extends Model
{
    
    public function __construct()
    {
        parent::__construct("app_categories", ["id"], ["name", "type"]);
    }
}
