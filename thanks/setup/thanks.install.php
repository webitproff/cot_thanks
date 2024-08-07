<?php
/**
 * Thanks installation handler
 *
 * @package thanks
 * @version 2.00b
 * @author Trustmaster & Dmitri Beliavski
 * @copyright Copyright (c) Vladimir Sibirov, Dmitri Beliavski 2011-2023
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

$db_users = Cot::$db->users;
Cot::$db->query("ALTER TABLE $db_users ADD COLUMN `user_thanks` INT NOT NULL DEFAULT 0");
