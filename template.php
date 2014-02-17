<?php

/**
 * @file template.php
 */

function philoboot_preprocess_page(&$vars) {
// custom content type page template
  // Renders a new page template to the list of templates used if it exists
  if (isset($vars['node']->type)) {
// This code looks for any page--custom_content_type.tpl.php page
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}

