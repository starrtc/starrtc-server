<?php
// +------------------------------------------------------------------------+
// | class.upload.fi_FI.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Asko Pesola 2016. All rights reserved.                   |
// | Version       0.32                                                     |
// | Last modified 04/02/2016                                               |
// | Email         asko.pesola@gmail.com                                    |
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
 * Class upload Finnish translation
 *
 * @version   0.32
 * @author    Asko Pesola (asko.pesola@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Asko Pesola
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Tiedosto virhe. Yritä uudestaan.';
    $translation['local_file_missing']          = 'Paikallinen tiedosto ei olemassa.';
    $translation['local_file_not_readable']     = 'Paikallinen tiedosto ei luettavissa.';
    $translation['uploaded_too_big_ini']        = 'Virhe tiedostoa ladatessa (ladattu tiedosto saavutti php.ini tiedostossa olevan upload_max_filesize rajoituksen).';
    $translation['uploaded_too_big_html']       = 'Virhe tiedostoa ladatessa (ladattu tiedosto saavutti html lomakkeella asetetun MAX_FILE_SIZE rajoituksen).';
    $translation['uploaded_partial']            = 'Virhe tiedostoa ladatessa (tiedosto ladattiin vain osittain).';
    $translation['uploaded_missing']            = 'Virhe tiedostoa ladatessa (ei ladattavaa tiedostoa).';
    $translation['uploaded_no_tmp_dir']         = 'Virhe tiedostoa ladatessa (puuttuva väliaikainen kansio).';
    $translation['uploaded_cant_write']         = 'Virhe tiedostoa ladatessa (ei voitu kirjoittaa tiedostoa levylle).';
    $translation['uploaded_err_extension']      = 'Virhe tiedostoa ladatessa (laajennus keskeytti tiedoston lataamisen).';
    $translation['uploaded_unknown']            = 'Virhe tiedostoa ladatessa (tuntematon virhekoodi).';
    $translation['try_again']                   = 'Virhe tiedostoa ladatessa. Yritä uudestaan.';
    $translation['file_too_big']                = 'Tiedosto liian suuri.';
    $translation['no_mime']                     = 'MIME tyyppiä ei voitu havaita.';
    $translation['incorrect_file']              = 'Virheellinen tiedostotyyppi.';
    $translation['image_too_wide']              = 'Kuva liian leveä.';
    $translation['image_too_narrow']            = 'Kuva liian kapea.';
    $translation['image_too_high']              = 'Kuva liian korkea.';
    $translation['image_too_short']             = 'Kuva liian matala.';
    $translation['ratio_too_high']              = 'Kuvasuhde liian korkea (kuva liian leveä).';
    $translation['ratio_too_low']               = 'Kuvasuhde liian matala (kuva liian korkea).';
    $translation['too_many_pixels']             = 'Kuvassa on liian monta pikseliä.';
    $translation['not_enough_pixels']           = 'Kuvassa ei ole riittävästi pikseleitä.';
    $translation['file_not_uploaded']           = 'Tiedostoa ei ladattu. Prosessia ei voida jatkaa.';
    $translation['already_exists']              = '%s on olemassa. Muuta tiedoston nimi.';
    $translation['temp_file_missing']           = 'Ei väliaikaista lähdetiedostoa. Prosessia ei voida jatkaa.';
    $translation['source_missing']              = 'Ei ladattua lähdetiedostoa. Prosessia ei voida jatkaa.';
    $translation['destination_dir']             = 'Kohde hakemistoa ei voitu luoda. Prosessia ei voida jatkaa.';
    $translation['destination_dir_missing']     = 'Kohde hakemistoa ei ole. Prosessia ei voida jatkaa.';
    $translation['destination_path_not_dir']    = 'Kohde polku ei ole hakemisto. Prosessia ei voida jatkaa.';
    $translation['destination_dir_write']       = 'Kohde hakemistoa ei voi tehdä kirjoitettavaksi. Prosessia ei voida jatkaa.';
    $translation['destination_path_write']      = 'Kohde polku ei ole kirjoitettavissa. Prosessia ei voida jatkaa.';
    $translation['temp_file']                   = 'Ei voitu luoda väliaikaista tiedostoa. Prosessia ei voida jatkaa.';
    $translation['source_not_readable']         = 'Lähdetiedosto ei ole luettavissa. Prosessia ei voida jatkaa.';
    $translation['no_create_support']           = 'Luomista %s :sta ei tueta.';
    $translation['create_error']                = 'Virhe luotaessa %s kuvaa lähteestä.';
    $translation['source_invalid']              = 'Ei voitu lukea kuvan lähdettä. Ei kuva?.';
    $translation['gd_missing']                  = 'GD ei näytä olevan olemassa.';
    $translation['watermark_no_create_support'] = 'Luomista %s :sta ei tueta, ei voi lukea vesileimaa.';
    $translation['watermark_create_error']      = '%s :n lukemista ei tueta, ei voi luoda vesileimaa.';
    $translation['watermark_invalid']           = 'Tuntematon kuvamuoto, ei voi lukea vesileimaa.';
    $translation['file_create']                 = '%s :n luontia ei tueta.';
    $translation['no_conversion_type']          = 'Muunnostyyppiä ei määritelty.';
    $translation['copy_failed']                 = 'Virhe kopioidessa tiedosto palvelimelle. copy() epäonnistui.';
    $translation['reading_failed']              = 'Virhe tiedostoa lukiessa.';

?>