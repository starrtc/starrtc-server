<?php
// +------------------------------------------------------------------------+
// | class.upload.es_ES.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Jorge Peréz Vega 2007. All rights reserved.              |
// | Version       0.25                                                     |
// | Last modified 17/11/2007                                               |
// | Email         jorge@cocoroto.com                                       |
// | Web           http://www.cocoroto.com                                  |
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
 * Class upload spanish translation
 *
 * @version   0.25
 * @author    Jorge Peréz Vega (jorge@cocoroto.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Jorge Peréz Vega
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Error de transmisión. Por favor, inténtalo de nuevo.';
    $translation['local_file_missing']          = 'El archivo local no existe.';
    $translation['local_file_not_readable']     = 'El archivo local no se puede leer.';
    $translation['uploaded_too_big_ini']        = 'Error al cargar el archivo (el archivo cargado excede la directiva upload_max_filesize en php.ini).';
    $translation['uploaded_too_big_html']       = 'Error al cargar el archivo (el archivo cargado excede la directiva MAX_FILE_SIZE que se especificó en el formulario html).';
    $translation['uploaded_partial']            = 'Error al cargar el archivo (el archivo sólo fue cargado parcialmente).';
    $translation['uploaded_missing']            = 'Error al cargar el archivo (el archivo no se ha cargado).';
    $translation['uploaded_unknown']            = 'Error al cargar el archivo (código de error desconocido).';
    $translation['try_again']                   = 'Error al cargar el archivo. Por favor, inténtalo de nuevo.';
    $translation['file_too_big']                = 'Archivo demasiado grande.';
    $translation['no_mime']                     = 'MIME type no se pueden detectar.';
    $translation['incorrect_file']              = 'Tipo de archivo incorrecto.';
    $translation['image_too_wide']              = 'La imagen es demasiado ancha.';
    $translation['image_too_narrow']            = 'La imagen es demasiado estrecha.';
    $translation['image_too_high']              = 'La imagen es demasiado alta.';
    $translation['image_too_short']             = 'La imagen es demasiado corta.';
    $translation['ratio_too_high']              = 'El ratio es demasiado alto (imagen demasiado ancha).';
    $translation['ratio_too_low']               = 'El ratio es demasiado bajo (imagen demasiado alta).';
    $translation['too_many_pixels']             = 'La image tiene demasiados píxeles.';
    $translation['not_enough_pixels']           = 'La imagen no tiene bastantes pixeles.';
    $translation['file_not_uploaded']           = 'El archivo no fue transmitido. Imposible continuar.';
    $translation['already_exists']              = '%s ya existe. Por favor, cambie el nombre del archivo.';
    $translation['temp_file_missing']           = 'El archivo fuente es incorrecta. Imposible continuar.';
    $translation['source_missing']              = 'El archivo transmitido es incorrecto. Imposible continuar.';
    $translation['destination_dir']             = 'El directorio de destino no puede ser creado. Imposible continuar.';
    $translation['destination_dir_missing']     = 'El directorio de destino no existe. Imposible continuar.';
    $translation['destination_path_not_dir']    = 'El path especifivado no es un directorio. Imposible continuar.';
    $translation['destination_dir_write']       = 'Directorio de destino, no se puede hacer editable. Imposible continuar.';
    $translation['destination_path_write']      = 'EL path de destino no tinee permisos de escritura o no puede ser abierto. Imposible continuar.';
    $translation['temp_file']                   = 'No se puede crear el archivo temporal. Imposible continuar.';
    $translation['source_not_readable']         = 'El archivo fuente no es legible. Imposible continuar.';
    $translation['no_create_support']           = 'Creación desde un archivo %s imposible..';
    $translation['create_error']                = 'Error en la creación de la imagen %s desde el código fuente.';
    $translation['source_invalid']              = 'Imposible leer la imagen fuente. ¿Es una imagen?.';
    $translation['gd_missing']                  = 'GD no parece estar presente.';
    $translation['watermark_no_create_support'] = 'Creación desde un archivo %s imposible, watermark no puede ser leído.';
    $translation['watermark_create_error']      = 'Error en el momento de la creación del watermark %s desde el archivo fuente.';
    $translation['watermark_invalid']           = 'Imposible leer el watermark, formato de archivo desconocido.';
    $translation['file_create']                 = 'Creación de un archivo %s imposible.';
    $translation['no_conversion_type']          = 'No se define el tipo de conversión.';
    $translation['copy_failed']                 = 'Error al copiar el archivo en el servidor. copy() ha fallado.';
    $translation['reading_failed']              = 'Error al leer el archivo.';

?>