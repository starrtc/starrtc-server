<?php
// +------------------------------------------------------------------------+
// | class.upload.uk_UA.windows-1251.php                                    |
// +------------------------------------------------------------------------+
// | Copyright (c) S.Galashyn 2009. All rights reserved.                    |
// | Version       0.25                                                     |
// | Last modified 01/04/2009                                               |
// | Email         trovich@gmail.com                                        |
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
 * Class upload Ukrainian translation
 *
 * @version   0.25
 * @author    S.Galashyn (trovich@gmail.com)
 * @codepage  windows-1251
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Free to modify
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Фатальна помилка. Будь-ласка, спробуйте ще раз.';
    $translation['local_file_missing']          = 'Не можу знайти локальний файл.';
    $translation['local_file_not_readable']     = 'Не можу прочитати локальний файл.';
    $translation['uploaded_too_big_ini']        = 'Помилка завантаження файлу (розмір файлу перевищив директиву upload_max_filesize з php.ini).';
    $translation['uploaded_too_big_html']       = 'Помилка завантаження файлу (розмір файлу перевищив директиву MAX_FILE_SIZE з форми).';
    $translation['uploaded_partial']            = 'Помилка завантаження файлу (файл було завантажено лише частково).';
    $translation['uploaded_missing']            = 'Помилка завантаження файлу (файл не було завантажено).';
    $translation['uploaded_unknown']            = 'Помилка завантаження файлу (невідомий код помилки).';
    $translation['try_again']                   = 'Помилка завантаження файлу. Будь-ласка, спробуйте ще раз.';
    $translation['file_too_big']                = 'Файл завеликий.';
    $translation['no_mime']                     = 'Не можу визначити MIME-тип файлу.';
    $translation['incorrect_file']              = 'Помилковий тип файлу.';
    $translation['image_too_wide']              = 'Малюнок занадто широкий.';
    $translation['image_too_narrow']            = 'Малюнок занадто вузький.';
    $translation['image_too_high']              = 'Малюнок занадто високий.';
    $translation['image_too_short']             = 'Малюнок занадто коротки.';
    $translation['ratio_too_high']              = 'Співвідношення розмірів завелике (малюнок занадто широкий).';
    $translation['ratio_too_low']               = 'Співвідношення розмірів замале (малюнок занадто високий).';
    $translation['too_many_pixels']             = 'Малюнок має забагато пікселів.';
    $translation['not_enough_pixels']           = 'Малюнок має замало пікселів.';
    $translation['file_not_uploaded']           = 'Файл не завантажено.';
    $translation['already_exists']              = '%s вже існує. Будь-ласка, перейменуйте файл.';
    $translation['temp_file_missing']           = 'Невірний тимчасовий файл джерела.';
    $translation['source_missing']              = 'Невірний завантажений файл джерела.';
    $translation['destination_dir']             = 'Не можу створити теку призначення.';
    $translation['destination_dir_missing']     = 'Тека призначення не існує.';
    $translation['destination_path_not_dir']    = 'Шлях призначення не є текою.';
    $translation['destination_dir_write']       = 'Не можу зробити теку призначення придатною до запису.';
    $translation['destination_path_write']      = 'Тека призначення не придатна для запису.';
    $translation['temp_file']                   = 'Не можу створити тимчасовий файл.';
    $translation['source_not_readable']         = 'Не можу прочитати тимчасовий файл.';
    $translation['no_create_support']           = 'Не підтримується створення з %s.';
    $translation['create_error']                = 'Помилка при створені %s з джерела.';
    $translation['source_invalid']              = 'Не можу прочитати джерело. Це не малюнок?';
    $translation['gd_missing']                  = 'Бібліотека GD відсутня.';
    $translation['watermark_no_create_support'] = 'Не підтримується створення з %s, не можу прочитати watermark.';
    $translation['watermark_create_error']      = 'Не підтримується читання з %s, не можу створити watermark.';
    $translation['watermark_invalid']           = 'Невідомий формат малюнку, не можу прочитати watermark.';
    $translation['file_create']                 = 'Не підтримується створення з %s.';
    $translation['no_conversion_type']          = 'Не вказано тип конвертування.';
    $translation['copy_failed']                 = 'Помилка копіювання файлу на сервер. Відмова copy().';
    $translation['reading_failed']              = 'Помилка читання файлу.';   
        
?>