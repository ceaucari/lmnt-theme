<?php
/**
 * @file
 * template.php
 */

/**
 * Override or insert variables into the page template for HTML output.
 * 
 * For taxonomy page, insert vocabulary id class.
 * Define the variable to activate responsive behaivor.
 */
function lmnt_preprocess_html(&$variables) {
  if (theme_get_setting('is_one') && drupal_is_front_page()) {
    $variables['classes_array'][] = 'one-page';
  }
  if (theme_get_setting('toggle_responsive')) {
    $variables['mobile_friendly'] = TRUE;
  }
  else {
    $variables['mobile_friendly'] = FALSE;
    drupal_add_css(drupal_get_path('theme', 'lmnt') . '/css/no-responsive.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
  }
}

/**
 * Override or insert variables into the page template for page output.
 *
 * Sets the widths of the main columns of the page.
 */
function lmnt_preprocess_page(&$variables) {
  $variables['content_width'] = _lmnt_content_width();
  $variables['sidebar_first_width'] = 'col-md-' . theme_get_setting('sidebar_first_width');
  $variables['sidebar_second_width'] = 'col-md-' . theme_get_setting('sidebar_second_width');
  if (theme_get_setting('is_one') && drupal_is_front_page()) {
    $variables['theme_hook_suggestions'][] = 'page__one';
  }
  if (theme_get_setting('collapse')) {
    $variables['collapse'] = 'collapse navbar-collapse';
  }
  else {
    $variables['collapse'] = 'not-collapse';
  }
  if (!theme_get_setting('print_content') && drupal_is_front_page()) {
    $variables['print_content'] = FALSE;
  }
  else {
    $variables['print_content'] = TRUE;
  }
}

/**
 * Returns with of content region.
 *
 * Calculates content width based on first and second column width parameters.
 */
function _lmnt_content_width() {
  $sidebar_first_width = (_lmnt_block_list('sidebar_first')) ? theme_get_setting('sidebar_first_width') : 0;
  $sidebar_second_width = (_lmnt_block_list('sidebar_second')) ? theme_get_setting('sidebar_second_width') : 0;
  $content_width = 12 - $sidebar_first_width - $sidebar_second_width;
  $content_width = "col-md-" . $content_width;
  return $content_width;
}

/**
 * Returns a list of blocks.
 *
 * Uses Drupal block interface and appends any blocks 
 * assigned by the Context module.
 * Taken from Fusion Core.
 */
function _lmnt_block_list($region) {
  $drupal_list = array();
  if (module_exists('block')) {
    $drupal_list = block_list($region);
  }
  if (module_exists('context') && $context = context_get_plugin('reaction', 'block')) {
    $context_list = $context->block_list($region);
    $drupal_list = array_merge($context_list, $drupal_list);
  }
  return $drupal_list;
}

function lmnt_preprocess_node(&$vars) {
  $vars['submitted'] = t('By !username on !datetime', array('!username' => $vars['name'], '!datetime' => format_date($vars['node']->created, 'custom', 'F j, Y')));
}