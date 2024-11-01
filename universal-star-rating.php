<?php

/**
 * Universal Star Rating
 * 
 * @author              Chasil
 * @author              Mike Wigge info@universal-star-rating.de
 * @copyright           2013 - 2021  Mike Wigge  (email : info@universal-star-rating.de)
 * @license             GPL3
 * 
 * @wordpress-pluigin
 * Plugin Name:         Universal Star Rating
 * Plugin URI:          http://universal-star-rating.de
 * Description:         USR provides shortcodes to give the author the opportunity to add ratings for desired products and services with the aid of a star rating system.
 * Version:             2.1.0
 * Requires at least:   3.0.1
 * Requires PHP:        7.2
 * Author:              Chasil
 * Author URI:          http://cizero.de
 * Text Domain:         universal-star-rating
 * Domain Path:         /languages
 * License:             GPL3
 * License URI:         https://www.gnu.org/licenses/gpl-3.0.txt
 */


/*  Copyright 2013 - 2021  Mike Wigge  (email : info@universal-star-rating.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 3, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/* ################################################################################ */
/*                                    VARIABLES                                     */
/* ################################################################################ */
$usrBaseDir = plugin_dir_path(__FILE__);
$usrBaseUrl = plugin_dir_url(__FILE__);

/* ################################################################################ */
/*                                     INCLUDES                                     */
/* ################################################################################ */

/* -------------------------------------------------------------------------------- */
/* ----------------------------------- CLASSES ------------------------------------ */
/* -------------------------------------------------------------------------------- */
$usrClassesDir = $usrBaseDir . 'includes/classes/';
require_once $usrClassesDir . 'class.usr.php';
require_once $usrClassesDir . 'class.singleRating.php';
require_once $usrClassesDir . 'class.multiRating.php';
$usr = new USR;

/* -------------------------------------------------------------------------------- */
/* ----------------------------------- FUNCTIONS ---------------------------------- */
/* -------------------------------------------------------------------------------- */
$usrFunctionsDir = $usrBaseDir . 'includes/functions/';
require_once $usrFunctionsDir . 'func.addCSS.php';                 //Add css files
require_once $usrFunctionsDir . 'func.initUsrAdmin.php';           //Show settings page in menu
require_once $usrFunctionsDir . 'func.loadTextDomain.php';         //Loads USR text domain
require_once $usrFunctionsDir . 'func.printInfoMessage.php';       //Function to print info messages
require_once $usrFunctionsDir . 'func.showUsrSettingsPage.php';    //Display settings page
require_once $usrFunctionsDir . 'func.getImageString.php';         //Functionality to get the image string
require_once $usrFunctionsDir . 'func.insertSingleRating.php';     //Functionality to add a single rating
require_once $usrFunctionsDir . 'func.insertMultiRating.php';      //Functionality to add a multi rating