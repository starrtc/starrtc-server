<?php
// +------------------------------------------------------------------------+
// | class.upload.cs_CS.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Lukáš Gavenda 2007. All rights reserved.                 |
// | Version       0.25                                                     |
// | Last modified 11/29/2007                                               |
// | Email         LukasGavenda@GmaiL.com                                   |
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
 * Class upload Czech translation
 *
 * @version   0.25
 * @author    Lukáš Gavenda (LukasGavenda@GmaiL.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2007 - Lukáš Gavenda
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Nastal problém se souborem. Zkuste to prosím znovu.';
    $translation['local_file_missing']          = 'Lokální soubor neexistuje.';
    $translation['local_file_not_readable']     = 'Lokální soubor nelze přečíst.';
    $translation['uploaded_too_big_ini']        = 'Nastal problém s uploadem (nahraný soubor přesahuje nastavenou direktivu upload_max_filesize v php.ini).';
    $translation['uploaded_too_big_html']       = 'Nastal problém s uploadem (nahraný soubor přesahuje nastavenou direktivu MAX_FILE_SIZE, která byla nastavená v HTML formuláři).';
    $translation['uploaded_partial']            = 'Nastal problém s uploadem (soubor byl nahrán pouze částečně).';
    $translation['uploaded_missing']            = 'Nastal problém s uploadem (nebyl nahrán žádný soubor).';
    $translation['uploaded_unknown']            = 'Nastal problém s uploadem (neznámý chybový kód).';
    $translation['try_again']                   = 'Nastal problém s uploadem. Zkuste to prosím znovu.';
    $translation['file_too_big']                = 'Soubor je příliš velký.';
    $translation['no_mime']                     = 'Nepodařilo se zjistit MIME typ.';
    $translation['incorrect_file']              = 'Nesprávný typ souboru.';
    $translation['image_too_wide']              = 'Obrázek je příliš široký.';
    $translation['image_too_narrow']            = 'Obrázek je příliš úzký.';
    $translation['image_too_high']              = 'Obrázek je příliš vysoký.';
    $translation['image_too_short']             = 'Obrázek je příliš nízký.';
    $translation['ratio_too_high']              = 'Poměr stran obázku je příliš velký (obrázek je moc široký).';
    $translation['ratio_too_low']               = 'Image ratio too low (obrázek je moc vysoký).';
    $translation['too_many_pixels']             = 'Obrázek má příliš mnoho pixelů.';
    $translation['not_enough_pixels']           = 'Obrázek ma nedostatek pixelů.';
    $translation['file_not_uploaded']           = 'Soubor nebyl nahrán. Nelze pokračovat v procesu.';
    $translation['already_exists']              = '%s již existuje. Prosím změnte název souboru.';
    $translation['temp_file_missing']           = 'Nesprávný dočasný soubor. Nelze pokračovat v procesu.';
    $translation['source_missing']              = 'Byl nahrán nesprávný zdrojový soubor. Nelze pokračovat v procesu.';
    $translation['destination_dir']             = 'Nepodařilo se vytvořit cílový adresář. Nelze pokračovat v procesu.';
    $translation['destination_dir_missing']     = 'Cílový adresář neexistuje. Nelze pokračovat v procesu.';
    $translation['destination_path_not_dir']    = 'Cílová cesta není adresářem. Nelze pokračovat v procesu.';
    $translation['destination_dir_write']       = 'Cílový adresář nelze udělat zapisovatelným. Nelze pokračovat v procesu.';
    $translation['destination_path_write']      = 'DO cílové cesty nelze zapisovat. Nelze pokračovat v procesu.';
    $translation['temp_file']                   = 'Nepodařilo se vytvořit dočasný soubor. Nelze pokračovat v procesu.';
    $translation['source_not_readable']         = 'Ze zdrojového souboru nelze číst. Nelze pokračovat v procesu.';
    $translation['no_create_support']           = 'Není zapnutá podpora zápisu %s.';
    $translation['create_error']                = 'CHyba při vytváření %s obrázku ze zdroje.';
    $translation['source_invalid']              = 'Nepořilo se přečíst zdroj obrázku. Soubor není obrázkem?.';
    $translation['gd_missing']                  = 'GD knihovna není zřejmě nainstalována či spuštěna.';
    $translation['watermark_no_create_support'] = 'Není zapnutá podpora zápisu %s, nemohu přečíst vodoznak.';
    $translation['watermark_create_error']      = 'Není oprávnění ke čtení %s. Nemohu přečíst vodoznak.';
    $translation['watermark_invalid']           = 'Neznámý formát obrázku, nemohu přečíst vodoznak.';
    $translation['file_create']                 = 'Nejsou dostupná práva pro vytváření %s.';
    $translation['no_conversion_type']          = 'Nebyl nadefinován konverzní typ.';
    $translation['copy_failed']                 = 'Nastala chyba při kopírování souboru na serveru. Funkce copy() selhala.';
    $translation['reading_failed']              = 'Chyba při čtení souboru.';   
        
?>