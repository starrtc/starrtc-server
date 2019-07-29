<?php
// +------------------------------------------------------------------------+
// | class.upload.el_GR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Christos Grezios 2009. All rights reserved.              |
// | Version       0.25                                                     |
// | Last modified 23/03/2009                                               |
// | Email         cgrezios@link-tech.gr                                    |
// | Web           http://www.grezios.com                                   |
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
 * Class upload Greek translation
 *
 * @version   0.25
 * @author    Christos Grezios (cgrezios@link-tech.gr)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2009
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Πρόβλημα στο αρχείο. Παρακαλώ δοκιμάστε ξανά.';
    $translation['local_file_missing']          = 'Το τοπικό αρχείο δεν υπάρχει.';
    $translation['local_file_not_readable']     = 'Το τοπικό αρχείο δεν είναι προσβάσιμο.';
    $translation['uploaded_too_big_ini']        = 'Πρόβλημα με τη μεταφόρτωση του αρχείου (το αρχείο είναι μεγαλύτερο από το επιτρεπόμενο όριο (upload_max_filesize) που ορίζει το php.ini του εξυπηρετιτή σας).';
    $translation['uploaded_too_big_html']       = 'Πρόβλημα με τη μεταφόρτωση του αρχείου (το αρχείο είναι μεγαλύτερο από το επιτρεπόμενο όριο (upload_max_filesize) που ορίζεται στην html φόρμα).';
    $translation['uploaded_partial']            = 'Πρόβλημα με τη μεταφόρτωση του αρχείου (το αρχείο δεν μεταφορτώθηκε ολοκληρωτικά).';
    $translation['uploaded_missing']            = 'Πρόβλημα με τη μεταφόρτωση του αρχείου ( κανένα αρχείο δεν μεταφορτώθηκε).';
    $translation['uploaded_unknown']            = 'Πρόβλημα με τη μεταφόρτωση του αρχείου (άγνωστος κωδικός λάθους).';
    $translation['try_again']                   = 'Πρόβλημα με τη μεταφόρτωση του αρχείου (Παρακαλώ προσπαθήστε ξανά).';
    $translation['file_too_big']                = 'Πολύ μεγάλο αρχείο.';
    $translation['no_mime']                     = 'Άγνωστος τύπος αρχείου (MIME type) δεν μπορεί να εντοπιστεί.';
    $translation['incorrect_file']              = 'Λάθος τύπος αρχείου.';
    $translation['image_too_wide']              = 'Πολύ μεγάλη εικόνα κατά πλάτος.';
    $translation['image_too_narrow']            = 'Πολύ στενή εικόνα.';
    $translation['image_too_high']              = 'Πολύ ψηλή εικόνα.';
    $translation['image_too_short']             = 'Πολύ κοντή εικόνα.';
    $translation['ratio_too_high']              = 'Ο λόγος πλάτους και ύψους της εικόνας είναι πολύ υψηλός.(η εικόνα είναι μεγάλη κατά πλάτος).';
    $translation['ratio_too_low']               = 'Ο λόγος πλάτους και ύψους της εικόνας είναι πολύ χαμηλός.(η εικόνα είναι μεγάλη κατ΄ ύψος).';
    $translation['too_many_pixels']             = 'Η εικόνα περιέχει πολλά εικονοστοιχεία(pixels).';
    $translation['not_enough_pixels']           = 'Η εικόνα δεν έχει αρκετά εικονοστοιχεία(pixels).';
    $translation['file_not_uploaded']           = 'Πρόβλημα με τη μεταφόρτωση του αρχείου. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['already_exists']              = '%s υπάρχει ήδη. Παρακαλώ αλλάξτε το όνομα του αρχείου.';
    $translation['temp_file_missing']           = 'Λάθος προσωρινό αρχείο. Λάθος στο προσωρινό αρχείο. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['source_missing']              = 'Λάθος το μεταφορτωμένο αρχείο. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['destination_dir']             = 'Δεν μπορεί να δημιουργηθεί ο κατάλογος στο σημείο μεταφόρτωσης. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['destination_dir_missing']     = 'Δεν υπάρχει ο κατάλογος στον προορισμό. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['destination_path_not_dir']    = 'Η διαδρομή του προορισμού δεν είναι κατάλογος. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['destination_dir_write']       = 'Η διαδρομή του προορισμού δεν μπορεί να μετατραπεί σε εγγράψιμη. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['destination_path_write']      = 'Η διαδρομή του προορισμού δεν είναι εγγράψιμη. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['temp_file']                   = 'Δεν μπόρεσε να δημιουργηθεί το προσωρινό αρχείο. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['source_not_readable']         = 'Το πηγαίο αρχείο δεν μπορεί να διαβαστεί. Δεν μπορεί να συνεχιστεί η διαδικασία.';
    $translation['no_create_support']           = 'Δεν υποστηρίζεται η δημιουργία από %s.';
    $translation['create_error']                = 'Πρόβλημα στην δημιουργία %s εικόνας από την πηγή.';
    $translation['source_invalid']              = 'Δεν μπορεί να διαβαστεί η πηγαία εικόνα. Μήπως το αρχείο δεν ειναι εικόνα;';
    $translation['gd_missing']                  = 'Η βιβλιοθήκη GD δεν είναι διαθέσιμη.';
    $translation['watermark_no_create_support'] = 'Δεν υποστηρίζεται η δημιουργία από %s, δεν μπορεί αν αναγνωσθεί το υδατογράφημα.';
    $translation['watermark_create_error']      = 'Δεν υποστηρίζεται η ανάγνωση %s , δεν δημιουργήθηκε το υδατογράφημα.';
    $translation['watermark_invalid']           = 'Άγνωστη μορφή εικόνας, δεν μπορεί να αναγνωσθεί το υδατογράφημα.';
    $translation['file_create']                 = 'Δεν υπάρχει υποστήριξη για την δημιουργία  %s .';
    $translation['no_conversion_type']          = 'Δεν ορίστηκε τύπος μετατροπής.';
    $translation['copy_failed']                 = 'Λάθος κατά την αντιγραφή του αρχείου στον εξυπηρετητή. Η συνάρτηση copy() απέτυχε.';
    $translation['reading_failed']              = 'Λάθος κατά την ανάγνωση του αρχείου.';   
        
?>
