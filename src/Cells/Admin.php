<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminTheme\Cells;

use BasicApp\Bootstrap5\Cells\Bootstrap5;
use BasicApp\AdminTheme\Interfaces\AdminThemeInterface;

class Admin extends Bootstrap5 implements AdminThemeInterface
{
	public function authLayout(array $params = []) : string
	{
        return view_cell('AdminAuthLayout', $params);
    }
}