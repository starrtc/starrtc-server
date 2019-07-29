<?php
// +------------------------------------------------------------------------+
// | class.upload.sv_SE.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Mikael Andersson 2007. All rights reserved.              |
// | Version       0.25                                                     |
// | Last modified 24/11/2007                                               |
// | Email         mikael@familjenmartinsson.com                            |
// | Web           http://www.familjenmartinsson.com                        |
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
 * Class upload swedish translation
 *
 * @version   0.25
 * @author    Mikael Andersson (mikael@familjenmartinsson.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Mikael Andersson
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Filfel. Försök igen.';
    $translation['local_file_missing']          = 'Lokal fil hittades inte.';
    $translation['local_file_not_readable']     = 'Gick inte att skriva till lokal fil.';
    $translation['uploaded_too_big_ini']        = 'Uppladdningsfel (Den uppladdade filen överskrider upload_max_filesize direktivet i php.ini).';
    $translation['uploaded_too_big_html']       = 'Uppladdningsfel (Den uppladdade filen överskrider MAX_FILE_SIZE direktivet specificerat i html formuläret).';
    $translation['uploaded_partial']            = 'Uppladdningsfel (Filen blev bara delvis uppladdad).';
    $translation['uploaded_missing']            = 'Uppladdningsfel (Ingen fil blev uppladdad).';
    $translation['uploaded_unknown']            = 'Uppladdningsfel (Okänt fel).';
    $translation['try_again']                   = 'Uppladdningsfel. Försök igen.';
    $translation['file_too_big']                = 'Filen är för stor.';
    $translation['no_mime']                     = 'MIME-typen kan inte hittas.';
    $translation['incorrect_file']              = 'Inkorrekt filtyp.';
    $translation['image_too_wide']              = 'Bilden är för bred.';
    $translation['image_too_narrow']            = 'Bilden är för smal.';
    $translation['image_too_high']              = 'Bildens höjd är för hög.';
    $translation['image_too_short']             = 'Bildens höjd är för låg.';
    $translation['ratio_too_high']              = 'Bildförhållandet är för stort (Bilden är för bred).';
    $translation['ratio_too_low']               = 'Bildförhållandet är för litet (Bilden är för hög).';
    $translation['too_many_pixels']             = 'Bilden har för många pixlar.';
    $translation['not_enough_pixels']           = 'Bilden har inte tillräckligt med pixlar.';
    $translation['file_not_uploaded']           = 'Bilden är inte uppladdad. Processen har stoppats.';
    $translation['already_exists']              = '%s finns redan. Ändra filnamnet.';
    $translation['temp_file_missing']           = 'Fel temporär källfil. Processen har stoppats.';
    $translation['source_missing']              = 'Fel uppladdad temporär kälfil. Processen har stoppats.';
    $translation['destination_dir']             = 'Målkatalogen kan inte skapas. Processen har stoppats.';
    $translation['destination_dir_missing']     = 'Målkatalogen finns inte. Processen har stoppats.';
    $translation['destination_dir_write']       = 'Målkatalogen kan inte göras skrivbar. Processen har stoppats.';
    $translation['destination_path_write']      = 'Målkatalogen är inte skrivbar. Processen har stoppats.';
    $translation['temp_file']                   = 'Kan inte skapa den temporära filen. Processen har stoppats.';
    $translation['source_not_readable']         = 'Källfilen är inte skrivbar. Processen har stoppats.';
    $translation['no_create_support']           = 'Inget stöd för skapandet av %s.';
    $translation['create_error']                = 'Fel vid skapandet av %s.';
    $translation['source_invalid']              = 'Kan inte läsa in bilden. Är det en bild?';
    $translation['gd_missing']                  = 'GD Biblioteket verkar inte vara installerat på servern.';
    $translation['watermark_no_create_support'] = 'Inget stöd för skapandet av %s, kan inte läsa vattenstämpel.';
    $translation['watermark_create_error']      = 'Inget stöd för läsandet av %s, kan inte skapa vattenstämpel.';
    $translation['watermark_invalid']           = 'Okänt bildformat, kan inte läsa vattenstämpel.';
    $translation['file_create']                 = 'Inget stöd för skapandet av %s.';
    $translation['no_conversion_type']          = 'Ingen omvandlingstyp bestämd.';
    $translation['copy_failed']                 = 'Fel vid kopiering av filen. copy() misslyckades.';
    $translation['reading_failed']              = 'Fel vid inläsning av filen.';

?>