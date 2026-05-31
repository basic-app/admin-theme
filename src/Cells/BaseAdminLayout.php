<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseAdminLayout extends Cell
{
    public $title = 'Admin';
    
    public $locale = 'en';
    
    public $slot;
    
    public $scripts;
    
    public $styles;

    public function mount(): void
    {
    }
}