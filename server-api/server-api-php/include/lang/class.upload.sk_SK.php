<?php
// +------------------------------------------------------------------------+
// | class.upload.sk_SK.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Bryan 2008. All rights reserved.                         |
// | Version       0.25                                                     |
// | Last modified 2008-12-01                                               |
// | Email         bryan@bryan.sk                                           |
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
 * Class upload Slovak translation
 *
 * @version   0.25
 * @author    Bryan (bryan@bryan.sk)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2008 - Bryan
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Chyba súboru. Prosím skúste znova.';
    $translation['local_file_missing']          = 'Lokálny súbor neexistuje.';
    $translation['local_file_not_readable']     = 'Lokálny súbor je nečitateľný.';
    $translation['uploaded_too_big_ini']        = 'Chyba odosielania súboru (odosielaný súbor presahuje nastevenú hodnotu upload_max_filesize v php.ini).';
    $translation['uploaded_too_big_html']       = 'Chyba odosielania súboru (odosielaný súbor presahuje hodnotu MAX_FILE_SIZE, která bola nastavená v HTML formulári).';
    $translation['uploaded_partial']            = 'Chyba odosielania súboru (odoslaná iba časť súboru).';
    $translation['uploaded_missing']            = 'Chyba odosielania súboru (nebol odoslaný žiaden súbor).';
    $translation['uploaded_unknown']            = 'Chyba odosielania súboru (neznámy chybový kód).';
    $translation['try_again']                   = 'Chyba odosielania súboru. Prosím skúste znova.';
    $translation['file_too_big']                = 'Súbor je príliš veľký.';
    $translation['no_mime']                     = 'Nie je možné zistiť MIME typ.';
    $translation['incorrect_file']              = 'Nesprávny typ súboru.';
    $translation['image_too_wide']              = 'Obrázok je veľmi široký.';
    $translation['image_too_narrow']            = 'Obrázok je veľmi úzky.';
    $translation['image_too_high']              = 'Obrázok je veľmi vysoký.';
    $translation['image_too_short']             = 'Obrázok je veľmi nízky.';
    $translation['ratio_too_high']              = 'Chybná proporcia obrázku (obrázok je veľmi široký).';
    $translation['ratio_too_low']               = 'Chybná proporcia obrázku (obrázok je veľmi vysoký).';
    $translation['too_many_pixels']             = 'Obrázok má príliš veľa pixelov.';
    $translation['not_enough_pixels']           = 'Obrázok nemá dostatok pixelov.';
    $translation['file_not_uploaded']           = 'Súbor nebol odoslaný. V procese sa nedá pokračovať.';
    $translation['already_exists']              = '%s už existuje. Prosím zmeňte názov súboru.';
    $translation['temp_file_missing']           = 'Nesprávny dočasný súbor. V procese sa nedá pokračovať.';
    $translation['source_missing']              = 'Nesprávny zdrojový súbor. V procese sa nedá pokračovať.';
    $translation['destination_dir']             = 'Nepodarilo sa vytvoriť cieľový adresár. V procese sa nedá pokračovať.';
    $translation['destination_dir_missing']     = 'Cieľový adresár neexistuje. V procese sa nedá pokračovať.';
    $translation['destination_path_not_dir']    = 'Cieľová cesta nieje adresár. V procese sa nedá pokračovať.';
    $translation['destination_dir_write']       = 'Cieľový adresár sa nedá zmeniť na zapisovateľný. V procese sa nedá pokračovať.';
    $translation['destination_path_write']      = 'Do cieľovej cesty sa nedá zapisovať. V procese sa nedá pokračovať.';
    $translation['temp_file']                   = 'Nie je možné vytvoriť dočasný súbor. V procese sa nedá pokračovať.';
    $translation['source_not_readable']         = 'Zdrojový súbor sa nedá čítať. V procese sa nedá pokračovať.';
    $translation['no_create_support']           = 'Nie je zapnutá podpora zápisu %s.';
    $translation['create_error']                = 'Chyba pri vytváraní %s obrázku zo zdroja.';
    $translation['source_invalid']              = 'Nepodarilo sa prečítať zdroj obrázku. Je súbor obrázok?.';
    $translation['gd_missing']                  = 'Pravdepodobne chýba GD knižnica.';
    $translation['watermark_no_create_support'] = 'Nie je zapnutá podpora zápisu %s, vodoznak sa nedá prečítať.';
    $translation['watermark_create_error']      = 'Nie je zapnutá podpora čítania %s, vodoznak sa nedá prečítať.';
    $translation['watermark_invalid']           = 'Neznámy formát obrázku, vodoznak sa nedá prečítať.';
    $translation['file_create']                 = 'Nie je zapnutá podpora pre vytváranie %s.';
    $translation['no_conversion_type']          = 'Nedefinovaný typ konverzie.';
    $translation['copy_failed']                 = 'Chyba kopírovania súboru na serveri. Funkcia copy() zlyhala.';
    $translation['reading_failed']              = 'Chyba čítania súboru.';   
        
?>