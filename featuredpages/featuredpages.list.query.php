<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.list.query
Order=10
Tags=page.edit.tpl:{PAGEEDIT_FORM_FEATURED_TITLE},{PAGEEDIT_FORM_FEATURED};page.add.tpl:{PAGEADD_FORM_FEATURED_TITLE},{PAGEADD_FORM_FEATURED}
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

$orderby = "page_featured DESC, " . $orderby;

?>
