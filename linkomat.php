<?php
/*  Copyright 2011  Xpoints  (email : lukasz@xpoints.pl)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/*
Plugin Name: Linkomat
Plugin URI: http://xpoints.pl/linkomat
Description: Instaluje pasek linkomat
Author: lukasz@xpoints.pl
Version: 1.0.0
Author URI: http://xpoints.pl
License: GPLv2
*/



function wp_head_add_linkomat_code() {
  echo '<script type="text/javascript">(function(){var s=document.createElement(\'script\');s.src=\'http://linkomat.pl/linkomat.js\';s.setAttribute(\'async\',\'true\');document.documentElement.firstChild.appendChild(s)})();</script>';
}

add_action('wp_head', 'wp_head_add_linkomat_code');

