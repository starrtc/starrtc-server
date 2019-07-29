<?php
// +------------------------------------------------------------------------+
// | class.upload.hu_HU.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Balázs Bosternák 2013. All rights reserved.              |
// | Version       0.32                                                     |
// | Last modified 30/06/2013                                               |
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
 * Class upload Hungarian translation
 *
 * @version   0.32
 * @author    Balázs Bosternák
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Balázs Bosternák
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Hibás fájl. Kérem próbálja újra.';
    $translation['local_file_missing']          = 'A lokális fájl nem létezik.';
    $translation['local_file_not_readable']     = 'A lokális fájl nem olvasható.';
    $translation['uploaded_too_big_ini']        = 'Hiba a fájl feltöltésekor (az elküldött fájl túllépi a php.ini-ben beállított upload_max_filesize értéket).';
    $translation['uploaded_too_big_html']       = 'Hiba a fájl feltöltésekor (az elküldött fájl túllépi a HTML űrlapban beállított MAX_FILE_SIZE értéket).';
    $translation['uploaded_partial']            = 'Hiba a fájl feltöltésekor (a feltöltött fájl csak egy része került feltöltésre).';
    $translation['uploaded_missing']            = 'Hiba a fájl feltöltésekor (nem volt feltöltve fájl).';
    $translation['uploaded_no_tmp_dir']         = 'Hiba a fájl feltöltésekor (hiányzik az ideiglenes mappa).';
    $translation['uploaded_cant_write']         = 'Hiba a fájl feltöltésekor (failed to write file to disk).';
    $translation['uploaded_err_extension']      = 'Hiba a fájl feltöltésekor (a fájl feltöltése megállt egy bővítmény miatt).';
    $translation['uploaded_unknown']            = 'Hiba a fájl feltöltésekor (ismeretlen hibakód).';
    $translation['try_again']                   = 'Hiba a fájl feltöltésekor.  Kérem próbálja újra.';
    $translation['file_too_big']                = 'A fájl túl nagy.';
    $translation['no_mime']                     = 'Nem határozható meg a MIME típus.';
    $translation['incorrect_file']              = 'Nem megfelelő fájltípus.';
    $translation['image_too_wide']              = 'A kép túl széles.';
    $translation['image_too_narrow']            = 'A kép túl keskeny.';
    $translation['image_too_high']              = 'A kép túl magas.';
    $translation['image_too_short']             = 'A kép túl alacsony.';
    $translation['ratio_too_high']              = 'A kép aránya túl nagy (a kép túl széles).';
    $translation['ratio_too_low']               = 'A kép aránya túl kicsi (a kép túl magas).';
    $translation['too_many_pixels']             = 'A kép túl sok képpontot tartalmaz.';
    $translation['not_enough_pixels']           = 'A kép túl kevés képpontot tartalmaz.';
    $translation['file_not_uploaded']           = 'A fájl nem lett feltöltve. Nem lehet folytatni a folyamatot.';
    $translation['already_exists']              = '%s már létezik. Kérem változtassa meg a fájlnevet.';
    $translation['temp_file_missing']           = 'Nem megfelelő ideiglenes forrásfájl. Nem lehet folytatni a folyamatot.';
    $translation['source_missing']              = 'Nem megfelelő feltöltött forrásfájl. Nem lehet folytatni a folyamatot.';
    $translation['destination_dir']             = 'A célkönyvtár nem hozható létre. Nem lehet folytatni a folyamatot.';
    $translation['destination_dir_missing']     = 'A célkönyvtár nem létezik. Nem lehet folytatni a folyamatot.';
    $translation['destination_path_not_dir']    = 'Az elérési útvonal nem mappára mutat. Nem lehet folytatni a folyamatot.';
    $translation['destination_dir_write']       = 'A célkönyvtár nem tehető írhatóvá. Nem lehet folytatni a folyamatot.';
    $translation['destination_path_write']      = 'Az elérési útvonal nem írható. Nem lehet folytatni a folyamatot.';
    $translation['temp_file']                   = 'Az ideiglenes fájl nem hozható létre. Nem lehet folytatni a folyamatot.';
    $translation['source_not_readable']         = 'A forrásfájl nem olvasható. Nem lehet folytatni a folyamatot.';
    $translation['no_create_support']           = 'Nem hozható létre %s fájlból.';
    $translation['create_error']                = 'Hiba történt a %s kép forrásból való létrehozásakor.';
    $translation['source_invalid']              = 'Nem olvasható a kép forrása. Képet adott meg?.';
    $translation['gd_missing']                  = 'A GD könyvtár valószínűleg hiányzik.';
    $translation['watermark_no_create_support'] = '%s típusból való létrehozá nem támogatott, nem olvasható a vízjel.';
    $translation['watermark_create_error']      = '%s típus olvasása nem támogatott, nem hozható létre vízjel.';
    $translation['watermark_invalid']           = 'Ismeretlen kép formátum, nem olvasható a vízjel.';
    $translation['file_create']                 = '%s fájltípus létrehozása nem támogatott.';
    $translation['no_conversion_type']          = 'Konverzió típusa nem lett megadva.';
    $translation['copy_failed']                 = 'Hiba történt a fájl szerverre való másolásakor. copy() sikertelen.';
    $translation['reading_failed']              = 'Hiba a fájl olvasásakor.';

?>