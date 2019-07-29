<?php
// +------------------------------------------------------------------------+
// | class.upload.ja_JP.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Kenta Ozaki 2012. All rights reserved.                   |
// | Version       0.25                                                     |
// | Last modified 09/05/2012                                               |
// | Email         kenta.ozaki@gmail.com                                    |
// | Web           http://www.facebook.com/Kenta.Ozaki                      |
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
 * Class upload Japanese translation
 *
 * @version   0.28
 * @author    Kenta Ozaki (kenta.ozaki@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Kenta Ozaki
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'ファイルエラー: 再度実行してください。';
    $translation['local_file_missing']          = 'ローカルファイルが存在しません。';
    $translation['local_file_not_readable']     = 'ローカルファイルの読み込みに失敗しました。';
    $translation['uploaded_too_big_ini']        = 'ファイルアップロードに失敗しました。 (the uploaded file exceeds the upload_max_filesize directive in php.ini).';
    $translation['uploaded_too_big_html']       = 'ファイルアップロードに失敗しました。 (the uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form).';
    $translation['uploaded_partial']            = 'ファイルアップロードに失敗しました。 (the uploaded file was only partially uploaded).';
    $translation['uploaded_missing']            = 'ファイルアップロードに失敗しました。 (no file was uploaded).';
    $translation['uploaded_no_tmp_dir']         = 'ファイルアップロードに失敗しました。 (missing a temporary folder).';
    $translation['uploaded_cant_write']         = 'ファイルアップロードに失敗しました。 (failed to write file to disk).';
    $translation['uploaded_err_extension']      = 'ファイルアップロードに失敗しました。 (file upload stopped by extension).';
    $translation['uploaded_unknown']            = 'ファイルアップロードに失敗しました。 (unknown error code).';
    $translation['try_again']                   = 'ファイルアップロードに失敗しました。 再度実行してください。';
    $translation['file_too_big']                = 'ファイルが大きすぎます。';
    $translation['no_mime']                     = 'MIMEタイプが検出できません。';
    $translation['incorrect_file']              = 'ファイル形式が異なります。';
    $translation['image_too_wide']              = '画像幅が広すぎます。';
    $translation['image_too_narrow']            = '画像幅が狭すぎます。';
    $translation['image_too_high']              = '画像幅が高すぎます。';
    $translation['image_too_short']             = '画像幅が低すぎます。';
    $translation['ratio_too_high']              = '画像比率が高すぎます。 (画像幅が広すぎます)';
    $translation['ratio_too_low']               = '画像比率が低すぎます (画像幅が高すぎます)';
    $translation['too_many_pixels']             = '画像ピクセル数が多すぎます。';
    $translation['not_enough_pixels']           = '画像ピクセル数が少なすぎます。';
    $translation['file_not_uploaded']           = 'ファイルのアップロードはできません。 プロセスを実行することはできません。';
    $translation['already_exists']              = '%s はすでに存在します。 ファイル名を変更してください。';
    $translation['temp_file_missing']           = '一時ファイルがありません。 プロセスを実行することはできません。';
    $translation['source_missing']              = 'アップロードファイルがありません。 プロセスを実行することはできません。';
    $translation['destination_dir']             = '移動先ディレクトリが作成できませんでした。 プロセスを実行することはできません。';
    $translation['destination_dir_missing']     = '移動先ディレクトリが存在しません。 プロセスを実行することはできません。';
    $translation['destination_path_not_dir']    = '移動先パスはディレクトリではありません。 プロセスを実行することはできません。';
    $translation['destination_dir_write']       = '移動先ディレクトリは書き込み可能にすることはできません。 プロセスを実行することはできません。';
    $translation['destination_path_write']      = '移動先パスは書き込み可能ではありません。 プロセスを実行することはできません。';
    $translation['temp_file']                   = '一時ファイルを作成することはできません。 プロセスを実行することはできません。';
    $translation['source_not_readable']         = '元ファイルを読み込みできません。 プロセスを実行することはできません。';
    $translation['no_create_support']           = '%s 画像は作成できません。';
    $translation['create_error']                = '画像ソースから %s 画像を作成できません。';
    $translation['source_invalid']              = '画像ソースの読み込みができません。';
    $translation['gd_missing']                  = 'GD が存在しません。';
    $translation['watermark_no_create_support'] = '透かしの読み込みができないため、%s 画像は作成できません。';
    $translation['watermark_create_error']      = '%s の読み込みはサポートされません。透かしの作成ができません。';
    $translation['watermark_invalid']           = '画像形式が不明です。 透かしの読み込みができません。';
    $translation['file_create']                 = '%s 画像は作成できません。';
    $translation['no_conversion_type']          = '変換形式が定義されていません。';
    $translation['copy_failed']                 = 'ファイルコピーエラー。 copy() に失敗しました。';
    $translation['reading_failed']              = 'ファイル読み込みエラー。';
        
?>
