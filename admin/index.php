<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

use Xmf\Module\Admin;

/**
 * @copyright 2019 XOOPS Project (https://xoops.org)
 * @license   GNU GPL 2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author    Richard Griffith <richard@geekwright.com>
 */


require __DIR__ . '/admin_header.php';

$moduleAdmin = Admin::getInstance();
$moduleAdmin->displayNavigation('index.php');
$moduleAdmin->displayIndex();

require __DIR__ . '/admin_footer.php';
