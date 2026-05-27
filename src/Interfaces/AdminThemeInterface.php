<?php

namespace BasicApp\AdminTheme\Interfaces;

interface AdminThemeInterface
{
    public function authLayout(array $params = []) : string;
}