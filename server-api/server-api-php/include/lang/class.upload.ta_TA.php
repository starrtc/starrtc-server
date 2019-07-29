<?php
// +------------------------------------------------------------------------+
// | class.upload.ta_TA.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Vijaya Sankar N 2016. All rights reserved.               |
// | Version       0.32                                                     |
// | Last modified 15/01/2016                                               |
// | Email         sankar.animation@gmail.com                               |
// | Web           http://vijayasankar.me.pn                                |
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
 * Class upload tamil translation
 *
 * @version   0.32
 * @author    Vijaya Sankar N (sankar.animation@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Vijaya Sankar N
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'கோப்பு பிழை. தயவு செய்து மீண்டும் முயற்சிக்கவும்.';
    $translation['local_file_missing']          = 'உட்கோப்பு இல்லை.'; 
    $translation['local_file_not_readable']     = 'உட்கோப்பு வாசிக்கும்படியில்லை.';
    $translation['uploaded_too_big_ini']        = 'கோப்பை பதிவேற்றுவதில்  பிழை (பதிவேற்றிய கோப்பு php.iniல் upload_max_filesize உத்தரவை  தான்டியுள்ளது).';
    $translation['uploaded_too_big_html']       = 'கோப்பை பதிவேற்றுவதில்  பிழை (பதிவேற்றிய கோப்பு HTML படிவத்தில் MAX_FILE_SIZE உத்தரவை  தான்டியுள்ளது).';
    $translation['uploaded_partial']            = 'கோப்பை பதிவேற்றுவதில்  பிழை (பதிவேற்றிய கோப்பு பகுதியாகவே பதிவேற்றப்பட்டது).';
    $translation['uploaded_missing']            = 'கோப்பை பதிவேற்றுவதில்  பிழை (எந்த கோப்பும் பதிவேற்றப்படவில்லை).';
    $translation['uploaded_no_tmp_dir']         = 'கோப்பை பதிவேற்றுவதில்  பிழை (தற்காலிக கோப்புறை காணவில்லை).'; 
    $translation['uploaded_cant_write']         = 'கோப்பை பதிவேற்றுவதில்  பிழை (வட்டில் கோப்பையை எழுதுவது தோல்வியடைந்தது).'; 
    $translation['uploaded_err_extension']      = 'கோப்பை பதிவேற்றுவதில்  பிழை (கோப்பு பதிவேற்றம் நீட்டிப்பினால் நிறுத்தப்பட்டது).'; 
    $translation['uploaded_unknown']            = 'கோப்பை பதிவேற்றுவதில்  பிழை (அறியப்படாத பிழை குறியீடு).';
    $translation['try_again']                   = 'கோப்பை பதிவேற்றுவதில்  பிழை. தயவு செய்து மீண்டும் முயற்சிக்கவும்.';
    $translation['file_too_big']                = 'கோப்பு மிக பெரியது.';
    $translation['no_mime']                     = 'MIME வகை கண்டறியப்படவில்லை.';
    $translation['incorrect_file']              = 'கோப்பு தவறான வகை.';
    $translation['image_too_wide']              = 'மிகவும் பரந்த படம்.';
    $translation['image_too_narrow']            = 'மிகவும் குறுகிய படம்.';
    $translation['image_too_high']              = 'மிகவும் உயரமான படம்.';
    $translation['image_too_short']             = 'மிகவும் சிறிய படம்.';
    $translation['ratio_too_high']              = 'பட விகிதம் மிகவும் அதிகமானது (மிகவும் பரந்த படம்).';
    $translation['ratio_too_low']               = 'பட விகிதம் மிகவும் குறுகியது (மிகவும் உயரமான படம்).';
    $translation['too_many_pixels']             = 'படத்தில் அதிகமான பிக்சல்கள் உள்ளது.';
    $translation['not_enough_pixels']           = 'படத்தில் குறைவான பிக்சல்கள் உள்ளது.';
    $translation['file_not_uploaded']           = 'கோப்பு பதிவேற்றப்படவில்லை. செயல்படுத்த முடியவில்லை.'; 
    $translation['already_exists']              = '%s முன்பே இருக்கிறது. தயவு செய்து கோப்புப் பெயரை மாற்றவும்.';
    $translation['temp_file_missing']           = 'எந்த ஒரு சரியான தற்காலிக மூல கோப்பும் இல்லை. செயல்படுத்த முடியவில்லை.'; 
    $translation['source_missing']              = 'எந்த ஒரு சரியான பதிவேற்றத்திற்கான மூல கோப்பு இல்லை. செயல்படுத்த முடியவில்லை.'; 
    $translation['destination_dir']             = 'இலக்கு அடைவை உருவாக்க முடியவில்லை. செயல்படுத்த முடியவில்லை.';
    $translation['destination_dir_missing']     = 'இலக்கு அடைவை உருவாக்க இல்லை. செயல்படுத்த முடியவில்லை.';
    $translation['destination_path_not_dir']    = 'இலக்கு பாதை அடைவு இல்லை. செயல்படுத்த முடியவில்லை.';
    $translation['destination_dir_write']       = 'இலக்கு பாதையை எழுதக்கூடியதாக மாற்றமுடியவில்லை. செயல்படுத்த முடியவில்லை.';
    $translation['destination_path_write']      = 'இலக்கு பாதையை எழுதக்கூடியதாக இல்லை. செயல்படுத்த முடியவில்லை.';
    $translation['temp_file']                   = 'தற்காலிக கோப்பை உருவாக்க முடியவில்லை. செயல்படுத்த முடியவில்லை.';
    $translation['source_not_readable']         = 'மூல கோப்பு வாசிக்கக்கூடியதாக இல்லை. செயல்படுத்த முடியவில்லை.'; 
    $translation['no_create_support']           = ' ஆதரவு %sல் உருவாக்க முடியாது.';
    $translation['create_error']                = '%s படத்தை மூலத்திலிருந்து உருவாக்குவதில் பிழை..'; 
    $translation['source_invalid']              = 'மூலத்திலிருந்து படத்தை உருவாக்கமுடியவில்லை. படமில்லையா?.'; 
    $translation['gd_missing']                  = 'GD இருப்பதாக தெரியவில்லை.'; 
    $translation['watermark_no_create_support'] = 'ஆதரவு %s உருவாக்க முடியாது, நீர்வரியை வாசிக்கமுடியவில்லை.'; 
    $translation['watermark_create_error']      = 'ஆதரவு %s வாசிக்க முடியாது, நீர்வரியை உருவாக்க முடியவில்லை.'; 
    $translation['watermark_invalid']           = 'அறிப்படாத பட வடிவம், நீர்வரியை வாசிக்கமுடியவில்லை.'; 
    $translation['file_create']                 = 'ஆதரவு %s உருவாக்க முடியாது.'; 
    $translation['no_conversion_type']          = 'மாற்று வகை வரையறுக்கப்பட்டவில்லை.';
    $translation['copy_failed']                 = 'சர்வரில் நகலெடுப்பதில் கோப்பு பிழை. copy() தோல்வியடைந்தது.';
    $translation['reading_failed']              = 'கோப்பை வாசிப்பதில் பிழை.';

?>
