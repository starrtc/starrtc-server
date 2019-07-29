<?php
// +------------------------------------------------------------------------+
// | class.upload.da_DK.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Lars Krogsgård Hansen 2012. All rights reserved.         |
// | Version       0.25                                                     |
// | Last modified 15/05/2012                                               |
// | Email         l@rshansen.dk                                            |
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
 * Class upload 0.28 translation
 *
 * @version   0.28
 * @author    Lars Krogsgård Hansen (l@rshansen.dk)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2012
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Fil fejl. Prøv venligst igen.';
    $translation['local_file_missing']          = 'Lokal fil eksisterer ikke';
    $translation['local_file_not_readable']     = 'Lokal fil er ikke læselig.';
    $translation['uploaded_too_big_ini']        = 'Fil upload fejl (Den uploadet fil fylder mere end upload_max_filesize direktivet i php.ini).';
    $translation['uploaded_too_big_html']       = 'Fil upload fejl (Den uploadet fil fyldere mere end MAX_FILE_SIZE direktivet som var specificeret i din html form).';
    $translation['uploaded_partial']            = 'Fil upload fejl (Den uploadet fil blev kun delvist uploadet).';
    $translation['uploaded_missing']            = 'Fil upload fejl (Ingen filer blev uploadet).';
    $translation['uploaded_no_tmp_dir']         = 'Fil upload fejl (Mangler midlertidig mappe).';
    $translation['uploaded_cant_write']         = 'Fil upload fejl (Fejl ved skrivning til harddisk).';
    $translation['uploaded_err_extension']      = 'Fil upload fejl (Fil upload stoppet af filtypenavn).';
    $translation['uploaded_unknown']            = 'Fil upload fejl (Ukendt fejlkode).';
    $translation['try_again']                   = 'Fil upload fejl. Prøv venligst igen.';
    $translation['file_too_big']                = 'Filen er for stor.';
    $translation['no_mime']                     = 'MIME typen kan ikke identificeres.';
    $translation['incorrect_file']              = 'Forkert filtype.';
    $translation['image_too_wide']              = 'Billedet er for bredt.';
    $translation['image_too_narrow']            = 'Billedet er for smalt.';
    $translation['image_too_high']              = 'Billedet er for højt.';
    $translation['image_too_short']             = 'Billedet er for lavt.';
    $translation['ratio_too_high']              = 'Billedets forhold er for højt (Billedet er for bredt).';
    $translation['ratio_too_low']               = 'Billedets forhold er for lavt (Billedet er for højt).';
    $translation['too_many_pixels']             = 'Billedet har for mange pixels.';
    $translation['not_enough_pixels']           = 'Billedet har ikke nok pixels.';
    $translation['file_not_uploaded']           = 'Filen er ikke uploadet. Kan ikke fortsætte processen.';
    $translation['already_exists']              = '%s eksisterer allerede. Ændre venligst filnavn.';
    $translation['temp_file_missing']           = 'Ingen korrekt midlertidig kildefil. Kan ikke fortsætte processen.';
    $translation['source_missing']              = 'Ingen korrekt uploadet kildefil. Kan ikke fortsætte processen.';
    $translation['destination_dir']             = 'Destinations mappen kan ikke oprettes. Kan ikke fortsætte processen.';
    $translation['destination_dir_missing']     = 'Destinations mappen findes ikke. Kan ikke fortsætte processen.';
    $translation['destination_path_not_dir']    = 'Destinations stien er ikke en mappe. Kan ikke fortsætte processen.';
    $translation['destination_dir_write']       = 'Destinations mappen kan ikke gøres skrivbart. Kan ikke fortsætte processen.';
    $translation['destination_path_write']      = 'Destinations stien er ikke skrivbart. Kan ikke fortsætte processen.';
    $translation['temp_file']                   = 'Kan ikke oprette den midlertidig fil. Kan ikke fortsætte processen.';
    $translation['source_not_readable']         = 'Kildefilen er ikke læselig. Kan ikke fortsætte processen.';
    $translation['no_create_support']           = 'Ingen oprettelse fra %s support.';
    $translation['create_error']                = 'Fejl ved oprettelse af %s billede fra kilden.';
    $translation['source_invalid']              = 'Kan ikke læse billedekilden. Er det et billede?.';
    $translation['gd_missing']                  = 'GD er ikke til stede.';
    $translation['watermark_no_create_support'] = 'Ingen oprettelse fra %s support, kan ikke læse vandmærke.';
    $translation['watermark_create_error']      = 'Ingen %s læse support, kan ikke oprette vandmærke.';
    $translation['watermark_invalid']           = 'Ukendt billedeformat, kan ikke læse vandmærke.';
    $translation['file_create']                 = 'Ingen %s oprettelsessupport.';
    $translation['no_conversion_type']          = 'Ingen konverteringstype defineret.';
    $translation['copy_failed']                 = 'Fejl ved kopiering af filen på serveren. Copy() fejlede.';
    $translation['reading_failed']              = 'Fejl ved læsning af filen.';

?>
