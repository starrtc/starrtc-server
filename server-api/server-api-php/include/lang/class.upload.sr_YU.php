<?php
// +------------------------------------------------------------------------+
// | class.upload.sr_YU.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Zeljko Markovic 2013. All rights reserved.               |
// | Version       0.25                                                     |
// | Last modified 11/02/2013                                               |
// | Email         zeljko@banjica.info                                      |
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
 * Class upload Serbian (srpski) translation
 *
 * @version   0.25
 * @author    Zeljko Markovic (zeljko@banjica.info)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Zeljko Markovic
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Greška u datoteci. Pokušajte ponovno.';
    $translation['local_file_missing']          = 'Lokalna datoteka ne postoji.';
    $translation['local_file_not_readable']     = 'Lokalna datoteka nije čitljiva.';
    $translation['uploaded_too_big_ini']        = 'Greška pri snimanju (datoteka je prevelika).';//the uploaded file exceeds the upload_max_filesize directive in php.ini
    $translation['uploaded_too_big_html']       = 'Greška pri snimanju (datoteka je prevelika).';//the uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form
    $translation['uploaded_partial']            = 'Greška pri snimanju (datoteka je samo djelomično snimljena).';
    $translation['uploaded_missing']            = 'Greška pri snimanju (fajl nije aploudovan).';
    $translation['uploaded_unknown']            = 'Greška pri snimanju (nepoznata greška).';
    $translation['try_again']                   = 'Greška pri snimanju. Pokušajte ponovno.';
    $translation['file_too_big']                = 'Datoteka je prevelika.';
    $translation['no_mime']                     = 'MIME tip ne može biti detektiran.';
    $translation['incorrect_file']              = 'Neispravna vrsta datoteke.';
    $translation['image_too_wide']              = 'Širina slike je prevelika.';
    $translation['image_too_narrow']            = 'Širina slike je premala.';
    $translation['image_too_high']              = 'Visina slike je prevelika.';
    $translation['image_too_short']             = 'Visina slike je premala.';
    $translation['ratio_too_high']              = 'Proporcija slike je prevelik (slika je preširoka).';
    $translation['ratio_too_low']               = 'Proporcija slike je premali (slika je previsoka).';
    $translation['too_many_pixels']             = 'Slika ima previše piksela.';
    $translation['not_enough_pixels']           = 'Slika ima nedovoljno piksela.';
    $translation['file_not_uploaded']           = 'Datkoteka nije snimljena. Proces se nemože nastaviti.';
    $translation['already_exists']              = '%s već postoji. Promenite naziv.';
    $translation['temp_file_missing']           = 'Greška u privremenoj izvornoj datoteci. Proces se nemože nastaviti.';
    $translation['source_missing']              = 'Greška u snimljenoj izvornoj datoteci. Proces se nemože nastaviti.';
    $translation['destination_dir']             = 'Destinacioni folder ne može biti kreiran. Proces se nemože nastaviti.';
    $translation['destination_dir_missing']     = 'Destinacioni folder ne postoji. Proces se nemože nastaviti.';
    $translation['destination_path_not_dir']    = 'Destinaciona putanja nije folder. Proces se nemože nastaviti.';
    $translation['destination_dir_write']       = 'Nemoguće je snimati u destinacioni folder. Proces se nemože nastaviti.';
    $translation['destination_path_write']      = 'Nemoguće je pisati u destinacionu putanju. Proces se nemože nastaviti.';
    $translation['temp_file']                   = 'Nemoguće je kreiranje privremene datoteke. Proces se nemože nastaviti.';
    $translation['source_not_readable']         = 'Nemoguće je čitanje izvorne datoteke. Proces se nemože nastaviti.';
    $translation['no_create_support']           = 'Kreiranje %s nije podržano.';
    $translation['create_error']                = 'Greška pri kreiranju %s slike iz izvorne slike.';
    $translation['source_invalid']              = 'Nemoguće čitanje izvorne slike. Možda nije slika?.';
    $translation['gd_missing']                  = 'GD nije instaliran na serveru.';
    $translation['watermark_no_create_support'] = 'Bez kreiranja iz %s podrške, nemoguće čitanje watermark-a.';
    $translation['watermark_create_error']      = 'Bez %s podrške čitanja, nemoguće kreiranje watermark-a.';
    $translation['watermark_invalid']           = 'Nepoznat format slike, nemoguće čitanje watermark-a.';
    $translation['file_create']                 = 'Bez %s podrške kreiranja.';
    $translation['no_conversion_type']          = 'Nije definisana vrsta konverzije.';
    $translation['copy_failed']                 = 'Greška pri presnimavanju datoteke na server.';
    $translation['reading_failed']              = 'Greška pri čitanju datoteke.';   
        
?>