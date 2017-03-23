<?php

/*
 * i-Educar - Sistema de gest�o escolar
 *
 * Copyright (C) 2006  Prefeitura Municipal de Itaja�
 *                     <ctima@itajai.sc.gov.br>
 *
 * Este programa � software livre; voc� pode redistribu�-lo e/ou modific�-lo
 * sob os termos da Licen�a P�blica Geral GNU conforme publicada pela Free
 * Software Foundation; tanto a vers�o 2 da Licen�a, como (a seu crit�rio)
 * qualquer vers�o posterior.
 *
 * Este programa � distribu��do na expectativa de que seja �til, por�m, SEM
 * NENHUMA GARANTIA; nem mesmo a garantia impl��cita de COMERCIABILIDADE OU
 * ADEQUA��O A UMA FINALIDADE ESPEC�FICA. Consulte a Licen�a P�blica Geral
 * do GNU para mais detalhes.
 *
 * Voc� deve ter recebido uma c�pia da Licen�a P�blica Geral do GNU junto
 * com este programa; se n�o, escreva para a Free Software Foundation, Inc., no
 * endere�o 59 Temple Street, Suite 330, Boston, MA 02111-1307 USA.
 */

/**
 * @author   Prefeitura Municipal de Itaja� <ctima@itajai.sc.gov.br>
 * @license  http://creativecommons.org/licenses/GPL/2.0/legalcode.pt  CC GNU GPL
 * @package  Core
 * @since    Arquivo dispon�vel desde a vers�o 1.0.0
 * @version  $Id$
 */

// Inclui opera��es de bootstrap.
require_once '../includes/bootstrap.php';

require_once 'include/pmieducar/clsPermissoes.inc.php';

require_once ("include/pessoa/clsPessoa_.inc.php");
require_once ("include/pessoa/clsPessoaFj.inc.php");
require_once ("include/pessoa/clsPessoaJuridica.inc.php");
require_once ("include/pessoa/clsPessoaFisica.inc.php");
require_once ("include/pessoa/clsPessoaTelefone.inc.php");
require_once ("include/pessoa/clsEnderecoPessoa.inc.php");
require_once ("include/pessoa/clsEnderecoExterno.inc.php");
require_once ("include/pessoa/clsEndereco.inc.php");
require_once ("include/pessoa/clsFisicaCpf.inc.php");
require_once ("include/pessoa/clsFisica.inc.php");
require_once ("include/pessoa/clsJuridica.inc.php");
require_once ("include/pessoa/clsCepLogradouroBairro.inc.php");
require_once ("include/pessoa/clsCepLogradouro.inc.php");
require_once ("include/pessoa/clsLogradouro.inc.php");
require_once ("include/pessoa/clsBairro.inc.php");
require_once ("include/pessoa/clsMunicipio.inc.php");
require_once ("include/pessoa/clsUf.inc.php");
require_once ("include/pessoa/clsPais.inc.php");
require_once ("include/pessoa/clsVila.inc.php");
require_once ("include/pessoa/clsTipoLogradouro.inc.php");
require_once ("include/pessoa/clsFuncionario.inc.php");
require_once ("include/pessoa/clsEscolaridade.inc.php");
require_once ("include/pessoa/clsEstadoCivil.inc.php");
require_once ("include/pessoa/clsOcupacao.inc.php");
require_once ("include/pessoa/clsFisica.inc.php");
require_once ("include/pessoa/clsOrgaoEmissorRg.inc.php");
require_once ("include/pessoa/clsDocumento.inc.php");
require_once ("include/pessoa/clsRegiao.inc.php");
require_once ("include/pessoa/clsEscolaridade.inc.php");
require_once ("include/pessoa/clsCadastroEscolaridade.inc.php");
require_once ("include/pessoa/clsCadastroDeficiencia.inc.php");
require_once ("include/pessoa/clsCadastroFisicaDeficiencia.inc.php");
require_once ("include/pmidrh/clsSetor.inc.php");


require_once ("include/pmidrh/geral.inc.php");
require_once ("include/pessoa/clsBairroRegiao.inc.php");
require_once ("include/funcoes.inc.php");
require_once ("include/clsParametrosPesquisas.inc.php");
require_once ("include/portal/geral.inc.php");
require_once ("include/public/geral.inc.php");
require_once ("include/urbano/geral.inc.php");