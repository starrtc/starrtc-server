<?php
// +------------------------------------------------------------------------+
// | class.upload.mk_MK.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Zoran Tanevski 2011. All rights reserved.                |
// | Version       0.28                                                     |
// | Last modified 10/09/2011                                               |
// | Email         zoran.tanevski@gmail.com                                 |
// | Web           http://www.zorantanevski.com                             |
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
 * Class upload Macedonian (македонски) translation
 *
 * @version   0.28
 * @author    Zoran Tanevski (zoran.tanevski@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Zoran Tanevski
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Грешка во датотеката. Ве молиме пробајте повторно.';
    $translation['local_file_missing']          = 'Локалната датотека не постои.';
    $translation['local_file_not_readable']     = 'Локалната датотека е нечитлива.';
    $translation['uploaded_too_big_ini']        = 'Грешка при прикачувањето (датотеката е поголема од максимално дозволената големина зададена во upload_max_filesize директивата во php.ini).';
    $translation['uploaded_too_big_html']       = 'Грешка при прикачувањето (датотеката ја надминува големината зададена во the MAX_FILE_SIZE директивата која е наведена во хтмл формуларот.).';
    $translation['uploaded_partial']            = 'Грешка при прикачувањето (датотеката беше само делумно прикачена).';
    $translation['uploaded_missing']            = 'Грешка при прикачувањето (датотеката не е прикачена).';
    $translation['uploaded_no_tmp_dir']         = 'Грешка при прикачувањето (недостига привремената - temp - папка).';
    $translation['uploaded_cant_write']         = 'Грешка при прикачувањето (неуспешно запишување на датотеката на дискот).';
    $translation['uploaded_err_extension']      = 'Грешка при прикачувањето (прикачувањето стопирано од екстензија).';
    $translation['uploaded_unknown']            = 'Грешка при прикачувањето (непозната грешка).';
    $translation['try_again']                   = 'Грешка при прикачувањето. Ве молиме пробајте повторно.';
    $translation['file_too_big']                = 'Датотеката преголема.';
    $translation['no_mime']                     = 'MIME типот не може да се определи.';
    $translation['incorrect_file']              = 'Погрешен тип на датотека.';
    $translation['image_too_wide']              = 'Сликата е преширока.';
    $translation['image_too_narrow']            = 'Сликата е претесна.';
    $translation['image_too_high']              = 'Сликата е превисока.';
    $translation['image_too_short']             = 'Сликата е прениска.';
    $translation['ratio_too_high']              = 'Размерот на сликата е преголем (сликата е преширока).';
    $translation['ratio_too_low']               = 'Размерот на сликата е премал (сликата е превисока).';
    $translation['too_many_pixels']             = 'Сликата има премногу пиксели.';
    $translation['not_enough_pixels']           = 'Сликата има недоволно пиксели.';
    $translation['file_not_uploaded']           = 'Датотеката не е прикачена. Процесот не може да продолжи.';
    $translation['already_exists']              = '%s веќе постои. Ве молиме променете го името на датотеката.';
    $translation['temp_file_missing']           = 'Погрешна привремена -temp- изворна датотека. Процесот не може да продолжи.';
    $translation['source_missing']              = 'Погрешна прикачена изворна датотека. Процесот не може да продолжи.';
    $translation['destination_dir']             = 'Дестинацискиот директориум не може да се креира. Процесот не може да продолжи.';
    $translation['destination_dir_missing']     = 'Дестинацискиот директориум не постои. Процесот не може да продолжи.';
    $translation['destination_path_not_dir']    = 'Дестинацискиот пат не е директориум. Процесот не може да продолжи.';
    $translation['destination_dir_write']       = 'Не може да се овозможи пишување во дестинацискиот директориум. Процесот не може да продолжи.';
    $translation['destination_path_write']      = 'Не може да се пишува во дестинацискиот директориум. Процесот не може да продолжи.';
    $translation['temp_file']                   = 'Не може да се креира привремена датотека. Процесот не може да продолжи.';
    $translation['source_not_readable']         = 'Не може да се чита изворната датотека. Процесот не може да продолжи.';
    $translation['no_create_support']           = 'Креирање на %s не е поддржано.';
    $translation['create_error']                = 'Грешка во креирањето %s слика од изворната датотека.';
    $translation['source_invalid']              = 'Не е возможно читање на изворната слика. Можеби не е слика?.';
    $translation['gd_missing']                  = 'GD библиотеката не е инсталирана.';
    $translation['watermark_no_create_support'] = 'Не постои креирано од %s поддршка, невозможно е читањето на watermak-от.';
    $translation['watermark_create_error']      = 'Нема %s поддршка за читање, невозможно креирање на watermak.';
    $translation['watermark_invalid']           = 'Непознат формат на слика, невозможно е читањето на watermak.';
    $translation['file_create']                 = 'Без %s поддршка за креирање.';
    $translation['no_conversion_type']          = 'Не е дефиниран видот на конверзија.';
    $translation['copy_failed']                 = 'Грешка при копирањето на датотеката на сервер.';
    $translation['reading_failed']              = 'Грешка при читањето на датотеката.';

?>