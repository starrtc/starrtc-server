
<?php
// +------------------------------------------------------------------------+
// | class.upload.tr_TR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Volkan Metin 2008. All rights reserved.                  |
// | Version       0.32                                                     |
// | Last modified 30/08/2013                                               |
// | Email         metinsoft@gmail.com                                      |
// | Web           http://www.metinsoft.com                                 |
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
 * Class upload Turkish translation
 *
 * @version   0.25
 * @author    Volkan Metin (metinsoft@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Volkan Metin
 * @edit Taner İnanır
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Hata oluştu. Lütfen tekrar deneyiniz.';
    $translation['local_file_missing']          = 'Dosya bulunamadı.';
    $translation['local_file_not_readable']     = 'Dosya okunamadı.';
    $translation['uploaded_too_big_ini']        = 'Hata oluştu (izin verilen boyuttan büyük dosya yükleyemezsiniz. Ancak php.ini dosyasından upload_max_filesize değerini yükselterek tekrar deneyebilirsiniz.).';
    $translation['uploaded_too_big_html']       = 'Hata oluştu (sayfanızda belirttiğiniz MAX_FILE_SIZE boyutundan büyük bir dosya yükleyemezsiniz.).';
    $translation['uploaded_partial']            = 'Hata oluştu (dosyanın sadece bir kısmı yüklenebildi).';
    $translation['uploaded_missing']            = 'Hata oluştu (dosya seçilmemiş).';
    $translation['uploaded_unknown']            = 'Hata oluştu (hata tesbit edilemedi).';
    $translation['try_again']                   = 'Hata oluştu. Lütfen tekrar deneyiniz.';
    $translation['file_too_big']                = 'Dosya izin verilenden büyük.';
    $translation['no_mime']                     = 'Dosya türü bulunamadı.';
    $translation['incorrect_file']              = 'Bu dosyanın uzantısı geçersiz.';
    $translation['image_too_wide']              = 'Fotoğraf izin verilenden çok geniş.';
    $translation['image_too_narrow']            = 'Fotoğraf izin verilenden çok dar.';
    $translation['image_too_high']              = 'Fotoğraf izin verilenden çok uzun.';
    $translation['image_too_short']             = 'Fotoğraf izin verilenden çok kısa.';
    $translation['ratio_too_high']              = 'Fotoğraf oranı çok yüksek (fotoğraf çok geniş).';
    $translation['ratio_too_low']               = 'Fotoğraf oranı çok düşük (fotoğraf çok uzun).';
    $translation['too_many_pixels']             = 'Fotoğraf izin verilenden büyük.';
    $translation['not_enough_pixels']           = 'Fotoğraf izin verilenden küçük.';
    $translation['file_not_uploaded']           = 'Dosya yüklenemedi. İşlem sonlandırıldı.';
    $translation['already_exists']              = '%s dosyası zaten var. Lütfen dosyanızın ismini değiştirerek tekrar deneyiniz.';
    $translation['temp_file_missing']           = 'Temp dizini doğru belirtilmemiş. İşlem sonlandırıldı.';
    $translation['source_missing']              = 'Dosyanızın içeriğinde izin vermeyen unsurlar var. İşlem sonlandırıldı.';
    $translation['destination_dir']             = 'Dosyaların yükleneceği dizin oluşturulamadı. İşlem sonlandırıldı.';
    $translation['destination_dir_missing']     = 'Dosyaların yükleneceği dizin oluşturulmamış. İşlem sonlandırıldı.';
    $translation['destination_path_not_dir']    = 'Dosyaların yükleneceği adres bir dizin değil. İşlem sonlandırıldı.';
    $translation['destination_dir_write']       = 'Dosyaların yükleneceği dizinin yazma izinlerinde(CHMOD) problem var. İşlem sonlandırıldı.';
    $translation['destination_path_write']      = 'Dosyaların yükleneceği adresin yazma izinlerinde(CHMOD) problem var. İşlem sonlandırıldı.';
    $translation['temp_file']                   = 'Geçici dizine (temp) yazılamıyor. İzinleri kontrol etmelisiniz. İşlem sonlandırıldı.';
    $translation['source_not_readable']         = 'Dosyanın içeriği okunamadı. İşlem sonlandırıldı.';
    $translation['no_create_support']           = '%s dosyası oluşturulamadı.';
    $translation['create_error']                = 'Kaynaktan %s fotoğrafı oluşturulurken hata oluştu.';
    $translation['source_invalid']              = 'Fotoğraf dosyası okunamadı. Dosyanın bir fotoğraf olduğundan emin misiniz?';
    $translation['gd_missing']                  = 'Sunucuda GD kütüphanesi olmadığı için işleme devam edemiyorsunuz.';
    $translation['watermark_no_create_support'] = '%s fotoğrafı oluşturulamadığı için filigran oluşturulamadı.';
    $translation['watermark_create_error']      = '%s fotoğrafı okunamadığı için filigran oluşturulamadı.';
    $translation['watermark_invalid']           = 'Bilinmeyen dosya türü. Filigran oluşturulamadı.';
    $translation['file_create']                 = '%s dosyası oluşturulamadı.';
    $translation['no_conversion_type']          = 'Belirtilen dosya türü dönüştürülemedi.';
    $translation['copy_failed']                 = 'Dosya kopyalanırken hata oluştu. copy() işlemi başarısız.';
    $translation['reading_failed']              = 'Dosya okunurken hata oluştu.';   
        
?>

