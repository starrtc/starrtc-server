<?php
// +------------------------------------------------------------------------+
// | class.upload.he_IL.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) VirtualFlavius 2008. All rights reserved.                |
// | Version       0.25                                                     |
// | Last modified 06/10/2008                                               |
// | Email         VirtualFlavius@gmail.com                                 |
// | Web           http://regularbasic.com                                  |
// +------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License version 2 as      |
// | published by the Free Software Foundation.                             |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License      |
// | along with this program; if not, write to the                          |
// |   Free Software Foundation, Inc., 59 Temple Place, Suite 330,          |
// |   Boston, MA 02111-1307 USA                                            |
// |                                                                        |
// | Please give credit on sites that use class.upload and submit changes   |
// | of the script so other people can use them as well.                    |
// | This script is free to use, don't abuse.                               |
// +------------------------------------------------------------------------+

/**
 * Class upload Hebrew translation
 *
 * @version    0.25
 * @author     VirtualFlavius
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright  RegularBasic.com
 * @package    cmf
 * @subpackage external
 */

    $translation = array();
    $translation = array();
    $translation['file_error']                  = 'שגיעה בקובץ. נסה שנית';
    $translation['local_file_missing']          = 'הקובץ אינו קיים';
    $translation['local_file_not_readable']     = 'לא ניתן לקרוא את הקובץ';
    $translation['uploaded_too_big_ini']        = 'שגיעה בהעלאת הקובץ. הקובץ חורג מהמקסימות המותר ב php.ini';
    $translation['uploaded_too_big_html']       = 'שגיעה בהעלאת הקובץ. הקובץ חורג מהמקסימום המותר בהגדרות הטופס';
    $translation['uploaded_partial']            = 'שגיעה בהעלאת קובץ. הקובץ נשמר חלקית בלבד על השרת';
    $translation['uploaded_missing']            = 'שגיעה בהעלאת קובץ. הקובץ לא נשמר';
    $translation['uploaded_unknown']            = 'שגיעה לא ידועה בהעלאת הקובץ';
    $translation['try_again']                   = 'שגיעה בהעלאת הקובץ. נסה שנית';
    $translation['file_too_big']                = 'הקובץ כבד מדי';
    $translation['no_mime']                     = 'לא ניתן לזהות את סוג הקובץ';
    $translation['incorrect_file']              = 'סוג הקובץ שגוי';
    $translation['image_too_wide']              = 'התמונה רחבה מדי';
    $translation['image_too_narrow']            = 'התמונה צרה מדי';
    $translation['image_too_high']              = 'התמונה גבוהה מדי';
    $translation['image_too_short']             = 'התמונה נמוכה מדי';
    $translation['ratio_too_high']              = 'התמונה רחבה מדי ביחס לגובה';
    $translation['ratio_too_low']               = 'התמונה גבוהה מדי ביחס לרוחב';
    $translation['too_many_pixels']             = 'רזולוצית התמונה גבוהה מדי';
    $translation['not_enough_pixels']           = 'רזולוצית התמונה נמוכה מדי';
    $translation['file_not_uploaded']           = 'הקובץ לא הועלה לשרת. לא ניתן להמשיך בעיבוד';
    $translation['already_exists']              = '%s קיים בשרת. שנה את שם הקובץ';
    $translation['temp_file_missing']           = 'לא ניתן ליצור קובץ זמני. העיבוד הופסק';
    $translation['source_missing']              = 'לא ניתן להעלות קובץ. העיבוד הופסק';
    $translation['destination_dir']             = 'לא ניתן ליצור את התיקיה. העיבוד הופסק';
    $translation['destination_dir_missing']     = 'התיקיה אינה קיימת על השרת. העיבוד הופסק';
    $translation['destination_path_not_dir']    = 'היעד אינו תיקיה. העיבוד הופסק';
    $translation['destination_dir_write']       = 'לא ניתן לכתוב לתיקית היעד. העיבוד הופסק';
    $translation['destination_path_write']      = 'לא ניתן לכתוב לתיקית היעד. העיבוד הופסק';
    $translation['temp_file']                   = 'לא ניתן ליצור תיקית עבודה זמנית. העיבוד הופסק';
    $translation['source_not_readable']         = 'לא ניתן לקרוא את קובץ המקור. העיבוד הופסק';
    $translation['no_create_support']           = 'הקובץ %s אינו תומך בתכונה זו. לא ניתן ליצור את הקובץ.';
    $translation['create_error']                = 'לא ניתן ליצור את התמונה %s מקובץ המקור';
    $translation['source_invalid']              = 'לא ניתן לקרוא את התמונה מהמקור. יתכן שזו לא תמונה';
    $translation['gd_missing']                  = 'לא ניתן לאתר את ספרית הפונקציות הגרפיות GD';
    $translation['watermark_no_create_support'] = 'הקובץ %s אינו תומך בתכונה זו, לא ניתן לקרוא את הווטרמרק';
    $translation['watermark_create_error']      = 'לא ניתן לקרוא את %s , לא ניתן ליצור את הווטרמרק';
    $translation['watermark_invalid']           = 'סוג קובץ לא מזוהה. לא ניתן לקרוא את הווטרמרק';
    $translation['file_create']                 = 'לא ניתן ליצור את  %s ';
    $translation['no_conversion_type']          = 'לא הוגדר סוג קובץ להמרה';
    $translation['copy_failed']                 = 'שגיעה בהעתקת הקובץ לשרת';
    $translation['reading_failed']              = 'שגיעה בקריאת הקובץ';
        
?>