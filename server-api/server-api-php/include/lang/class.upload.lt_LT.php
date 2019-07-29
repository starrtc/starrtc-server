<?php
// +------------------------------------------------------------------------+
// | class.upload.lt_LT.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Dainius Kaupaitis 2010. All rights reserved.             |
// | Version       0.32                                                     |
// | Last modified 10/13/2014                                               |
// | Email         dk@sum.lt                                                |
// | Web           http://sum.lt                                            |
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
 * Class upload lithuanian translation
 *
 * @version   0.32
 * @author    Dainius Kaupaitis (dk@sum.lt)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Dainius Kaupaitis
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Klaida faile. Bandykite dar kartą.';
    $translation['local_file_missing']          = 'Lokalus failas neegzistuoja.';
    $translation['local_file_not_readable']     = 'Neįmanoma nuskaityti lokalaus failo.';
    $translation['uploaded_too_big_ini']        = 'Pakrovimo klaida (pakrauto failo dydis viršija upload_max_filesize parametrą php.ini faile).';
    $translation['uploaded_too_big_html']       = 'Pakrovimo klaida (pakrauto failo dydis viršija MAX_FILE_SIZE parametrą HTML formoje).';
    $translation['uploaded_partial']            = 'Pakrovimo klaida (failas buvo pakrautas tik dalinai).';
    $translation['uploaded_missing']            = 'Pakrovimo klaida (nepakrautas joks failas).';
    $translation['uploaded_no_tmp_dir']         = 'Pakrovimo klaida (nėra laikinos direktorijos).';
    $translation['uploaded_cant_write']         = 'Pakrovimo klaida (nepavyko įrašyti failo į diską).';
    $translation['uploaded_err_extension']      = 'Pakrovimo klaida (pakrovimas sustabdytas dėl plėtinio).';
    $translation['uploaded_unknown']            = 'Pakrovimo klaida (nežinomas klaidos kodas).';
    $translation['try_again']                   = 'Pakrovimo klaida. Bandykite dar kartą.';
    $translation['file_too_big']                = 'Failas per didelis.';
    $translation['no_mime']                     = 'Nenustatytas MIME tipas.';
    $translation['incorrect_file']              = 'Neteisingas failo tipas.';
    $translation['image_too_wide']              = 'Paveikslėlis per platus.';
    $translation['image_too_narrow']            = 'Paveikslėlis per siauras.';
    $translation['image_too_high']              = 'Paveikslėlis per aukštas.';
    $translation['image_too_short']             = 'Paveikslėlis per žemas.';
    $translation['ratio_too_high']              = 'Paveikslėlio kraštinių santykis per didelis (per platus).';
    $translation['ratio_too_low']               = 'Paveikslėlio kraštinių santykis per mažas (per aukštas).';
    $translation['too_many_pixels']             = 'Paveikslėlyje yra per daug pikselių.';
    $translation['not_enough_pixels']           = 'Paveikslėlyje yra per mažai pikselių.';
    $translation['file_not_uploaded']           = 'Failas nepakrautas. Neįmanoma apdoroti.';
    $translation['already_exists']              = '%s jau egzistuoja. Pakeiskite failo pavadinimą.';
    $translation['temp_file_missing']           = 'Nėra laikino šaltinio failo. Neįmanoma apdoroti.';
    $translation['source_missing']              = 'Nėra pakrauto šaltinio failo. Neįmanoma apdoroti.';
    $translation['destination_dir']             = 'Neįmanoma sukurti paskirties direktorijos. Neįmanoma apdoroti.';
    $translation['destination_dir_missing']     = 'Paskirties direktorija neegzistuoja. Neįmanoma apdoroti.';
    $translation['destination_path_not_dir']    = 'Paskirties kelias nėra direktorija. Neįmanoma apdoroti.';
    $translation['destination_dir_write']       = 'Paskirties direktorijos teisės negali būti pakeistos rašymui. Neįmanoma apdoroti.';
    $translation['destination_path_write']      = 'Paskirties kelias yra uždraustas rašymui. Neįmanoma apdoroti.';
    $translation['temp_file']                   = 'Neįmanoma nuskaityti laikino failo. Neįmanoma apdoroti.';
    $translation['source_not_readable']         = 'Neįmanoma nuskaityti šaltinio failo. Neįmanoma apdoroti.';
    $translation['no_create_support']           = 'Nepalaikomas sukūrimas iš %s.';
    $translation['create_error']                = 'Klaida sukuriant %s paveikslėlį iš šaltinio.';
    $translation['source_invalid']              = 'Neįmanoma nuskaityti paveikslėlio šaltinio. Ne grafinis failo tipas?';
    $translation['gd_missing']                  = 'Panašu, kad nėra GD.';
    $translation['watermark_no_create_support'] = 'Nepalaikomas sukūrimas iš %s, neįmanoma nuskaityti vandens ženklo.';
    $translation['watermark_create_error']      = 'Nepalaikomas %s skaitymas, neįmanoma sukurti vandens ženklo.';
    $translation['watermark_invalid']           = 'Neatpažintas paveikslėlio tipas, neįmanoma nuskaityti vandens ženklo.';
    $translation['file_create']                 = 'Nepalaikomas %s sukūrimas.';
    $translation['no_conversion_type']          = 'Nenusakytas konvertavimo tipas.';
    $translation['copy_failed']                 = 'Klaida kopijuojant failą serveryje. copy() klaida.';
    $translation['reading_failed']              = 'Klaida skaitant failą.';

?>
