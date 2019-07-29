<?php
// +------------------------------------------------------------------------+
// | class.upload.fa_IR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Morteza Karimi 2015. All rights reserved.                |
// | Version       0.25                                                     |
// | Last modified 13/04/2015                                               |
// | Email         me@morteza-karimi.ir                                     |
// | Web           http://www.morteza-karimi.ir                             |
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
 * Class upload Persian translation
 *
 * @version    0.28
 * @author     Morteza Karimi <me@morteza-karimi.ir>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright  Morteza Karimi
 * @package    cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'خطای فایل. لطفا دوباره تلاش کنید.';
    $translation['local_file_missing']          = 'فایل محلی وجود ندارد.';
    $translation['local_file_not_readable']     = 'فایل محلی قابل خواندن نیست.';
    $translation['uploaded_too_big_ini']        = 'خطای بارگذاری فایل (حجم فایل بارگذاری شده بیشتر از مقدار تعریف شده برای upload_max_filesize در php.ini است).';
    $translation['uploaded_too_big_html']       = 'خطای بارگذاری فایل (حجم فایل بارگذاری شده بیشتر از مقدار تعریف شده برای  MAX_FILE_SIZE در کد html فرم ورودی است).';
    $translation['uploaded_partial']            = 'خطای بارگذاری فایل (تنها بخشی از فایل بارگذاری شده).';
    $translation['uploaded_missing']            = 'خطای بارگذاری فایل (هیچ فایلی بارگذاری نشده است).';
    $translation['uploaded_no_tmp_dir']         = 'خطای بارگذاری فایل (پوشه فایل موقت وجود ندارد).';
    $translation['uploaded_cant_write']         = 'خطای بارگذاری فایل (نوشتن فایل بر روی دیسک شکست خورد).';
    $translation['uploaded_err_extension']      = 'خطای بارگذاری فایل (بارگذاری فایل بخاطر پسوند فایل متوقف شد).';
    $translation['uploaded_unknown']            = 'خطای بارگذاری فایل (خطای نامشخص).';
    $translation['try_again']                   = 'خطای بارگذاری فایل. دوباره تلاش کنید.';
    $translation['file_too_big']                = 'فایل بسیار بزرگ است.';
    $translation['no_mime']                     = 'نوع MIME تشخیص داده نشد.';
    $translation['incorrect_file']              = 'نوع فایل اشتباه است.';
    $translation['image_too_wide']              = 'عرض تصویر بسیار زیاد است.';
    $translation['image_too_narrow']            = 'عرض تصویر بسیار کم است.';
    $translation['image_too_high']              = 'ارتفاع تصویر بسیار زیاد است.';
    $translation['image_too_short']             = 'ارتفاع تصویر بسیار کم است.';
    $translation['ratio_too_high']              = 'نسبت تصویر بیش از حد بالاست (تصویر بسیار عریض است).';
    $translation['ratio_too_low']               = 'نسبت تصویر بسیار پایین است (تصویر بسیار مرتفع(طویل)است).';
    $translation['too_many_pixels']             = 'تعداد نقاط (عنصر تصویر) بسیار زیاد است.';
    $translation['not_enough_pixels']           = 'تعداد نقاط تصویر کافی است.';
    $translation['file_not_uploaded']           = 'فایل بارگذاری نشده است.امکان ادامه پردازش وجود ندارد..';
    $translation['already_exists']              = '%s در حال حاضر وجود دارد. لطفا نام فایل را عوض کنید.';
    $translation['temp_file_missing']           = 'منبع پوشه فایل موقت صحیح نمی باشد. امکان ادامه پردازش وجود ندارد.';
    $translation['source_missing']              = 'منبع فایل بارگذاری شده صحیح نیست. امکان ادامه پردازش وجود ندارد.';
    $translation['destination_dir']             = 'شاخه مقصد ساخته نمیشود.امکان ادامه پردازش وجود ندارد.';
    $translation['destination_dir_missing']     = 'شاخه مقصد وجود ندارد. امکان ادامه پردازش وجود ندارد.';
    $translation['destination_path_not_dir']    = 'مسیر مقصد یک شاخه نیست. امکان ادامه پردازش وجود ندارد.';
    $translation['destination_dir_write']       = 'مقصد شاخه قابل نوشتن نیست. امکان ادامه پردازش وجود ندارد.';
    $translation['destination_path_write']      = 'مسیر مقصد قابل نوشتن نیست. امکان ادامه پردازش وجود ندارد.';
    $translation['temp_file']                   = 'فایل موقتی نمیتوان ساخت. امکان ادامه پردازش وجود ندارد.';
    $translation['source_not_readable']         = 'منبع فایل قابل خواندن نیست. امکان ادامه پردازش وجود ندارد';
    $translation['no_create_support']           = 'را ندارد %s پشتیبانی.';
    $translation['create_error']                = '  از منبع%s خطای ساخت عکس.';
    $translation['source_invalid']              = 'منبع عکس قابل خواندن نیست.فایل مور نظر عکس نیست.';
    $translation['gd_missing']                  = 'نیست GDدر حال حاضر.';
    $translation['watermark_no_create_support'] = 'پشتیبانی را ندارد . علامت سفید چاپ خوانده نمی شود.';
    $translation['watermark_create_error']      = 'پشتیبانی خواندن را ندارد. علامت سفید چاپ خوانده نمی شود.';
    $translation['watermark_invalid']           = 'اندازه عکس مشخص نیست. علامت سفید چاپ خوانده نمیشود.';
    $translation['file_create']                 = '  قابل ساخت نیست %s پشتیبانی.';
    $translation['no_conversion_type']          = 'هیچ نوع تبدیل پیدا نشد.';
    $translation['copy_failed']                 = 'خطای کپی فایل روی سرور.فرایند کپی با شکست مواجه شد.';
    $translation['reading_failed']              = 'خطای خواندن فایل.';

?>
