<?php
/**
 * This file lets you extend IMP's menu with your own items.
 *
 * To add a new menu item, simply add a new entry to the $_menu array.
 *
 * REQUIRED attributes for a menu item are:
 *
 *  'url'   The URL value for the menu item.
 *  'text'  The text to accompany the menu item.
 *
 * These attributes are OPTIONAL:
 *
 *  'icon'       The filename of an icon to use for the menu item.
 *  'icon_path'  The path to the icon if it doesn't exist in the graphics/
 *               directory.
 *  'onclick'    Javascript to execute on the "onclick" event (standard view
                 only).
 *  'target'     The "target" of the link (e.g. '_top', '_blank').
 *
 * Here's an example entry:
 *
 *  $_menu[] = array(
 *      'url' =>        'http://www.example.com/',
 *      'text' =>       'Example, Inc.',
 *      'icon' =>       'example.png',
 *      'icon_path' =>  'http://www.example.com/images/',
 *      'target' =>     '_blank'
 *  );
 *
 * You can also add a "separator" (a spacer) between menu items.  To add a
 * separator, simply add a new string to the $_menu array set to the text
 * 'separator'.  It should look like this:
 *
 *  $_menu[] = 'separator';
 *
 * $Id: 5d3d82b659a8687820b7d02a5dda1650a69fd00b $
 */

$_menu = array();

/* Add your custom entries below this line. */
