<?php
/**
* Plugin Name: Gravatar Alt Tags
* Plugin URI:  https://github.com/RenderbitTechnologies/Gravatar-Alt-Tags
* Description: WordPress plugin to add alt & title tags to Gravatar images
* Version:     1.0.0
* Author:      Renderbit Technologies
* Author URI:  https://renderbit.com
* License:     GPLv2
* Text Domain: gravatar-alt-tags
*
* @link    https://github.com/RenderbitTechnologies/Gravatar-Alt-Tags
*
* @package Gravatar_Alt_Tags
* @version 1.0.0
*
*/

/**
 * Gravatar Alt Fix
 * https://wphelper.site/fix-missing-gravatar-alt-tag-value/
 */
function gravatar_alt($text) {
    $alt = get_the_author_meta( 'display_name' );
    $text = str_replace('alt=\'\'', 'alt=\'Avatar for '.$alt.'\' title=\'Gravatar for '.$alt.'\'',$text);
    return $text;
}

add_filter('get_avatar','gravatar_alt');
