<?php

/*
 * Adds an extra field for featured pages
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('page', 'module');
require_once cot_incfile('extrafields');

global $db_pages;

/* @var $db CotDB */

if (!$db->fieldExists($db_pages, 'page_featured'))
{
	cot_extrafield_add($db_pages, 'featured', 'checkbox', $R['input_checkbox'], '', '0', false, 'Text', 'Featured');
	
	$cache && $cache->db->remove('cot_extrafields', 'system');
}

?>
