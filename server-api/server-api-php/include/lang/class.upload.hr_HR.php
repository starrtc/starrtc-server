<?php
// +------------------------------------------------------------------------+
// | class.upload.hr_HR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Kresimir Virovic 2008. All rights reserved.              |
// | Version       0.25                                                     |
// | Last modified 27/11/2008                                               |
// | Email         kresov@hotmail.com                                       |
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
 * Class upload Croatian (hrvatski) translation
 *
 * @version   0.25
 * @author    Kresimir Virovic (kresov@hotmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Kresimir Virovic
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Greška u datoteci. Pokušajte ponovno.';
    $translation['local_file_missing']          = 'Lokalna datoteka ne postoji.';
    $translation['local_file_not_readable']     = 'Lokalna datoteka je nečitljiva.';
    $translation['uploaded_too_big_ini']        = 'Greška pri snimanju (datoteka je prevelika).';//the uploaded file exceeds the upload_max_filesize directive in php.ini
    $translation['uploaded_too_big_html']       = 'Greška pri snimanju (datoteka je prevelika).';//the uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form
    $translation['uploaded_partial']            = 'Greška pri snimanju (datoteka je samo djelomično snimljena).';
    $translation['uploaded_missing']            = 'Greška pri snimanju (no file was uploaded).';
    $translation['uploaded_unknown']            = 'Greška pri snimanju (nepoznata greška).';
    $translation['try_again']                   = 'Greška pri snimanju. Pokušajte ponovno.';
    $translation['file_too_big']                = 'Datoteka je prevelika.';
    $translation['no_mime']                     = 'MIME tip ne može biti detektiran.';
    $translation['incorrect_file']              = 'Neispravna vrsta datoteke.';
    $translation['image_too_wide']              = 'Širina slike je prevelika.';
    $translation['image_too_narrow']            = 'Širina slike je premala.';
    $translation['image_too_high']              = 'Visina slike je prevelika.';
    $translation['image_too_short']             = 'Visina slike je premala.';
    $translation['ratio_too_high']              = 'Omjer slike je prevelik (slika je preširoka).';
    $translation['ratio_too_low']               = 'Omjer slike je premali (slika je previsoka).';
    $translation['too_many_pixels']             = 'Slika ima previše piksela.';
    $translation['not_enough_pixels']           = 'Slika ima nedovoljno piksela.';
    $translation['file_not_uploaded']           = 'Datkoteka nije snimljena. Ne mogu nastaviti sa procesom.';
    $translation['already_exists']              = '%s već postoji. Pokušajte promjeniti naziv.';
    $translation['temp_file_missing']           = 'Greška u privremenoj izvornoj datoteci. Ne mogu nastaviti sa procesom.';
    $translation['source_missing']              = 'Greška u snimljenoj izvornoj datoteci. Ne mogu nastaviti sa procesom.';
    $translation['destination_dir']             = 'Destinacijski direktorij ne može biti kreiran. Ne mogu nastaviti sa procesom.';
    $translation['destination_dir_missing']     = 'Destinacijski direktorij ne postoji. Ne mogu nastaviti sa procesom.';
    $translation['destination_path_not_dir']    = 'Destinacijska putanja nije direktorij. Ne mogu nastaviti sa procesom.';
    $translation['destination_dir_write']       = 'Nemoguće je snimati u destinacijski direktorij. Ne mogu nastaviti sa procesom.';
    $translation['destination_path_write']      = 'Nemoguće je pisati u destinacijsku putanju. Ne mogu nastaviti sa procesom.';
    $translation['temp_file']                   = 'Nemoguće je kreiranje privremene datoteke. Ne mogu nastaviti sa procesom.';
    $translation['source_not_readable']         = 'Nemoguće je čitanje izvorne datoteke. Ne mogu nastaviti sa procesom.';
    $translation['no_create_support']           = 'Kreiranje %s nije podržano.';
    $translation['create_error']                = 'Greška pri kreiranju %s slike iz izvorne slike.';
    $translation['source_invalid']              = 'Nemoguće čitanje izvorne slike. Možda nije slika?.';
    $translation['gd_missing']                  = 'GD nije instaliran na serveru.';
    $translation['watermark_no_create_support'] = 'Bez kreiranja iz %s podrške, nemoguće čitanje watermark-a.';
    $translation['watermark_create_error']      = 'Bez %s podrške čitanja, nemoguće kreiranje watermark-a.';
    $translation['watermark_invalid']           = 'Nepoznat format slike, nemoguće čitanje watermark-a.';
    $translation['file_create']                 = 'Bez %s podrške kreiranja.';
    $translation['no_conversion_type']          = 'Nije definirana vrsta konverzije.';
    $translation['copy_failed']                 = 'Greška pri presnimavanju datoteke na server.';
    $translation['reading_failed']              = 'Greška pri čitanju datoteke.';   
        
?>