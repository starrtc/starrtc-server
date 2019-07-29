<?php
// +------------------------------------------------------------------------+
// | class.upload.de_DE.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) some dude from Germany 2010. All rights reserved.        |
// | Version       0.25                                                     |
// | Last modified 09/10/2010                                               |
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
 * Class upload german translation
 *
 * @version   0.25
 * @author    some dude from Germany
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright some dude from Germany
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Dateifehler. Bitte versuchen Sie es erneut.';
    $translation['local_file_missing']          = 'Lokale Datei existiert nicht.';
    $translation['local_file_not_readable']     = 'Lokale Datei ist nicht lesbar.';
    $translation['uploaded_too_big_ini']        = 'Datei Ladefehler (die hochgeladene Datei überschreitet die upload_max_filesize Anweisung der php.ini).';
    $translation['uploaded_too_big_html']       = 'Datei Ladefehler (die hochgeladene Datei überschreitet die MAX_FILE_SIZE Anweisung, die im html Formular definiert wurde).';
    $translation['uploaded_partial']            = 'Datei Ladefehler (die hochgeladene Datei wurde nur teilweise hochgeladen).';
    $translation['uploaded_missing']            = 'Datei Ladefehler (es wurde keine Datei hochgeladen).';
    $translation['uploaded_unknown']            = 'Datei Ladefehler (unbekannter Fehler Code).';
    $translation['try_again']                   = 'Datei Ladefehler. Bitte versuchen Sie es erneut.';
    $translation['file_too_big']                = 'Die Datei ist zu groß.';
    $translation['no_mime']                     = 'MIME type kann nicht erkannt werden.';
    $translation['incorrect_file']              = 'Falscher Dateityp.';
    $translation['image_too_wide']              = 'Bild zu breit.';
    $translation['image_too_narrow']            = 'Bild zu schmal.';
    $translation['image_too_high']              = 'Bild zu hoch.';
    $translation['image_too_short']             = 'Bild zu kurz.';
    $translation['ratio_too_high']              = 'Bildverhältnis zu hoch (Bild zu breit).';
    $translation['ratio_too_low']               = 'Bildverhältnis zu gering (Bild zu hoch).';
    $translation['too_many_pixels']             = 'Das Bild hat zu viele Pixel.';
    $translation['not_enough_pixels']           = 'Das Bild hat nicht genug Pixel.';
    $translation['file_not_uploaded']           = 'Datei nicht hochgeladen. Prozess nicht ausführbar.';
    $translation['already_exists']              = '%s existiert bereits. Bitte ändern Sie den Dateinamen.';
    $translation['temp_file_missing']           = 'Keine korrekte temporäre Originaldatei. Prozess nicht ausführbar.';
    $translation['source_missing']              = 'Keine korrekte Upload Originaldatei. Prozess nicht ausführbar.';
    $translation['destination_dir']             = 'Zielverzeichnis kann nicht erstellt werden. Prozess nicht ausführbar.';
    $translation['destination_dir_missing']     = 'Zielverzeichnis existiert nicht. Prozess nicht ausführbar.';
    $translation['destination_path_not_dir']    = 'Zielpfad ist kein Verzeichnis. Prozess nicht ausführbar.';
    $translation['destination_dir_write']       = 'Zielverzeichnis ist nicht beschreibbar. Prozess nicht ausführbar.';
    $translation['destination_path_write']      = 'Zielpfad ist nicht beschreibbar. Prozess nicht ausführbar.';
    $translation['temp_file']                   = 'Kann keine temporäre Datei erstellen. Prozess nicht ausführbar.';
    $translation['source_not_readable']         = 'Originaldatei ist nicht lesbar. Prozess nicht ausführbar.';
    $translation['no_create_support']           = 'Erstellung von %s wird nicht unterstützt.';
    $translation['create_error']                = 'Fehler beim Erstellen des %s Bildes von der Originaldatei.';
    $translation['source_invalid']              = 'Originaldatei nicht lesbar. Kein Bild?';
    $translation['gd_missing']                  = 'GD scheint nicht präsent zu sein.';
    $translation['watermark_no_create_support'] = 'Erstellung von %s nicht möglich, da Wasserzeichen nicht lesbar.';
    $translation['watermark_create_error']      = 'Erstellung von %s nicht möglich, da Wasserzeichen nicht erstellbar.';
    $translation['watermark_invalid']           = 'Unbekanntes Bildformat, Wasserzeichen nicht lesbar.';
    $translation['file_create']                 = 'Erstellung %s wird nicht unterstützt.';
    $translation['no_conversion_type']          = 'Kein Konvertierungstyp definiert.';
    $translation['copy_failed']                 = 'Fehler beim Kopieren der Datei auf den Server. Kopiervorgang missglückt.';
    $translation['reading_failed']              = 'Fehler beim Lesen der Datei.';   
        
?>
