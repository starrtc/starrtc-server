<?php
// +------------------------------------------------------------------------+
// | class.upload.ro_RO.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Cristian Datculescu 2007. All rights reserved.           |
// | Version       0.25                                                     |
// | Last modified 23/11/2007                                               |
// | Email         cristian.datculescu@gmail.com                            |
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
 * Class upload romanian translation
 *
 * @version   0.25
 * @author    Cristian Datculescu (cristian.datculescu@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Cristian Datculescu
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Eroare de fisier. Reincercati!';
    $translation['local_file_missing']          = 'Fisierul local nu exista.';
    $translation['local_file_not_readable']     = 'Fisierul local nu poate fi citit.';
    $translation['uploaded_too_big_ini']        = 'Eroare upload fisier (marimea fisierului incarcat depaseste valoarea directivei upload_max_filesize din php.ini).';
    $translation['uploaded_too_big_html']       = 'Eroare upload fisier (marimea fisierului incarcat depaseste valoarea directivei MAX_FILE_SIZE specificata in formularul html).';
    $translation['uploaded_partial']            = 'Eroare upload fisier (fisierul incarcat a fost uploadat doar partial).';
    $translation['uploaded_missing']            = 'Eroare upload fisier (niciun fisier nu a fost uploadat).';
    $translation['uploaded_unknown']            = 'Eroare upload fisier (cod eroare necunoscut).';
    $translation['try_again']                   = 'Eroare upload fisier . Reincercati.';
    $translation['file_too_big']                = 'Marimea fisierului este prea mare.';
    $translation['no_mime']                     = 'Tipul MIME nu poate fi detectat.';
    $translation['incorrect_file']              = 'Tipul fisierului este incorect.';
    $translation['image_too_wide']              = 'Imagine prea lata.';
    $translation['image_too_narrow']            = 'Imagine prea ingusta.';
    $translation['image_too_high']              = 'Imagine prea inalta.';
    $translation['image_too_short']             = 'Imagine prea scurta.';
    $translation['ratio_too_high']              = 'Ratia imaginii prea inalta (imagine prea lata).';
    $translation['ratio_too_low']               = 'Ratia imaginii prea joasa (imagine prea inalta).';
    $translation['too_many_pixels']             = 'Imaginea are prea multi pixeli.';
    $translation['not_enough_pixels']           = 'Imaginea nu are destui pixeli.';
    $translation['file_not_uploaded']           = 'Fisier neuploadat. Nu se poate executa un proces.';
    $translation['already_exists']              = '%s exista deja. Schimbati numele fisierului.';
    $translation['temp_file_missing']           = 'Fisierul sursa temporar incorect. Nu pot executa operatiunea.';
    $translation['source_missing']              = 'Fisierul sursa uploadat incorect. Nu pot executa operatiunea.';
    $translation['destination_dir']             = 'Directorul destinatie nu poate fi creat. Nu pot executa operatiunea.';
    $translation['destination_dir_missing']     = 'Directorul destinatie nu exista. Nu pot executa operatiunea.';
    $translation['destination_path_not_dir']    = 'Calea pentru destinatie nu este un director. Nu pot executa operatiunea.';
    $translation['destination_dir_write']       = 'In directorul destinatie nu se poate scrie. Nu pot executa operatiunea.';
    $translation['destination_path_write']      = 'Calea destinatie nu permite scrierea. Nu pot executa operatiunea.';
    $translation['temp_file']                   = 'Nu pot crea fisierul temporar. Nu pot executa operatiunea.';
    $translation['source_not_readable']         = 'Fisierul sursa nu este citibil. Nu pot executa operatiunea.';
    $translation['no_create_support']           = 'Nu am suport pentru crearea din %s.';
    $translation['create_error']                = 'Eroare la crearea imaginii %s din sursa.';
    $translation['source_invalid']              = 'Nu pot citi sursa imaginii. Nu este o imagine?.';
    $translation['gd_missing']                  = 'GD nu este prezent sau nu este activat.';
    $translation['watermark_no_create_support'] = 'Nu am suport pentru crearea %s, nu pot citi watermark-ul.';
    $translation['watermark_create_error']      = 'Nu am suport pentru citirea din %s, nu pot crea watermark-ul.';
    $translation['watermark_invalid']           = 'Format de imagine necunoscut, nu pot crea watermark-ul.';
    $translation['file_create']                 = 'Nu am suport pentru crearea %s.';
    $translation['no_conversion_type']          = 'Nu este definit niciun tip de conversie.';
    $translation['copy_failed']                 = 'Eroare la copierea fisierului pe server. copy() nereusit.';
    $translation['reading_failed']              = 'Eroare la citirea fisierului.';   
        
?>