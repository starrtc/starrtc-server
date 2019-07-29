<?php
// +------------------------------------------------------------------------+
// | class.upload.nl_NL.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Alfons Knaapen 2010. All rights reserved.                |
// | Version       0.29                                                     |
// | Last modified 30/05/2010                                               |
// | Email         Alfons Knaapen                                           |
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
 * Class upload dutch translation
 *
 * @version   0.29
 * @author    Alfons Knaapen
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Alfons Knaapen
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Bestandsfout. Probeer het opnieuw svp.';
    $translation['local_file_missing']          = 'Het lokale bestand is niet gevonden.';
    $translation['local_file_not_readable']     = 'Het lokale bestand is niet leesbaar.';
    $translation['uploaded_too_big_ini']        = 'Upload fout (de grootte van het bestand is meer dan is toegestaan door de upload_max_filesize parameter in php.ini).';
    $translation['uploaded_too_big_html']       = 'Upload fout (de grootte van het bestand is meer dan is toegestaan door de MAX_FILE_SIZE parameter in het html formulier).';
    $translation['uploaded_partial']            = 'Upload fout (het bestand is slechts gedeeltelijk ge-upload).';
    $translation['uploaded_missing']            = 'Upload fout (er is geen bestand ge-upload).';
    $translation['uploaded_no_tmp_dir']         = 'Upload fout (de tijdelijke opslag folder ontbreekt).';
    $translation['uploaded_cant_write']         = 'Upload fout (kon bestand niet opslaan).';
    $translation['uploaded_err_extension']      = 'Upload fout (het bestand heeft de verkeerde extensie).';
    $translation['uploaded_unknown']            = 'Upload fout (onbekende foutcode).';
    $translation['try_again']                   = 'Upload fout. Probeer het opnieuw svp.';
    $translation['file_too_big']                = 'Het bestand is te groot.';
    $translation['no_mime']                     = 'MIME soort kan niet vastgesteld worden.';
    $translation['incorrect_file']              = 'Incorrect type bestand.';
    $translation['image_too_wide']              = 'De afbeelding is te breed.';
    $translation['image_too_narrow']            = 'De afbeelding is te smal.';
    $translation['image_too_high']              = 'De afbeelding is te hoog.';
    $translation['image_too_short']             = 'De afbeelding is te kort.';
    $translation['ratio_too_high']              = 'De afbeelding-ratio is te hoog.';
    $translation['ratio_too_low']               = 'De afbeelding-ratio is te laag.';
    $translation['too_many_pixels']             = 'De afbeelding bevat te veel pixels.';
    $translation['not_enough_pixels']           = 'De afbeelding bevat te weinig pixels.';
    $translation['file_not_uploaded']           = 'Bestand niet ge-upload. Kan de verwerking niet afmaken.';
    $translation['already_exists']              = '%s bestaat al. Kies svp een andere bestandsnaam.';
    $translation['temp_file_missing']           = 'Incorrect tijdelijk bron-bestand. Kan de verwerking niet afmaken.';
    $translation['source_missing']              = 'Incorrecte upload bron-bestand. Kan de verwerking niet afmaken.';
    $translation['destination_dir']             = 'Doel directory kan niet gemaakt worden. Kan de verwerking niet afmaken.';
    $translation['destination_dir_missing']     = 'Doel directory bestaat niet. Kan de verwerking niet afmaken.';
    $translation['destination_path_not_dir']    = 'Doel pad is geen directory. Kan de verwerking niet afmaken.';
    $translation['destination_dir_write']       = 'Doel directory kan niet schrijfbaar gemaakt worden. Kan de verwerking niet afmaken.';
    $translation['destination_path_write']      = 'Doel pad is niet schrijfbaar. Kan de verwerking niet afmaken.';
    $translation['temp_file']                   = 'Kan geen tijdelijk bestand maken. Kan de verwerking niet afmaken.';
    $translation['source_not_readable']         = 'Bron-bestand is niet leesbaar. Kan de verwerking niet afmaken.';
    $translation['no_create_support']           = 'Het maken van een afbeelding uit %s wordt niet ondersteund.';
    $translation['create_error']                = 'Fout bij het maken van %s afbeelding vanuit het bron-bestand.';
    $translation['source_invalid']              = 'Het bron-bestand kan niet gelezen worden. Is het wel een afbeelding?';
    $translation['gd_missing']                  = 'De GD bibliotheek lijkt niet geinstalleerd.';
    $translation['watermark_no_create_support'] = 'Kan het watermerk niet lezen, het maken van een afbeelding uit %s wordt niet ondersteund.';
    $translation['watermark_create_error']      = 'Kan het watermerk niet maken, kan geen %s als bron lezen.';
    $translation['watermark_invalid']           = 'Kan het watermerk niet lezen, onbekend afbeelding formaat.';
    $translation['file_create']                 = 'Het maken van %s wordt niet ondersteund.';
    $translation['no_conversion_type']          = 'Geen conversie soort gedefinieeerd.';
    $translation['copy_failed']                 = 'Fout bij het kopieren op de server. De kopieer opdracht is mislukt.';
    $translation['reading_failed']              = 'Bestand is niet leesbaar. Kan de verwerking niet afmaken.';
?>
