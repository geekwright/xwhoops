<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

$modversion['dirname']     = basename(__DIR__);
$modversion['name']        = _MI_XWHOOPS_NAME;
$modversion['version']     = '0.2';
$modversion['description'] = _MI_XWHOOPS_DSC;
$modversion['author']      = 'Richard Griffith';
$modversion['nickname']    = 'geekwright';
$modversion['credits']     = 'The XOOPS Project';
$modversion['help']        = 'page=help';
$modversion['license']     = 'GNU GPL 2 or later';
$modversion['license_url'] = 'https://www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']    = 0;
$modversion['image']       = 'icons/logo.png';

$modversion['hasMain']     = false;

//$modversion['onInstall'] = "include/onInstall.php";

// Admin things
$modversion['hasAdmin']    = true;
$modversion['system_menu'] = true;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

// Manage extension
$modversion['extension'] = true;
$modversion['extension_module'][] = 'system';

// About stuff
$modversion['module_status'] = 'Alpha';
$modversion['status'] = 'Alpha';
$modversion['release_date'] = '02/19/2019';

$modversion['min_xoops'] = '2.6.0';
$modversion['min_php'] = '7.1.0';
