<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

  class osC_Boxes_languages extends osC_Modules {
    var $_title,
        $_code = 'languages',
        $_author_name = 'osCommerce',
        $_author_www = 'http://www.oscommerce.com',
        $_group = 'boxes';

    function osC_Boxes_languages() {
      global $osC_Language;

      $this->_title = $osC_Language->get('box_languages_heading');
    }

    function initialize() {
      global $osC_Language, $request_type;

      $this->_content = '';

      foreach ($osC_Language->getAll() as $value) {
        $this->_content .= ' ' . osc_link_object(osc_href_link(basename($_SERVER['SCRIPT_FILENAME']), osc_get_all_get_params(array('language', 'currency')) . '&language=' . $value['code'], 'AUTO'), $osC_Language->showImage($value['code'])) . ' ';
      }
    }
  }
?>
