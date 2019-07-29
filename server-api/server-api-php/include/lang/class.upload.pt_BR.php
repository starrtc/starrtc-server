<?php
// +------------------------------------------------------------------------+
// | class.upload.pt_BR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Yuri Vecchi Baladelli 2011. All rights reserved.         |
// | Version       0.25                                                     |
// | Last modified 04/01/2011                                               |
// | Email         y.vecchi@gmail.com                                       |
// | Web           http://www.yurivecchi.com.br                             |
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
 * Class upload Brazilian Portugese translation
 *
 * @version   0.30
 * @author    Yuri Vecchi Baladelli (y.vecchi@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Yuri Vecchi Baladelli
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['already_exists']              = '%s já existe. Por favor mude o nome do arquivo.';
    $translation['copy_failed']                 = 'Erro ao copiar o arquivo no servidor. copy() falhou.';
    $translation['create_error']                = 'Erro na criação da imagem %s a partir da fonte.';
    $translation['destination_dir']             = 'O diretório de destino não pode ser criado. Impossível continuar.';
    $translation['destination_dir_missing']     = 'O diretório de destino não existe. Impossível continuar.';
    $translation['destination_dir_write']       = 'Diretório de destino sem permissão para escrita. Impossível continuar.';
    $translation['destination_path_not_dir']    = 'O caminho especificado não é um diretório. Impossível continuar.';
    $translation['destination_path_write']      = 'O caminho de destino não tem permissão de escrita ou não pode ser aberto. Impossível continuar.';
    $translation['file_create']                 = 'Criação de arquivos %s não suportada.';
    $translation['file_error']                  = 'Erro na transferência. Por favor tente novamente.';
    $translation['file_not_uploaded']           = 'O arquivo não foi transferido. Impossível continuar.';
    $translation['file_too_big']                = 'Arquivo muito grande.';
    $translation['gd_missing']                  = 'Biblioteca GD não parece estar presente.';
    $translation['image_too_high']              = 'A imagem é muito alta.';
    $translation['image_too_narrow']            = 'A imagem é muito estreita.';
    $translation['image_too_short']             = 'A imagem é muito curta.';
    $translation['image_too_wide']              = 'A imagem é muito larga.';
    $translation['incorrect_file']              = 'Tipo de arquivo incorreto.';
    $translation['local_file_missing']          = 'O arquivo local não existe.';
    $translation['local_file_not_readable']     = 'Não foi possível ler o arquivo local.';
    $translation['no_conversion_type']          = 'Tipo de conversão não foi definida.';
    $translation['no_create_support']           = 'Criação a partir do arquivo %s imposível...';
    $translation['no_mime']                     = 'MIME type não detectado.';
    $translation['not_enough_pixels']           = 'A imagem tem poucos pixels.';
    $translation['ratio_too_high']              = 'A proporção da imagem é muito alta (Imagem muito larga).';
    $translation['ratio_too_low']               = 'A proporção da imagem é muito baixa (Imagem muito alta).';
    $translation['reading_failed']              = 'Erro ao ler o arquivo.';
    $translation['source_invalid']              = 'Impossível ler a fonte da imagem. É uma imagem?.';
    $translation['source_missing']              = 'O arquivo transferido esta incorreto. Impossível continuar.';
    $translation['source_not_readable']         = 'O arquivo fonte não é legível. Impossível continuar.';
    $translation['temp_file']                   = 'Não foi possível criar o arquivo temporário. Impossível continuar.';
    $translation['temp_file_missing']           = 'O arquivo fonte é incorreto. Impossível continuar.';
    $translation['too_many_pixels']             = 'A imagem tem muitos pixels.';
    $translation['try_again']                   = 'Erro ao carregar o arquivo. Favor tentar novamente.';
    $translation['uploaded_cant_write']         = 'Erro na transferência do arquivo (erro ao gravar o arquivo no disco).';
    $translation['uploaded_err_extension']      = 'Erro na transferência do arquivo (transferência do arquivo interrompida por uma extensão do PHP).';
    $translation['uploaded_missing']            = 'Erro ao carregar o arquivo (o arquivo não foi carregado).';
    $translation['uploaded_no_tmp_dir']         = 'Erro na transferência do arquivo (não foi possível localizar a pasta temporária).';
    $translation['uploaded_partial']            = 'Erro ao carregar o arquivo (o arquivo só foi carregado parcialmente).';
    $translation['uploaded_too_big_html']       = 'Erro ao carregar o arquivo (o arquivo carregado excede a diretiva MAX_FILE_SIZE especificado no formulário html).';
    $translation['uploaded_too_big_ini']        = 'Erro ao carregar o arquivo (o arquivo carregado excede a diretiva upload_max_filesize presente no php.ini).';
    $translation['uploaded_unknown']            = 'Erro ao carregar o arquivo (código de erro desconhecido).';
    $translation['watermark_create_error']      = 'Erro no momento da criação da marca d\'água %s a partir do arquivo fonte.';
    $translation['watermark_invalid']           = 'Impossível ler a marca d\'água, formato de arquivo desconhecido.';
    $translation['watermark_no_create_support'] = 'Criação a partir do arquivo %s impossível, marca d\'água não pode ser lida.';

?>
