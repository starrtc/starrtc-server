<?php
// +------------------------------------------------------------------------+
// | class.upload.et_EE.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) -lohe- 2008. All rights reserved.                        |
// | Version       0.25                                                     |
// | Last modified 01/13/2008                                               |
// | Email         drache@hot.ee                                            |
// | Web           http://lohe.pri.ee/                                      |
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
 * Class upload Estonian translation
 *
 * @version   0.25
 * @author    -lohe- (drache@hot.ee)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright -lohe-
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Viga. Palun proovi uuesti.';
    $translation['local_file_missing']          = 'Faili ei leitud.';
    $translation['local_file_not_readable']     = 'Laaditav fail on vigane.';
    $translation['uploaded_too_big_ini']        = 'Üleslaadimise viga (laetav fail ületab «upload_max_filesize» maksimaalse suuruse «php.ini» failis).';
    $translation['uploaded_too_big_html']       = 'Üleslaadimise viga (laetav fail ületab määratud «MAX_FILE_SIZE» maksimaalse suuruse HTML formis).';
    $translation['uploaded_partial']            = 'Üleslaadimise viga (laetav fail oli ainult osaliselt laetud).';
    $translation['uploaded_missing']            = 'Üleslaadimise viga (faili ei laetud üles).';
    $translation['uploaded_unknown']            = 'Üleslaadimise viga (tundmatu vea kood).';
    $translation['try_again']                   = 'Üleslaadimise viga. Palun proovi uuesti.';
    $translation['file_too_big']                = 'Fail on liiga suur.';
    $translation['no_mime']                     = 'MIME tüüpi ei tunne ära.';
    $translation['incorrect_file']              = 'Vale failitüüp.';
    $translation['image_too_wide']              = 'Pilt liiga lai.';
    $translation['image_too_narrow']            = 'Pilt liiga kitsas.';
    $translation['image_too_high']              = 'Pilt liiga kõrge.';
    $translation['image_too_short']             = 'Pilt liiga lühike.';
    $translation['ratio_too_high']              = 'Pildi koefitsent liiga kõrge (pilt liiga lai).';
    $translation['ratio_too_low']               = 'Pildi koefitsent liiga madal (pilt liiga kõrge).';
    $translation['too_many_pixels']             = 'Pildil on liiga palju piksleid.';
    $translation['not_enough_pixels']           = 'Pildil pole poosavalt piksleid.';
    $translation['file_not_uploaded']           = 'Faili ei laetud. Ei suuda protsessi jätkata.';
    $translation['already_exists']              = '«%s» on juba olemas. Palun muuda faili nime.';
    $translation['temp_file_missing']           = 'Temp fail on vigane. Ei saa protsessi jätkata.';
    $translation['source_missing']              = 'Laetav fail on vigane. Ei saa protsessi jätkata.';
    $translation['destination_dir']             = 'Sihtkataloogi ei saa luua. Ei saa protsessi jätkata.';
    $translation['destination_dir_missing']     = 'Sihtkataloogi ei eksisteeri. Ei saa protsessi jätkata.';
    $translation['destination_path_not_dir']    = 'Sihtkataloog ei ole kataloog. Ei saa protsessi jätkata.';
    $translation['destination_dir_write']       = 'Sihtkataloogi ei saa teha kirjutatavaks. Ei saa protsessi jätkata.';
    $translation['destination_path_write']      = 'Sihtkataloog ei ole kirjutamise õigusega. Ei saa protsessi jätkata.';
    $translation['temp_file']                   = 'Ei saa luua ajutist faili. Ei saa protsessi jätkata.';
    $translation['source_not_readable']         = 'Allikas ei ole loetav. Ei saa protsessi jätkata.';
    $translation['no_create_support']           = 'Ei looda %s toetust.';
    $translation['create_error']                = 'Viga %s pildi loomisel allikast.';
    $translation['source_invalid']              = 'Ei saa lugeda pildi allikat. Ei ole pilt?';
    $translation['gd_missing']                  = 'GD-d ei leitud.';
    $translation['watermark_no_create_support'] = 'Ei looda %s toetust, ei saa lugeda vesimärki.';
    $translation['watermark_create_error']      = 'Puudub %s lugemistoetus, ei saa lugeda vesimärki.';
    $translation['watermark_invalid']           = 'Tundmatu pildi formaat, ei saa lugeda vesimärki.';
    $translation['file_create']                 = 'Puudub %s loomise toetus.';
    $translation['no_conversion_type']          = 'Konvertimise tüüp puudub.';
    $translation['copy_failed']                 = 'Viga faili kopeerimisel serverisse. copy() katkestati.';
    $translation['reading_failed']              = 'Viga faili lugemisel.';
    
?>