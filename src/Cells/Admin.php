<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminTheme\Cells;

//use BasicApp\Site\Interfaces\SiteThemeCell;
//use BasicApp\Theme\Cells\BaseTheme;

class Admin /*extends BaseTheme implements SiteThemeCell*/
{
	public function authLayout(array $params = []) : string
	{
        return view_cell('AdminAuthLayout', $params);
    }
}