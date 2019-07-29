<?php
// +------------------------------------------------------------------------+
// | class.upload.fr_FR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Colin Verot 2003-2007. All rights reserved.              |
// | Version       0.25                                                     |
// | Last modified 17/11/2007                                               |
// | Email         colin@verot.net                                          |
// | Web           http://www.verot.net                                     |
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
 * Class upload french translation
 *
 * @version   0.28
 * @author    Colin Verot <colin@verot.net>
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Colin Verot
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Erreur de transmission. Essayez encore.';
    $translation['local_file_missing']          = 'Le fichier local n\'existe pas.';
    $translation['local_file_not_readable']     = 'Le fichier local ne peut être ouvert en lecture.';
    $translation['uploaded_too_big_ini']        = 'Le fichier transmis dépasse la taille autorisée dans la configuration php.ini.';
    $translation['uploaded_too_big_html']       = 'Le fichier transmis dépasse la taille autorisée dans le formulaire.';
    $translation['uploaded_partial']            = 'Le fichier n\' été que partiellement transmis.';
    $translation['uploaded_missing']            = 'Le serveur n\'a pas reçu de fichier.';
    $translation['uploaded_no_tmp_dir']         = 'Il n\'y a pas de répertoire temporaire disponible';
    $translation['uploaded_cant_write']         = 'Impossible d\'écrire sur le disque.';
    $translation['uploaded_err_extension']      = 'Upload stoppé par l\'extension.';
    $translation['uploaded_unknown']            = 'Erreur inconnue.';
    $translation['try_again']                   = 'Erreur de transmission. Essayez encore.';
    $translation['file_too_big']                = 'Fichier trop gros.';
    $translation['no_mime']                     = 'Le MIME type ne peut être détecté.';
    $translation['incorrect_file']              = 'Type de fichier incorrect.';
    $translation['image_too_wide']              = 'L\'image est trop large.';
    $translation['image_too_narrow']            = 'L\'image n\est pas assez large.';
    $translation['image_too_high']              = 'L\image est trop haute.';
    $translation['image_too_short']             = 'L\image n\est pas assez haute.';
    $translation['ratio_too_high']              = 'Le ratio est trop élevé (image trop large).';
    $translation['ratio_too_low']               = 'Le ratio est trop petit (image trop haute).';
    $translation['too_many_pixels']             = 'L\'image a trop de pixels.';
    $translation['not_enough_pixels']           = 'L\'image n\'a pas assez de pixels.';
    $translation['file_not_uploaded']           = 'Fichier non transmis. Impossible de continuer.';
    $translation['already_exists']              = '%s existe déjà. Changez le nom du fichier.';
    $translation['temp_file_missing']           = 'Le fichier source est incorrect. Impossible de continuer.';
    $translation['source_missing']              = 'Le fichier transmis est incorrect. Impossible de continuer.';
    $translation['destination_dir']             = 'Le répertoire de destination ne peut être crée. Impossible de continuer.';
    $translation['destination_dir_missing']     = 'Le répertoire de destination n\'existe pas. Impossible de continuer.';
    $translation['destination_path_not_dir']    = 'Le chemin de destination n\'est pas un répertoire. Impossible de continuer.';
    $translation['destination_dir_write']       = 'Le répertoire de destination ne peut être ouvert en écriture. Impossible de continuer.';
    $translation['destination_path_write']      = 'Le chemin de destination ne peut être ouvert en écriture. Impossible de continuer.';
    $translation['temp_file']                   = 'Le fichier temporaire ne peut être crée. Impossible de continuer.';
    $translation['source_not_readable']         = 'Le fichier source ne peut être lu. Impossible de continuer.';
    $translation['no_create_support']           = 'Création depuis un fichier %s impossible.';
    $translation['create_error']                = 'Erreur lors de la création de l\'image %s depuis le fichier source.';
    $translation['source_invalid']              = 'Impossible de lire l\'image source. Est-ce une image?.';
    $translation['gd_missing']                  = 'GD ne semble pas être présent.';
    $translation['watermark_no_create_support'] = 'Création depuis un fichier %s impossible, watermark ne peut être lu.';
    $translation['watermark_create_error']      = 'Erreur lors de la création du watermark %s depuis le fichier source.';
    $translation['watermark_invalid']           = 'Impossible de lire le watermark, format de fichier inconnu.';
    $translation['file_create']                 = 'Création d\'un fichier %s impossible.';
    $translation['no_conversion_type']          = 'Le type de conversion n\'est pas défini.';
    $translation['copy_failed']                 = 'La copie du fichier sur le serveur a échoué.';
    $translation['reading_failed']              = 'Erreur pendant la lecture du fichier.';

?>
