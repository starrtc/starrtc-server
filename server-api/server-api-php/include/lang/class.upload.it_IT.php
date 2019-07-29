<?php
// +------------------------------------------------------------------------+
// | class.upload.it_IT.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Paolo Iulita 200x. All rights reserved.                  |
// | Version       0.25                                                     |
// | Last modified 25/11/2007                                               |
// | Email         paolo.iulita@gmail.com                                   |
// | Web           http://www.paoloiulita.it                                |
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
 * Class upload italian translation
 *
 * @version    0.25
 * @author     Paolo Iulita (paolo.iulita@gmail.com)
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright  Paolo Iulita 
 * @package    cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Errore nel file. Riprovare.';
    $translation['local_file_missing']          = 'Il file locale non esiste.';
    $translation['local_file_not_readable']     = 'Il file locale non puo essere letto.';
    $translation['uploaded_too_big_ini']        = 'Errore nell\'upload del file (il file caricato ha una dimensione maggiore della direttiva upload_max_filesize in php.ini).';
    $translation['uploaded_too_big_html']       = 'Errore nell\'upload del file (il file caricato ha una dimensione maggiore della direttiva MAX_FILE_SIZE specificata nel form HTML).';
    $translation['uploaded_partial']            = 'Errore nell\'upload del file (il file e stato caricato solo parzialmente).';
    $translation['uploaded_missing']            = 'Errore nell\'upload del file (non e stato caricato nessun file).';
    $translation['uploaded_unknown']            = 'Errore nell\'upload del file (codice di errore sconosciuto).';
    $translation['try_again']                   = 'Errore nell\'upload del file. Riprovare.';
    $translation['file_too_big']                = 'Il file ha dimensioni eccessive.';
    $translation['no_mime']                     = 'Il MIME type non puo essere riconosciuto.';
    $translation['incorrect_file']              = 'Tipo di file non corretto.';
    $translation['image_too_wide']              = 'Immagine troppo larga.';
    $translation['image_too_narrow']            = 'Immagine troppo stretta.';
    $translation['image_too_high']              = 'Immagine troppo alta.';
    $translation['image_too_short']             = 'Immagine troppo bassa.';
    $translation['ratio_too_high']              = 'Proporzioni dell\'immagine troppo elevate (immagine troppo larga).';
    $translation['ratio_too_low']               = 'Proporzioni dell\'immagine piccole (immagine troppo alta).';
    $translation['too_many_pixels']             = 'L\'immagine ha troppi pixel.';
    $translation['not_enough_pixels']           = 'L\'immagine ha troppo pochi pixel.';
    $translation['file_not_uploaded']           = 'File non caricato. Non e possibile terminare il processo.';
    $translation['already_exists']              = '%s esiste gia. Cambiare il nome del file.';
    $translation['temp_file_missing']           = 'Il file in temp non e corretto. Non e possibile terminare il processo.';
    $translation['source_missing']              = 'La fonte di caricamento non e corretta. Non e possibile terminare il processo.';
    $translation['destination_dir']             = 'La cartella di destinazione non puo essere creata. Non e possibile terminare il processo.';
    $translation['destination_dir_missing']     = 'La cartella di destinazione non esiste. Non e possibile terminare il processo.';
    $translation['destination_path_not_dir']    = 'Il percorso di destinazione non e una cartella. Non e possibile terminare il processo.';
    $translation['destination_dir_write']       = 'I permessi sulla cartella di destinazione non possono essere modificati. Non e possibile terminare il processo.';
    $translation['destination_path_write']      = 'I permessi sulla cartella di destinazione non consentono la scrittura. Non e possibile terminare il processo.';
    $translation['temp_file']                   = 'Non e possibile creare il file temporaneo. Non e possibile terminare il processo.';
    $translation['source_not_readable']         = 'Il file sorgente non e leggibile. Non e possibile terminare il processo.';
    $translation['no_create_support']           = '%s: nessuna creazione da questo supporto.';
    $translation['create_error']                = 'Errore nella creazione dell\'immagine %s dalla fonte sorgente.';
    $translation['source_invalid']              = 'Non e possibile leggere la fonte dell\'immagine. Non una immagine?.';
    $translation['gd_missing']                  = 'Sembra che le librerie GD non siano presenti.';
    $translation['watermark_no_create_support'] = '%s: nessuna creazione da questo supporto, non e possibile leggere il watermark.';
    $translation['watermark_create_error']      = '%s: nessun supporto in lettura, non e possibile leggere il watermark.';
    $translation['watermark_invalid']           = 'Formato dell\'immagine sconosciuto, non e possibile leggere il watermark.';
    $translation['file_create']                 = '%s: nessuna creazione da questo supporto.';
    $translation['no_conversion_type']          = 'Non e stata definito il tipo di conversione.';
    $translation['copy_failed']                 = 'Errore durante la copia del file sul server. copy() fallito.';
    $translation['reading_failed']              = 'Errore nella lettura del file.';   
        
?>