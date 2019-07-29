<?php
// +------------------------------------------------------------------------+
// | class.upload.id_ID.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Irwan Butar Butar 2008. All rights reserved.             |
// | Version       0.1                                                      |
// | Last modified 07/07/2008                                               |
// | Email         irwansah.putra@gmail.com                                 |
// | Web           http://www.kupluk.com                                    |
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
 * Class upload Indonesian (Bahasa) translation.
 * Based on class.upload version 0.25
 *
 * @version   0.1 (2008-07-07)
 * @author    Irwan Butar Butar (irwansah.putra@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Irwan Butar Butar 2008. All rights reserved.
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Berkas mengalami kerusakan. Mohon coba lagi.'; // 'File error. Please try again.';
    $translation['local_file_missing']          = 'Berkas yang akan diunggah tidak ditemukan.'; // Local file doesn\'t exist.';
    $translation['local_file_not_readable']     = 'berkas yang akan diunggah tidak dapat dibaca.'; // Local file is not readable.';
    $translation['uploaded_too_big_ini']        = 'Pengunggahan tidak berhasil (ukuran berkas melebihi ukuran upload_max_filesize dalam php.ini).'; // 'File upload error (the uploaded file exceeds the upload_max_filesize directive in php.ini).';
    $translation['uploaded_too_big_html']       = 'Pengunggahan tidak berhasil (ukuran berkas melebihi ukuran MAX_FILE_SIZE yang disebutkan dalam form di html).'; // File upload error (the uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form).';
    $translation['uploaded_partial']            = 'Pengunggahan tidak berhasil (berkas yang terunggah baru sebahagian saja).'; // File upload error (the uploaded file was only partially uploaded).';
    $translation['uploaded_missing']            = 'Pengunggahan tidak berhasil (tidak ada berkas yang berhasil terunggah).' ; // 'File upload error (no file was uploaded).';
    $translation['uploaded_unknown']            = 'Pengunggahan tidak berhasil (kode kesalahan tidak dikenali).' ; // 'File upload error (unknown error code).';
    $translation['try_again']                   = 'Pengunggahan tidak berhasil. Mohon coba lagi.'; // 'File upload error. Please try again.';
    $translation['file_too_big']                = 'Ukuran berkas terlalu besar.'; // 'File too big.';
    $translation['no_mime']                     = 'Tipe MIME tidak dapat dideteksi.'; // 'MIME type can\'t be detected.';
    $translation['incorrect_file']              = 'Tipe berkas tidak sesuai.'; // 'Incorrect type of file.';
    $translation['image_too_wide']              = 'Ukuran gambar terlalu lebar.'; // 'Image too wide.';
    $translation['image_too_narrow']            = 'Ukuran gambar terlalu sempit.'; // 'Image too narrow.';
    $translation['image_too_high']              = 'Ukuran gambar terlalu tinggi.'; // 'Image too high.';
    $translation['image_too_short']             = 'Ukuran gambar terlalu pendek.'; // 'Image too short.';
    $translation['ratio_too_high']              = 'Ukuran rasio gambar terlalu tinggi (ukuran gambar terlalu lebar).'; // 'Image ratio too high (image too wide).';
    $translation['ratio_too_low']               = 'Ukuran rasio gambar terlalu rendah (ukuran gambar terlalu tinggi).'; // 'Image ratio too low (image too high).';
    $translation['too_many_pixels']             = 'Pixel pada gambar terlalu banyak.'; // 'Image has too many pixels.';
    $translation['not_enough_pixels']           = 'Pixel pada gambar terlalu sedikit.'; // 'Image has not enough pixels.';
    $translation['file_not_uploaded']           = 'Berkas tidak berhasil diunggah. Tidak dapat meneruskan proses.'; // 'File not uploaded. Can\'t carry on a process.';
    $translation['already_exists']              = 'Gambar %s sudah ada. Mohon ubah nama berkasnya.'; // '%s already exists. Please change the file name.';
    $translation['temp_file_missing']           = 'Berkas sementara tidak sesuai. Tidak dapat meneruskan proses.'; // 'No correct temp source file. Can\'t carry on a process.';
    $translation['source_missing']              = 'Berkas yang diunggah tidak sesuai. Tidak dapat meneruskan proses.'; // 'No correct uploaded source file. Can\'t carry on a process.';
    $translation['destination_dir']             = 'Direktori tujuan tidak dapat dibuat. Tidak dapat meneruskan proses.'; // 'Destination directory can\'t be created. Can\'t carry on a process.';
    $translation['destination_dir_missing']     = 'Direktori tujuan tidak ditemukan. Tidak dapat meneruskan proses.'; // 'Destination directory doesn\'t exist. Can\'t carry on a process.';
    $translation['destination_path_not_dir']    = 'Tujuan pengunggahan bukan sebuah direktori. Tidak dapat meneruskan proses.'; // 'Destination path is not a directory. Can\'t carry on a process.';
    $translation['destination_dir_write']       = 'Direktori tujuan tidak dapat dibuat menjadi dapat ditulisi. Tidak dapat meneruskan proses.'; // 'Destination directory can\'t be made writeable. Can\'t carry on a process.';
    $translation['destination_path_write']      = 'Direktori tujuan tidak dapat ditulisi. Tidak dapat meneruskan proses.'; // 'Destination path is not a writeable. Can\'t carry on a process.';
    $translation['temp_file']                   = 'Tidak dapat membuat berkas sementara. Tidak dapat meneruskan proses.'; // 'Can\'t create the temporary file. Can\'t carry on a process.';
    $translation['source_not_readable']         = 'Berkas sumber tidak dapat dibaca. Tidak dapat meneruskan proses.'; // 'Source file is not readable. Can\'t carry on a process.';
    $translation['no_create_support']           = 'Tidak dapat membuat dari %s pendukung.'; // 'No create from %s support.';
    $translation['create_error']                = 'Tidak berhasil membuat gambar %s dari sumber.'; // 'Error in creating %s image from source.';
    $translation['source_invalid']              = 'Tidak dapat membaca gambar sumber. Bukan merupakan sebuah gambar?'; // 'Can\'t read image source. Not an image?.';
    $translation['gd_missing']                  = 'Librari pendukung GD tidak ditemukan.'; // 'GD doesn\'t seem to be present.';
    $translation['watermark_no_create_support'] = 'Tidak dapat membuat %s, tidak dapat membaca watermark.'; // 'No create from %s support, can\'t read watermark.';
    $translation['watermark_create_error']      = 'Tidak dapat membaca %s, tidak dapat membuat watermark.'; // 'No %s read support, can\'t create watermark.';
    $translation['watermark_invalid']           = 'Format gambar tidak dikenali, tidak dapat membaca watermark.'; // 'Unknown image format, can\'t read watermark.';
    $translation['file_create']                 = 'Tidak dapat membuat %s.'; // 'No %s create support.';
    $translation['no_conversion_type']          = 'Tipe percakapan belum didefenisikan.'; // 'No conversion type defined.';
    $translation['copy_failed']                 = 'Tidak berhasil menyalin berkas di server. copy() tidak berhasil.'; // 'Error copying file on the server. copy() failed.';
    $translation['reading_failed']              = 'Tidak berhasil membaca berkas.'; // 'Error reading the file.';

?>