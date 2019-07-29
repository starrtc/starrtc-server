<?php
// +------------------------------------------------------------------------+
// | class.upload.no_NO.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Trond Torkildsen 2008. All rights reserved.              |
// | Version       0.25                                                     |
// | Last modified 22/08/2008                                               |
// | Email         mymail@ttmin.net                                         |
// | Web           http://www.ttmin.net                                     |
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
 * Class upload Norwegian translation
 *
 * @version   0.25
 * @author    Trond Torkildsen (mymail@ttmin.net)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Trond Torkildsen 
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Feil på fil, overføring feilet. Prøv igjen.';
    $translation['local_file_missing']          = 'Den valgte filen eksisterer ikke.';
    $translation['local_file_not_readable']     = 'Den valgte filen er ikke lesbar.';
    $translation['uploaded_too_big_ini']        = 'Filoverføring feilet (Filen overstiger "upload_max_filesize" direktivet i php.ini).';
    $translation['uploaded_too_big_html']       = 'Filoverføring feilet (Filen overstiger "MAX_FILE_SIZE" direktivet satt i applikasjonen).';
    $translation['uploaded_partial']            = 'Filoverføring feilet (Filen ble bare delvis opplastet).';
    $translation['uploaded_missing']            = 'Filoverføring feilet (Ingen fil ble opplastet).';
    $translation['uploaded_unknown']            = 'Filoverføring feilet (En uidentifisert feil oppsto).';
    $translation['try_again']                   = 'Filoverføring feilet. Prøv igjen.';
    $translation['file_too_big']                = 'Valgte fil er for stor.';
    $translation['no_mime']                     = 'Filens MIME typen kunne ikke leses.';
    $translation['incorrect_file']              = 'Feil filtype er valgt.';
    $translation['image_too_wide']              = 'Bildet er for bredt.';
    $translation['image_too_narrow']            = 'Bildet er for smalt.';
    $translation['image_too_high']              = 'Bildet er for høyt.';
    $translation['image_too_short']             = 'Bildet er for lavt.';
    $translation['ratio_too_high']              = 'Bilde ratio\'en er for høy (Bildet er for bredt).';
    $translation['ratio_too_low']               = 'Bilde ratio\'en er for lav (Bildet er for høyt).';
    $translation['too_many_pixels']             = 'Bildet har for mange pixler(høy oppløsning).';
    $translation['not_enough_pixels']           = 'Bildet har for få pixler(lav oppløsning).';
    $translation['file_not_uploaded']           = 'Filen er ikke opplastet. Videre "prosess" kan ikke utføres.';
    $translation['already_exists']              = 'Filen %s eksisterer allerede. Forandre på filnavnet.';
    $translation['temp_file_missing']           = 'Finner ikke korrekt midlertidig fil. Videre "prosess" kan ikke utføres.';
    $translation['source_missing']              = 'Finner ikke den opplastede kilde-filen. Videre "prosess" kan ikke utføres.';
    $translation['destination_dir']             = 'Kan ikke opprette destinasjonsmappen. Videre "prosess" kan ikke utføres.';
    $translation['destination_dir_missing']     = 'Destinasjonsmappen er ikke opprettet. Videre "prosess" kan ikke utføres.';
    $translation['destination_path_not_dir']    = 'Angitte destinasjons-sti peker ikke til en mappe. Videre "prosess" kan ikke utføres.';
    $translation['destination_dir_write']       = 'Destinasjonsmappen kan ikke gjøres skrivbar. Videre "prosess" kan ikke utføres.';
    $translation['destination_path_write']      = 'Destinasjonsmappen er ikke skrivbar. Videre "prosess" kan ikke utføres.';
    $translation['temp_file']                   = 'Midlertidig fil kan ikke opprettes Videre "prosess" kan ikke utføres.';
    $translation['source_not_readable']         = 'Kildefilen er ikke lesbar Videre "prosess" kan ikke utføres.';
    $translation['no_create_support']           = 'Oppretting av filen %s støttes ikke.';
    $translation['create_error']                = 'Det oppsto en feil ved oppretting av bildet %s fra kildefilen.';
    $translation['source_invalid']              = 'Kan ikke lese bilde-data. Er filen et bilde?.';
    $translation['gd_missing']                  = 'Finner ikke støtte for GD. Innstaler GD bibliotek (GD2 anbefales brukt).';
    $translation['watermark_no_create_support'] = 'Oppretting av filen %s støttes ikke. Vannmerket kan ikke leses.';
    $translation['watermark_create_error']      = 'Kan ikke lese filen %s. Vannmerket kan ikke opprettes.';
    $translation['watermark_invalid']           = 'Ukjent filformat. Vannmerket kan ikke leses.';
    $translation['file_create']                 = 'Oppretting av filen %s støttes ikke.';
    $translation['no_conversion_type']          = 'Konverterings-type er ikke satt.';
    $translation['copy_failed']                 = 'Det oppsto en feil ved filkopieringen på serveren. copy() feilet.';
    $translation['reading_failed']              = 'Det oppsto en feil ved lesing av filen.'; 
     
?>