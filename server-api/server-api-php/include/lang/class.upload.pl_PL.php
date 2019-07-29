<?php
// +------------------------------------------------------------------------+
// | class.upload.pl_PL.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Bartosz Rychlicki 2007. All rights reserved.             |
// | Version       0.25                                                     |
// | Last modified 25/11/2007                                               |
// | Email         info@br-design.pl                                        |
// | Web           http://www.br-design.pl                                  |
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
 * Class upload polish translation
 *
 * @version   0.25
 * @author    Bartosz Rychlicki (info@br-design.pl)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Bartosz Rychlicki
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Błąd pliku. Spróbuj ponownie.';
    $translation['local_file_missing']          = 'Wskazany plik nie istnieje.';
    $translation['local_file_not_readable']     = 'Wskazany plik nie może zostać odczytany';
    $translation['uploaded_too_big_ini']        = 'Błąd przy wgrywaniu pliku (rozmiar pliku przekracza ustawienia dyrektywy upload_max_filesize w php.ini).';
    $translation['uploaded_too_big_html']       = 'Błąd przy wgrywaniu pliku (rozmiar pliku przekracza wartość pola MAX_FILE_SIZE ustawionego w formularzu HTML).';
    $translation['uploaded_partial']            = 'Błąd przy wgrywaniu pliku (plik został jedynie częściowo wgrany na serwer).';
    $translation['uploaded_missing']            = 'Błąd przy wgrywaniu pliku (brak pliku do wgrania na serwer).';
    $translation['uploaded_unknown']            = 'Błąd przy wgrywaniu pliku (nieznany kod błędu).';
    $translation['try_again']                   = 'Błąd przy wgrywaniu pliku. Spróbuj ponownie.';
    $translation['file_too_big']                = 'Plik za duży.';
    $translation['no_mime']                     = 'Nie mogę wykryć typu MIME dla pliku.';
    $translation['incorrect_file']              = 'Nieprawidłowy typ pliku.';
    $translation['image_too_wide']              = 'Obraz za szeroki.';
    $translation['image_too_narrow']            = 'Obraz za wąski.';
    $translation['image_too_high']              = 'Obraz za wysoki.';
    $translation['image_too_short']             = 'Obraz za krótki.';
    $translation['ratio_too_high']              = 'Ratio obrazu zbyt duże (obraz jest za szeroki).';
    $translation['ratio_too_low']               = 'Ratio obrazu zbyt małe (obraz jest za wysoki).';
    $translation['too_many_pixels']             = 'Obraz ma za dużo pikseli.';
    $translation['not_enough_pixels']           = 'Obraz ma za mało pikseli.';
    $translation['file_not_uploaded']           = 'Plik nie został wgrany. Mie mogę kontynuwać procesu.';
    $translation['already_exists']              = '%s już istnieje. Zmień nazwę pliku.';
    $translation['temp_file_missing']           = 'Brak prawidłowego pliku tymczasowego. Nie mogę kontynuować.';
    $translation['source_missing']              = 'Brak pliku źródłowego. Nie mogę kontynuować.';
    $translation['destination_dir']             = 'Nie można utworzyć katalogu docelowego. Nie mogę kontynuować.';
    $translation['destination_dir_missing']     = 'Katalog docelowy nie istnieje. Nie mogę kontynuować.';
    $translation['destination_path_not_dir']    = 'Ścieżka docelowa nie istnieje. Nie mogę kontynuować.';
    $translation['destination_dir_write']       = 'Nie mogę nadać praw zapisu dla katalogu docelowego. Nie mogę kontynuować.';
    $translation['destination_path_write']      = 'Nie mogę zapisać w ścieżce docelowej (brak praw). Nie mogę kontynuować.';
    $translation['temp_file']                   = 'Nie mogę utworzyć pliku tymczasowego (temp). Nie mogę kontynuować.';
    $translation['source_not_readable']         = 'Nie mogę odczytać pliku źródłowego. Nie mogę kontynuować.';
    $translation['no_create_support']           = 'Brak wsparcia dla: %s.';
    $translation['create_error']                = 'Błąd przy tworzeniu obrazu typu %s.';
    $translation['source_invalid']              = 'Nie można odczytać obrazu źródłowego. Upewnij się czy plik jest obrazem.';
    $translation['gd_missing']                  = 'Brak biblioteki GD w systemie.';
    $translation['watermark_no_create_support'] = 'Brak wsparcia dla: %s, nie mogę odczytać znaku wodnego.';
    $translation['watermark_create_error']      = 'Brak wsparcia dla: %s, nie mogę utworzyć znaku wodnego.';
    $translation['watermark_invalid']           = 'Nieznany format obrazu, nie mogę utworzyć znaku wodnego.';
    $translation['file_create']                 = 'Brak wsparcia dla: %s.';
    $translation['no_conversion_type']          = 'Nie zdefiniowano typu konwersji.';
    $translation['copy_failed']                 = 'Błąd przy kopiowaniu pliku na serwerze. Funkcja copy() nie powiodła się.';
    $translation['reading_failed']              = 'Błąd przy odczytywaniu pliku.';   
         
?>