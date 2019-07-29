<?php
// +------------------------------------------------------------------------+
// | class.upload.vn_VN.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) junzennt 2009. All rights reserved.                      |
// | Version       0.25                                                     |
// | Last modified 22/01/2009                                               |
// | Email         junzennt@gmail.com                                       |
// | Web           http://www.junzecom.com                                  |
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
 * Class upload vietnamese translation
 *
 * @version   0.25
 * @author    junzennt (junzennt@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Nguyen Nhu Tuan
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Có lỗi file. Hãy thử lại lần nữa.';
    $translation['local_file_missing']          = 'Thư mục file không tồn tại.';
    $translation['local_file_not_readable']     = 'Thư mục file không ghi được.';
    $translation['uploaded_too_big_ini']        = 'Lỗi upload file (dung lượng file upload vượt quá chỉ định trong php.ini).';
    $translation['uploaded_too_big_html']       = 'Lỗi upload file (dung lượng file upload vượt quá chỉ định trong html form).';
    $translation['uploaded_partial']            = 'Lỗi upload file (file upload chỉ upload lên được một phần).';
    $translation['uploaded_missing']            = 'Lỗi upload file (không upload được file).';
    $translation['uploaded_unknown']            = 'Lỗi upload file (không hiểu lỗi code).';
    $translation['try_again']                   = 'Lỗi upload file. Hãy thử lại lần nữa.';
    $translation['file_too_big']                = 'File quá lớn.';
    $translation['no_mime']                     = 'Không thể tìm thấy kiểu MIME.';
    $translation['incorrect_file']              = 'Sai kiểu file.';
    $translation['image_too_wide']              = 'Ảnh quá rộng.';
    $translation['image_too_narrow']            = 'Ảnh quá hẹp.';
    $translation['image_too_high']              = 'Ảnh quá cao.';
    $translation['image_too_short']             = 'Ảnh quá ngắn.';
    $translation['ratio_too_high']              = 'Tỷ lệ ảnh quá cao (ảnh quá rộng).';
    $translation['ratio_too_low']               = 'Tỷ lệ ảnh quá thấp (ảnh quá cao).';
    $translation['too_many_pixels']             = 'Ảnh có quá nhiều pixels.';
    $translation['not_enough_pixels']           = 'Ảnh không đủ pixels.';
    $translation['file_not_uploaded']           = 'File không upload được. Không thể thực hiện tiếp.';
    $translation['already_exists']              = '%s đã tồn tại. Hãy đổi lại tên file.';
    $translation['temp_file_missing']           = 'Sai đường dẫn thư mục temp. Không thể thực hiện tiếp.';
    $translation['source_missing']              = 'Sai tập tin nguồn tải lên. Không thể thực hiện tiếp.';
    $translation['destination_dir']             = 'Không thể tạo thư mục đích. Không thể thực hiện tiếp.';
    $translation['destination_dir_missing']     = 'Thư mục đích không tồn tại. Không thể thực hiện tiếp.';
    $translation['destination_path_not_dir']    = 'Đường dẫn đích không phải là thư mục. Không thể thực hiện tiếp.';
    $translation['destination_dir_write']       = 'Thư mục đích không thể ghi được. Không thể thực hiện tiếp.';
    $translation['destination_path_write']      = 'Đường dẫn đích không ghi được. Không thể thực hiện tiếp.';
    $translation['temp_file']                   = 'Không thể tạo được file tạm. Không thể thực hiện tiếp.';
    $translation['source_not_readable']         = 'File nguồn không đọc được. Không thể thực hiện tiếp.';
    $translation['no_create_support']           = 'Không hỗ trợ tạo từ %s .';
    $translation['create_error']                = 'Lỗi trong khi tạo ảnh %s từ nguồn.';
    $translation['source_invalid']              = 'Không thể đọc ảnh nguồn. Không phải là ảnh ?.';
    $translation['gd_missing']                  = 'GD dường như không có.';
    $translation['watermark_no_create_support'] = 'Không hỗ trợ tạo từ %s , không thể đọc watermark.';
    $translation['watermark_create_error']      = 'Không hỗ trợ đọc %s , không thể tạo watermark.';
    $translation['watermark_invalid']           = 'Không biết định dạng ảnh, không thể đọc watermark.';
    $translation['file_create']                 = 'Không hỗ trợ tạo %s .';
    $translation['no_conversion_type']          = 'Không chuyển đổi kiểu đã định nghĩa.';
    $translation['copy_failed']                 = 'Lỗi khi copy file trên server. copy() lỗi.';
    $translation['reading_failed']              = 'Lỗi khi đọc file.';   
        
?>