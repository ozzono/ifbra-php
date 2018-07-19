<?php require_once("cabecalho.php");

//start funções
	function checkbox($i,$j){
		$retorno='<input type="checkbox" class="fuzzy_checkbox" name="fuzzy-['.$i.']['.$j.']" id="fuzzy-['.$i.']['.$j.']" value="sim">';
		return $retorno;
	}

	function pop_detalhe($i,$j,$detalhe,$valida_detalhe=true){
		if ($valida_detalhe) {
			$return=
				'<span class="glyphicon hover_pointer form-control glyphicon-plus pop_detalhe" id="right-['.$i.']['.$j.']">'.
					'<input type="hidden" id="detalhe-['.$i.']['.$j.']" value="'.$detalhe.'">'.
				'</span>'
			;
		};
		echo $return;
	}
	function matriz_detalhe($i,$j,$detalhe,$valida_detalhe=true){
		$return='';
		if ($valida_detalhe) {
			$return=
				'<span class="glyphicon hover_pointer float_right text-center glyphicon-plus matriz_detalhe" id="mright-['.$i.']['.$j.']">'.
					'<input type="hidden" id="matriz_detalhe-['.$i.']['.$j.']" value="'.$detalhe.'">'.
				'</span>'
			;
		};
		echo $return;
	}
	function matriz_updown($i){
		$retorno=
			'<div class="updown float_left text-center">'.
				'<span class="matriz_updown glyphicon glyphicon-chevron-down" id="mdown-['.$i.']"></span>'.
				'<span class="matriz_updown glyphicon glyphicon-chevron-right hide_this" id="mright-['.$i.']"></span>'.
			'</div>'
		;
		return $retorno;
	}
	function select_avaliacao($i,$j){
		$retorno=
			'<select name="funcao['.$i.']['.$j.']" class="form-control">'.
				'<option value="null"></option>'.
				'<option value="25">25</option>'.
				'<option value="50">50</option>'.
				'<option value="75">75</option>'.
				'<option value="100">100</option>'.
			'</select>';
		echo $retorno;
	}

	function inss($i,$j,$k){
		$retorno=
			'<select name="inss['.$i.']['.$j.']['.$k.']" class="form-control">'.
				'<option value="null"></option>'.
				'<option value="25">25</option>'.
				'<option value="50">50</option>'.
				'<option value="75">75</option>'.
				'<option value="100">100</option>'.
			'</select>';
		echo $retorno;
	}

	function ba($i,$j,$k){
		$retorno=
			'<select name="ba['.$i.']['.$j.']['.$k.']" class="form-control">'.
				'<option value="null"></option>'.
				'<option value="25">25</option>'.
				'<option value="50">50</option>'.
				'<option value="75">75</option>'.
				'<option value="100">100</option>'.
			'</select>';
		echo $retorno;
	}
//end funções

?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<div class="container titulo">
	<h1><p>Avaliação Médica e Funcional</p></h1>
	<h2><div id="snackbar"></div></h2>
</div>
	<form action="">
	
	<!-- form1 -->
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="input-group form-group-md">
						<div class="input-group-addon">
							<span id="add_avaliador" class="glyphicon hover_pointer glyphicon-plus"></span>
						</div>
						<input type="text" class="form-control" name="avaliador[]" id="avaliador" placeholder="Adicionar avaliador">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="input-group date form-group-md" data-provide="datepicker">
						<span class="input-group-addon">Data da avaliação</span>
						<input type="date" class="form-control datepicker" id="datepicker1">
						<div class="input-group-addon hover_pointer">
							<span class="glyphicon glyphicon-th" id="date-icon1"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row lista_avaliadores"></div>
		</div>
	
		<div class="container form">
			<b>Formulário 1</b>
			<span class="glyphicon hover_pointer glyphicon-plus hide_this table_showhide" id="table_show-1"></span>
			<span class="glyphicon hover_pointer glyphicon-minus table_showhide" id="table_hide-1"></span>
		</div>

		<div class="container">
			<div id="table1">
				<div class="row">
					<div class="col-sm-12">
						<b>Dados Pessoais do Avaliado e da Avaliação</b>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7"> <!-- nome -->
						<div class="input-group form-group">
							<span class="input-group-addon">
								Nome
							</span>
							<input type="text" placeholder="Nome" class="form-control" name="nome">
						</div>
					</div>
					<div class="col-sm-5"> <!-- data de nascimento -->
						<div class="input-group date form-group-sm" data-provide="datepicker">
							<span class="input-group-addon">Data de Nascimento</span>
							<input type="date" class="form-control datepicker" id="datepicker2">
							<div class="input-group-addon">
								<span class="glyphicon hover_pointer glyphicon-th" id="date-icon2"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4"> <!-- tipo de deficiência -->
						
						<div class="input-group form-group">
							<span class="input-group-addon">
								<b>Tipo de Deficiência</b>
							</span>
							<!-- <select name="tipo_deficiencia" class="form-control"> -->
							<!-- </select> -->
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" style="width: 100%" aria-haspopup="true" aria-expanded="false">
									<span id="dp-text">&nbsp;</span>
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<ul class="dp-ul">
										<li>
											<input type="checkbox" name="cognitiva" class="dp-box dropdown-item" value="cognitiva">
												&nbsp;Cognitiva
											</input>
										</li>
										<li>
											<input type="checkbox" name="fisica" class="dp-box dropdown-item" value="fisica">
												&nbsp;Física
											</input>
										</li>
										<li>
											<input type="checkbox" name="visual" class="dp-box dropdown-item" value="visual">
												&nbsp;Visual
											</input>
										</li>
										<li>
											<input type="checkbox" name="auditiva" class="dp-box dropdown-item" value="auditiva">
												&nbsp;Auditiva
											</input>
										</li>
									</ul>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-sm-2"> <!-- idade -->
						<div class="input-group form-group">
							<span class="input-group-addon">Idade</span>
							<input type="number" id="idade" disabled class="size_xs form-control">
						</div>
					</div>
					<div class="col-sm-2"> <!-- rf -->
						<div class="input-group form-group">
							<span class="input-group-addon">
								RF:
							</span>
							<input type="text" placeholder="Matrícula" class="form-control">
						</div>
					</div>
					<div class="col-sm-2"> <!-- sexo -->
						<div class="input-group form-group">
							<span class="input-group-addon">Sexo</span>
							<select name="sexo" class="form-control">
								<option value="F">F</option>
								<option value="M">M</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2"> <!-- etnia -->
						<div class="input-group form-group">
							<span class="input-group-addon">Etnia</span>
							<select class="size_md form-control" name="etnia">
								<option value="branca">Branca</option>
								<option value="negra">Negra</option>
								<option value="amarela">Amarela</option>
								<option value="parda">Parda</option>
								<option value="indígena">Indígena</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<b>Diagnóstico Médico</b>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<div class="input-group form-group">
							<span class="input-group-addon">CID</span>
							<input class="form-control" type="text" name="cid">
						</div>
					</div>
					<div class="col-sm-5">
						<div class="input-group form-group">
							<span class="input-group-addon">Lotação</span>
							<input type="text" name="lotacao" class="form-control">
						</div>
					</div>
					<div class="col-sm-5">
						<div class="input-group form-group">
							<span class="input-group-addon">
								Descrição
							</span>
							<input type="text" name="descricao" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7">
						<div class="input-group form-group">
							<span class="input-group-addon">Local da Avaliação</span>
							<input type="text" name="local" class="form-control">
						</div>
					</div>
					<div class="col-sm-5">
						<div class="input-group form-group">
							<span class="input-group-addon">
								Quem prestou as informações
							</span>
							<select name="informante" class="form-control">
								<option value="1">a própria pessoa</option>
								<option value="2">pessoa de convívio próprio</option>
								<option value="3">ambos</option>
								<option value="4">outros</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="input-group form-group">
							<span class="input-group-addon">
								Histórico Clínico Social
							</span>
							<textarea aria-label='With textarea' class="form-control" name="historia" cols="30" rows="3"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- form1 -->

	<!-- form2 -->
		<div class="container form">
			<b>Formulário 2</b>
			<span class="glyphicon hover_pointer glyphicon-plus hide_this table_showhide" id="table_show-2"></span>
			<span class="glyphicon hover_pointer glyphicon-minus table_showhide" id="table_hide-2"></span>
		</div>

		<div class="container">
			<div id="table2">

				<!-- 1 - Funções Mentais -->
				<div class="caixa">
					<!-- título 1 -->
					<div class="row">
						<div class="col-xs-6 col-sm-9">
							<b>
								1 - Funções Mentais
							</b>
						</div>
						<div class="col-xs-3 col-sm-1 text-center">
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-right float_right hide_this funcao" id="right-[1]"></span>
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-down float_right funcao" id="down-[1]"></span>
						</div>
						<div class="col-xs-3 col-sm-2"></div>
					</div>

					<!-- 1.1:Funções Mentais Globais -->

					<div class="text-center row">
						<div class="funcao[1]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções Mentais Globais</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(1,1,'Consciência, orientação, (tempo, lugar, pessoa), intelectuais (inclui desenvolvimento cognitivo e intelectual), psicossociais (inclui altimo), temperamento e personalidade, energia e impulsos, sono.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(1,1)?>
							</div>
						</div>
					</div>

					<!-- 1.2:Funções Mentais Específicas -->
					<div class="text-center row">
						<div class="funcao[1]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções Mentais Específicas</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(1,2,'Atenção, memória, psicomotoras, emocionais, percepção, pensamento, funções executivas, linguagem, cálculo, sequenciamento de movimentos complexos (inclui apraxia), experiência pessoal e do tempo.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(1,2)?>
							</div>
						</div>
					</div>
				</div>

				<!-- 2 - Funções Sensoriais e Dor -->
				<div class="caixa">
					<!-- título 2 -->
					<div class="row">
						<div class='col-xs-6 col-sm-9'> 
							<b>
								2 - Funções Sensoriais e Dor
							</b>
						</div>
						<div class="col-xs-3 col-sm-1 text-center">
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-right float_right hide_this funcao" id="right-[2]"></span>
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-down float_right funcao" id="down-[2]"></span>
						</div>
					</div>

					<!-- 2.1:Visão e Funções Relacionadas -->
					<div class="text-center row">
						<div class="funcao[2]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Visão e Funções Relacionadas</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(2,1,'Acuidade Visual, Campos Visual, Funções dos músculos internos e externos do olho, da pálpebra, glândulas lacrimais.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(2,1)?>
							</div>
						</div>
					</div>

					<!-- 2.2:Funções Auditivas -->
					<div class="text-center row">
						<div class="funcao[2]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções Auditivas</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(2,2,'Detecção, descriminação, localização, do som e da fala.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(2,2)?>
							</div>
						</div>
					</div>

					<!-- 2.3:Funções Vestibulares -->
					<div class="text-center row">
						<div class="funcao[2]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções Vestibulares</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(2,3,'Relacionadas à posição, equilíbrio e movimento.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(2,3)?>
							</div>
						</div>
					</div>

					<!-- 2.4:Dor -->
					<div class="text-center row">
						<div class="funcao[2]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Dor</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(2,4,'Sensação desagradável que indica lesão potencial ou real em alguma parte do corpo. Generalizada ou localizada.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(2,4)?>
							</div>
						</div>
					</div>

					<!-- 2.5:Funções Sensoriais adicionais -->
					<div class="text-center row">
						<div class="funcao[2]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções Sensoriais adicionais</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(2,5,'Gustativa, olfativa, proprioceptiva, tátil, à dor, temperatura.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(2,5)?>
							</div>
						</div>
					</div>
				</div>

				<!-- 3 - Funções da Voz e da Fala -->
				<div class="caixa">
					<div class="row">
						<div class='col-xs-6 col-sm-9'>
							<b>
								3 - Funções da Voz e da Fala
							</b>
						</div>
						<div class="col-xs-3 col-sm-1 text-center">
							<span class="glyphicon hover_pointer glyphicon-chevron-right float_right form-control hide_this funcao" id="right-[3]"></span>
							<span class="glyphicon hover_pointer glyphicon-chevron-down float_right form-control funcao" id="down-[3]"></span>
						</div>
					</div>

					<!-- 3.2:Voz, articulação, fluência, ritmo da fala -->
					<div class="text-center row">
						<div class="funcao[3]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Voz, articulação, fluência, ritmo da fala</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(3,1,'Sem mais detalhes.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(3,1)?>
							</div>
						</div>
					</div>
				</div>

				<!-- 4 - Funções dos Sistemas Cardiovasculares, Hematológico, Imunológico e Respiratório -->
				<div class="caixa">
					<div class="row">
						<div class='col-xs-6 col-sm-9'>
							<b>
								4 - Funções dos Sistemas Cardiovasculares, Hematológico, Imunológico e Respiratório
							</b>
						</div>
						<div class="col-xs-3 col-sm-1 text-center">
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-right float_right hide_this funcao" id="right-[4]"></span>
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-down float_right funcao" id="down-[4]"></span>
						</div>
					</div>

					<!-- 4.1:Funções do Sistema Cardiovascular -->
					<div class="text-center row">
						<div class="funcao[4]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções do Sistema Cardiovascular</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(4,1,'Função do coração, vasos sanguíneos, pressão arterial.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(4,1)?>
							</div>
						</div>
					</div>

					 <!-- 4.2:Funções do Sistema Hematológico -->
					<div class="text-center row">
						<div class="funcao[4]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções do Sistema Hematológico</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(4,2,'Produção de sangue, transporte de oxigênio e metabólicos e de coagulação.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(4,2)?>
							</div>
						</div>
					</div>

					 <!-- 4.3:Funções do Sistema Imunológico -->
					<div class="text-center row">
						<div class="funcao[4]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções do Sistema Imunológico</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(4,3,'Resposta imunológica, reações de hipersensibilidade, funções do sistema linfático.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(4,3)?>
							</div>
						</div>
					</div>

					 <!-- 4.4:Funções do Sistema Respiratório -->
					<div class="text-center row">
						<div class="funcao[4]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções do Sistema Respiratório</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(4,4,'Respiratórias, dos músculos respiratórios, da tolerância aos exercícios.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(4,4)?>
							</div>
						</div>
					</div>
				</div>

				<!-- 5 - Funções dos Sistemas Digestivo, Metabólico e Endócrino -->
				<div class="caixa">
					<div class="row">
						<div class='col-xs-6 col-sm-9'>
							<b>
								5 - Funções dos Sistemas Digestivo, Metabólico e Endócrino
							</b>
						</div>
						<div class="col-xs-3 col-sm-1 text-center">
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-right float_right hide_this funcao" id="right-[5]"></span>
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-down float_right funcao" id="down-[5]"></span>
						</div>
					</div>

					<!-- 5.1:Funções do Sistema Imunológico -->
					<div class="text-center row">
						<div class="funcao[5]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções dos Sistemas Digestivos</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(5,1,'Ingestão, deglutição, digestivas, assimilação, defecação, manutenção de peso.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(5,1)?>
							</div>
						</div>
					</div>

					 <!-- 5.2:Funções do Sistema Imunológico -->
					<div class="text-center row">
						<div class="funcao[5]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções do Metabolismo e Sistema Endócrino</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(5,2,'Funções Metabólicas gerais, equilíbrio hídrico, mineral e eletrolítico, termorreguladoras, das glândulas endócrinas.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(5,2)?>
							</div>
						</div>
					</div>
				</div>

				<!-- 6 - Funções Genitourinárias e Reprodutivas -->
				<div class="caixa">
					<!-- titulo 6 -->
					<div class="row">
						<div class='col-xs-6 col-sm-9'>
							<b>
								6 - Funções Genitourinárias e Reprodutivas
							</b>
						</div>
						<div class="col-xs-3 col-sm-1 text-center">
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-right float_right hide_this funcao" id="right-[6]"></span>
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-down float_right funcao" id="down-[6]"></span>
						</div>
					</div>

					<!-- 6.1:Funções Urinárias -->
					<div class="text-center row">
						<div class="funcao[6]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções Urinárias</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(6,1,'Funções de filtragem, coleta e excreção de urina.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(6,1)?>
							</div>
						</div>
					</div>

						<!-- 6.2:Funções Genitais e Reprodutivas -->
					<div class="text-center row">
						<div class="funcao[6]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções Genitais e Reprodutivas</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(6,2,'Funções mentais e físicas/motoras relacionadas ao ato sexual, da menstruação e da procriação.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(6,2)?>
							</div>
						</div>
					</div>
				</div>

				<!-- 7 - Funções Neuromusculoesqueléticas e relacionadas a Movimento -->
				<div class="caixa">
					<div class="row">
						<div class='col-xs-6 col-sm-9'>
							<b>
								7 - Funções Neuromusculoesqueléticas e relacionadas a Movimento
							</b>
						</div>
						<div class="col-xs-3 col-sm-1 text-center">
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-right float_right hide_this funcao" id="right-[7]"></span>
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-down float_right funcao" id="down-[7]"></span>
						</div>
					</div>

					
					<!-- 7.1:Funções das Articulações e dos Ossos -->
					<div class="text-center row">
						<div class="funcao[7]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções das Articulações e dos Ossos</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(7,1,'Mobilidade, estabilidade das articulações e ossos.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(7,1)?>
							</div>
						</div>
					</div>

						<!-- 7.2:Funções Musculares -->
					<div class="text-center row">
						<div class="funcao[7]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções Musculares</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(7,2,'Força, tônus e resistência muscular.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(7,2)?>
							</div>
						</div>
					</div>

						<!-- 7.3:Funções dos Movimentos -->
					<div class="text-center row">
						<div class="funcao[7]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções dos Movimentos</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(7,3,'Reflexo motor, movimentos involuntários, controle dos movimentos voluntários, padrão da marcha, sensações relacionadas aos músculos e funções do movimento.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(7,3)?>
							</div>
						</div>
					</div>
				</div>

				<!-- 8 - Funções de Pele e Estruturas Relacionadas -->
				<div class="caixa">
					<div class="row">
						<div class='col-xs-6 col-sm-9'>
							<b>
								8 - Funções de Pele e Estruturas Relacionadas
							</b>
						</div>
						<div class="col-xs-3 col-sm-1 text-center">
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-right float_right hide_this funcao" id="right-[8]"></span>
							<span class="glyphicon hover_pointer form-control glyphicon-chevron-down float_right funcao" id="down-[8]"></span>
						</div>
					</div>

					<!-- Funções dos Movimentos -->
					<div class="text-center row">
						<div class="funcao[8]">
							<div class="col-xs-6 col-sm-9">
								<div class="linha_funcao">Funções dos Movimentos</div>
							</div>
							<div class="col-xs-3 col-sm-1 text-center">
								<?=pop_detalhe(8,1,'Protetora, reparadora, sensação relacionada à pele, pelos e unhas.')?>
							</div>
							<div class="col-xs-3 col-sm-2">
								<?=select_avaliacao(8,1)?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- form2 -->

	<!-- form3 -->
		<div class="container form">
			<b>Formulário 3</b>
			<span class="glyphicon hover_pointer glyphicon-plus hide_this table_showhide" id="table_show-3"></span>
			<span class="glyphicon hover_pointer glyphicon-minus table_showhide" id="table_hide-3"></span>
		</div>

		<div class="container">
			<div id="table3">
				<div class="row text-center">
					<div class="col-xs-12">
						<b><h3>IF-Br: Domínios e Atividades</h3></b>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-xs-3 col-sm-5">
					</div>
					<div class="col-xs-2 col-sm-2">
						<b>Pontuação INSS</b>
					</div>
					<div class="col-xs-5 col-sm-5">
						<b>Barreira Ambiental</b>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-xs-3 col-sm-5">
						<div class="matriz"></div>
					</div>
					<div class="col-xs-1 col-sm-1">
						<div class="roll_col">
							<b>Serviço Social</b>
						</div>
					</div>
					<div class="col-xs-1 col-sm-1">
						<div class="roll_col">
							<b>Médica Pericial</b>
						</div>
					</div>
					<div class="col-xs-1 text-center">
						<div class="roll_col">
							<b>P e T</b>
						</div>
					</div>
					<div class="col-xs-1 text-center">
						<div class="roll_col">
							<b>Amb</b>
						</div>
					</div>
					<div class="col-xs-1 text-center">
						<div class="roll_col">
							<b>A e R</b>
						</div>
					</div>
					<div class="col-xs-1 text-center">
						<div class="roll_col">
							<b>At</b>
						</div>
					</div>
					<div class="col-xs-1 text-center">
						<div class="roll_col">
							<b>SS e P</b>
						</div>
					</div>
				</div>
				<div class="row botton_margin">
					<div class="col-xs-4">
						<div class="dominio">
							<b>1. Domínio Sensorial</b>
							<?=matriz_updown(1)?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[1]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								1.1 Observar
								<?=matriz_detalhe(1,1,'Enxergar, reconhecer, e interpretar o que enxerga')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(1,1,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(1,1,2)?></div>
						<div class="col-xs-1"><?=ba(1,1,1)?></div>
						<div class="col-xs-1"><?=ba(1,1,2)?></div>
						<div class="col-xs-1"><?=ba(1,1,3)?></div>
						<div class="col-xs-1"><?=ba(1,1,4)?></div>
						<div class="col-xs-1"><?=ba(1,1,5)?></div>
					</div>
				</div>

				<div class="row">
					<div class="linha_matriz[1]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								1.2 Ouvir
								<?=matriz_detalhe(1,2,'Perceber, discriminar, reconhecer e interpretar sons')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(1,2,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(1,2,2)?></div>
						<div class="col-xs-1"><?=ba(1,2,1)?></div>
						<div class="col-xs-1"><?=ba(1,2,2)?></div>
						<div class="col-xs-1"><?=ba(1,2,3)?></div>
						<div class="col-xs-1"><?=ba(1,2,4)?></div>
						<div class="col-xs-1"><?=ba(1,2,5)?></div>
					</div>
				</div>

				<div class="row botton_margin">
					<div class="col-xs-4">
						<div class="dominio">
							<b>2. Domínio de comunicação</b>
							<?=matriz_updown(2)?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[2]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								2.1 Comunicar-se
								<?=matriz_detalhe(2,1,'Produção de mensagens')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,1,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,1,2)?></div>
						<div class="col-xs-1"><?=ba(2,1,1)?></div>
						<div class="col-xs-1"><?=ba(2,1,2)?></div>
						<div class="col-xs-1"><?=ba(2,1,3)?></div>
						<div class="col-xs-1"><?=ba(2,1,4)?></div>
						<div class="col-xs-1"><?=ba(2,1,5)?></div>
					</div>
				</div>
				<div class="row"> <!-- 2.2 -->
					<div class="linha_matriz[2]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								2.2 Conversar
								<?=matriz_detalhe(2,2,'Iniciar, manter e finalizar uma troca de pensamentos e idéias, realizadas através da linguagem oral e ou de sinais')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,2,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,2,2)?></div>
						<div class="col-xs-1"><?=ba(2,2,1)?></div>
						<div class="col-xs-1"><?=ba(2,2,2)?></div>
						<div class="col-xs-1"><?=ba(2,2,3)?></div>
						<div class="col-xs-1"><?=ba(2,2,4)?></div>
						<div class="col-xs-1"><?=ba(2,2,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[2]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								2.3 Conversar
								<?=matriz_detalhe(2,3,'Iniciar, manter e finalizar uma troca de pensamentos e idéias, realizada através da linguagem oral e ou de sinais')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,3,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,3,2)?></div>
						<div class="col-xs-1"><?=ba(2,3,1)?></div>
						<div class="col-xs-1"><?=ba(2,3,2)?></div>
						<div class="col-xs-1"><?=ba(2,3,3)?></div>
						<div class="col-xs-1"><?=ba(2,3,4)?></div>
						<div class="col-xs-1"><?=ba(2,3,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[2]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								2.4 Discutir
								<?=matriz_detalhe(2,4,'Iniciar, manter e finalizar uma troca de pensamentos e idéias, realizada através da linguagem oral e ou de sinais')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,4,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,4,2)?></div>
						<div class="col-xs-1"><?=ba(2,4,1)?></div>
						<div class="col-xs-1"><?=ba(2,4,2)?></div>
						<div class="col-xs-1"><?=ba(2,4,3)?></div>
						<div class="col-xs-1"><?=ba(2,4,4)?></div>
						<div class="col-xs-1"><?=ba(2,4,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[2]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								2.5 Utilização de dispositivos de comunicação à distância
								<?=matriz_detalhe(2,5,'A utilização de dispositivos de comunicação à distância')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,5,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(2,5,2)?></div>
						<div class="col-xs-1"><?=ba(2,5,1)?></div>
						<div class="col-xs-1"><?=ba(2,5,2)?></div>
						<div class="col-xs-1"><?=ba(2,5,3)?></div>
						<div class="col-xs-1"><?=ba(2,5,4)?></div>
						<div class="col-xs-1"><?=ba(2,5,5)?></div>
					</div>
				</div>
				<div class="row botton_margin">
					<div class="col-xs-4">
						<div class="dominio">
							<b>3. Domínio Mobilidade</b>
							<?=matriz_updown(3)?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[3]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								3.1 Mudar e manter a posição do corpo
								<?=matriz_detalhe(3,1,'Sem detalhes')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,1,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,1,2)?></div>
						<div class="col-xs-1"><?=ba(3,1,1)?></div>
						<div class="col-xs-1"><?=ba(3,1,2)?></div>
						<div class="col-xs-1"><?=ba(3,1,3)?></div>
						<div class="col-xs-1"><?=ba(3,1,4)?></div>
						<div class="col-xs-1"><?=ba(3,1,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[3]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								3.2 Alcançar, transportar e mover objetos
								<?=matriz_detalhe(3,2,'Transportar e mover objeto de posição e alcançar acima da cabeça, à frente, ao lado e abaixo')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,2,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,2,2)?></div>
						<div class="col-xs-1"><?=ba(3,2,1)?></div>
						<div class="col-xs-1"><?=ba(3,2,2)?></div>
						<div class="col-xs-1"><?=ba(3,2,3)?></div>
						<div class="col-xs-1"><?=ba(3,2,4)?></div>
						<div class="col-xs-1"><?=ba(3,2,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[3]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								3.3 Movimentos finos da mão
								<?=matriz_detalhe(3,3,'Manusear objetos, manipulá-los e soltá-los utilizando as mãos, dedos e polega')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,3,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,3,2)?></div>
						<div class="col-xs-1"><?=ba(3,3,1)?></div>
						<div class="col-xs-1"><?=ba(3,3,2)?></div>
						<div class="col-xs-1"><?=ba(3,3,3)?></div>
						<div class="col-xs-1"><?=ba(3,3,4)?></div>
						<div class="col-xs-1"><?=ba(3,3,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[3]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								3.4 Deslocar se dentro de casa
								<?=matriz_detalhe(3,4,'Andar ou deslocar-se dentro da própria casa, em um ambiente, incluindo áreas anexas quando aplicável')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,4,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,4,2)?></div>
						<div class="col-xs-1"><?=ba(3,4,1)?></div>
						<div class="col-xs-1"><?=ba(3,4,2)?></div>
						<div class="col-xs-1"><?=ba(3,4,3)?></div>
						<div class="col-xs-1"><?=ba(3,4,4)?></div>
						<div class="col-xs-1"><?=ba(3,4,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[3]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								3.5 Deslocar-se dentro de edifícios que não a própria casa
								<?=matriz_detalhe(3,5,'Andar ou deslocar-se dentro de edifícios que não a própria residência, incluindo áreas anexas quando aplicável')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,5,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,5,2)?></div>
						<div class="col-xs-1"><?=ba(3,5,1)?></div>
						<div class="col-xs-1"><?=ba(3,5,2)?></div>
						<div class="col-xs-1"><?=ba(3,5,3)?></div>
						<div class="col-xs-1"><?=ba(3,5,4)?></div>
						<div class="col-xs-1"><?=ba(3,5,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[3]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								3.6 Deslocar-se fora de sua casa e de outros edifícios
								<?=matriz_detalhe(3,6,'Andar ou deslocar-se perto ou longe da própria casa e de outros edifícios, sem utilização de transporte público ou privado')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,6,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,6,2)?></div>
						<div class="col-xs-1"><?=ba(3,6,1)?></div>
						<div class="col-xs-1"><?=ba(3,6,2)?></div>
						<div class="col-xs-1"><?=ba(3,6,3)?></div>
						<div class="col-xs-1"><?=ba(3,6,4)?></div>
						<div class="col-xs-1"><?=ba(3,6,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[3]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								3.7 Utilizar transporte coletivo
								<?=matriz_detalhe(3,7,'Utilizar transporte coletivo para se deslocar, como passageiro, por meio terrestre, aqüaviário ou aéreo')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,7,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,7,2)?></div>
						<div class="col-xs-1"><?=ba(3,7,1)?></div>
						<div class="col-xs-1"><?=ba(3,7,2)?></div>
						<div class="col-xs-1"><?=ba(3,7,3)?></div>
						<div class="col-xs-1"><?=ba(3,7,4)?></div>
						<div class="col-xs-1"><?=ba(3,7,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[3]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								3.8 Utilizar transporte individual como passageiro
								<?=matriz_detalhe(3,8,'Utilizar transporte para se deslocar, como passageiro, por meio terrestre, aqüaviário ou aéreo')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,8,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(3,8,2)?></div>
						<div class="col-xs-1"><?=ba(3,8,1)?></div>
						<div class="col-xs-1"><?=ba(3,8,2)?></div>
						<div class="col-xs-1"><?=ba(3,8,3)?></div>
						<div class="col-xs-1"><?=ba(3,8,4)?></div>
						<div class="col-xs-1"><?=ba(3,8,5)?></div>
					</div>
				</div>
				<div class="row botton_margin">
					<div class="col-xs-4">
						<div class="dominio">
							<b>4. Domínio Cuidados Pessoais</b>
							<?=matriz_updown(4)?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[4]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								4.1 Lavar-se
								<?=matriz_detalhe(4,1,'Tomar banho e limpar o corpo de forma completa incluindo lavar e secar todas as partes do corpo da forma habitual')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,1,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,1,2)?></div>
						<div class="col-xs-1"><?=ba(4,1,1)?></div>
						<div class="col-xs-1"><?=ba(4,1,2)?></div>
						<div class="col-xs-1"><?=ba(4,1,3)?></div>
						<div class="col-xs-1"><?=ba(4,1,4)?></div>
						<div class="col-xs-1"><?=ba(4,1,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[4]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								4.2 Cuidar de partes do corpo
								<?=matriz_detalhe(4,2,'Realizar cuidados pessoais')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,2,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,2,2)?></div>
						<div class="col-xs-1"><?=ba(4,2,1)?></div>
						<div class="col-xs-1"><?=ba(4,2,2)?></div>
						<div class="col-xs-1"><?=ba(4,2,3)?></div>
						<div class="col-xs-1"><?=ba(4,2,4)?></div>
						<div class="col-xs-1"><?=ba(4,2,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[4]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								4.3 Regulação da micção
								<?=matriz_detalhe(4,3,'Reconhecer a necessidade de urinar, escolher a forma e o local apropriado, manipular a roupa, urinar e secar-se')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,3,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,3,2)?></div>
						<div class="col-xs-1"><?=ba(4,3,1)?></div>
						<div class="col-xs-1"><?=ba(4,3,2)?></div>
						<div class="col-xs-1"><?=ba(4,3,3)?></div>
						<div class="col-xs-1"><?=ba(4,3,4)?></div>
						<div class="col-xs-1"><?=ba(4,3,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[4]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								4.4 Regulação da defecação
								<?=matriz_detalhe(4,4,'Reconhecer a necessidade de evacuar, escolher a forma e o local apropriado, manipular a roupa, evacuar e limpar-se')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,4,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,4,2)?></div>
						<div class="col-xs-1"><?=ba(4,4,1)?></div>
						<div class="col-xs-1"><?=ba(4,4,2)?></div>
						<div class="col-xs-1"><?=ba(4,4,3)?></div>
						<div class="col-xs-1"><?=ba(4,4,4)?></div>
						<div class="col-xs-1"><?=ba(4,4,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[4]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								4.5 Vestir-se
								<?=matriz_detalhe(4,5,'Vestir e retirar peças habituais, incluíndo calçados')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,5,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,5,2)?></div>
						<div class="col-xs-1"><?=ba(4,5,1)?></div>
						<div class="col-xs-1"><?=ba(4,5,2)?></div>
						<div class="col-xs-1"><?=ba(4,5,3)?></div>
						<div class="col-xs-1"><?=ba(4,5,4)?></div>
						<div class="col-xs-1"><?=ba(4,5,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[4]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								4.6 Comer
								<?=matriz_detalhe(4,6,'Levar à boca e comer alimento preparado e servido de forma de forma habitual')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,6,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,6,2)?></div>
						<div class="col-xs-1"><?=ba(4,6,1)?></div>
						<div class="col-xs-1"><?=ba(4,6,2)?></div>
						<div class="col-xs-1"><?=ba(4,6,3)?></div>
						<div class="col-xs-1"><?=ba(4,6,4)?></div>
						<div class="col-xs-1"><?=ba(4,6,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[4]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								4.7 Beber
								<?=matriz_detalhe(4,7,'Levar à boca e beber bebida preparada e servida de forma de forma habitual e com deglutição segura')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,7,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,7,2)?></div>
						<div class="col-xs-1"><?=ba(4,7,1)?></div>
						<div class="col-xs-1"><?=ba(4,7,2)?></div>
						<div class="col-xs-1"><?=ba(4,7,3)?></div>
						<div class="col-xs-1"><?=ba(4,7,4)?></div>
						<div class="col-xs-1"><?=ba(4,7,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[4]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								4.8 Capacidade de identificar agravos à saúde
								<?=matriz_detalhe(4,8,'Identificar sinais e sintomas que possam potencialmente comprometer a saúde e a integridade física, reconhecer abusos e violência')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,8,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(4,8,2)?></div>
						<div class="col-xs-1"><?=ba(4,8,1)?></div>
						<div class="col-xs-1"><?=ba(4,8,2)?></div>
						<div class="col-xs-1"><?=ba(4,8,3)?></div>
						<div class="col-xs-1"><?=ba(4,8,4)?></div>
						<div class="col-xs-1"><?=ba(4,8,5)?></div>
					</div>
				</div>
				<div class="row botton_margin">
					<div class="col-xs-4">
						<div class="dominio">
							<b>5. Domínio Vida Doméstica</b>
							<?=matriz_updown(5)?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[5]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								5.1 Preparar refeições tipo lanches
								<?=matriz_detalhe(5,1,'Preparar e escolher alimentos simples para lanches')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,1,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,1,2)?></div>
						<div class="col-xs-1"><?=ba(5,1,1)?></div>
						<div class="col-xs-1"><?=ba(5,1,2)?></div>
						<div class="col-xs-1"><?=ba(5,1,3)?></div>
						<div class="col-xs-1"><?=ba(5,1,4)?></div>
						<div class="col-xs-1"><?=ba(5,1,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[5]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								5.2 Cozinhar
								<?=matriz_detalhe(5,2,'Planejar, organizar e executar o preparo de refeições que exijam varios ingredientes ou utensílios, ou uma sequência de ações')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,2,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,2,2)?></div>
						<div class="col-xs-1"><?=ba(5,2,1)?></div>
						<div class="col-xs-1"><?=ba(5,2,2)?></div>
						<div class="col-xs-1"><?=ba(5,2,3)?></div>
						<div class="col-xs-1"><?=ba(5,2,4)?></div>
						<div class="col-xs-1"><?=ba(5,2,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[5]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								5.3 Realizar tarefas domésticas
								<?=matriz_detalhe(5,3,'',false)?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,3,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,3,2)?></div>
						<div class="col-xs-1"><?=ba(5,3,1)?></div>
						<div class="col-xs-1"><?=ba(5,3,2)?></div>
						<div class="col-xs-1"><?=ba(5,3,3)?></div>
						<div class="col-xs-1"><?=ba(5,3,4)?></div>
						<div class="col-xs-1"><?=ba(5,3,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[5]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								5.4 Manutenção e uso apropriado de objetos pessoais e utensílios da casa
								<?=matriz_detalhe(5,4,'Utilizar, guardar e conservar objetos pessoais, cuidar da casa e dos utensílios domésticos')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,4,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,4,2)?></div>
						<div class="col-xs-1"><?=ba(5,4,1)?></div>
						<div class="col-xs-1"><?=ba(5,4,2)?></div>
						<div class="col-xs-1"><?=ba(5,4,3)?></div>
						<div class="col-xs-1"><?=ba(5,4,4)?></div>
						<div class="col-xs-1"><?=ba(5,4,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[5]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								5.5 Cuidar dos Outros
								<?=matriz_detalhe(5,5,'',false)?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,5,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(5,5,2)?></div>
						<div class="col-xs-1"><?=ba(5,5,1)?></div>
						<div class="col-xs-1"><?=ba(5,5,2)?></div>
						<div class="col-xs-1"><?=ba(5,5,3)?></div>
						<div class="col-xs-1"><?=ba(5,5,4)?></div>
						<div class="col-xs-1"><?=ba(5,5,5)?></div>
					</div>
				</div>
				<div class="row botton_margin">
					<div class="col-xs-4">
						<div class="dominio">
							<b>6. Domínio Educação</b>
							<?=matriz_updown(6)?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[6]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								6.1 Educação
								<?=matriz_detalhe(6,1,'Adquirir habilidades e conhecimentos educacionais, dentro e fora da escola, considerando acessibilidade e disponibilidade de recursos educacionais adequados')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(6,1,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(6,1,2)?></div>
						<div class="col-xs-1"><?=ba(6,1,1)?></div>
						<div class="col-xs-1"><?=ba(6,1,2)?></div>
						<div class="col-xs-1"><?=ba(6,1,3)?></div>
						<div class="col-xs-1"><?=ba(6,1,4)?></div>
						<div class="col-xs-1"><?=ba(6,1,5)?></div>
					</div>
				</div>
				<div class="row botton_margin">
					<div class="col-xs-4">
						<div class="dominio">
							<b>7. Domínio Socializaçã o e Vida Comunitária</b>
							<?=matriz_updown(7)?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[7]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								7.1 Regular o comportamento nas interações
								<?=matriz_detalhe(7,1,'Controlar o próprio comportamento, emoções e impulsos, agressão verbal e física nas interações, de maneira contextual e socialmente apropriada')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,1,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,1,2)?></div>
						<div class="col-xs-1"><?=ba(7,1,1)?></div>
						<div class="col-xs-1"><?=ba(7,1,2)?></div>
						<div class="col-xs-1"><?=ba(7,1,3)?></div>
						<div class="col-xs-1"><?=ba(7,1,4)?></div>
						<div class="col-xs-1"><?=ba(7,1,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[7]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								7.2 Interagir de acordo com as regras sociais
								<?=matriz_detalhe(7,2,'Agir independentemente nas interações sociais e adaptar-se às convenções sociais que regem o papel, posição ou status social das pessoas nas interações com os outros')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,2,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,2,2)?></div>
						<div class="col-xs-1"><?=ba(7,2,1)?></div>
						<div class="col-xs-1"><?=ba(7,2,2)?></div>
						<div class="col-xs-1"><?=ba(7,2,3)?></div>
						<div class="col-xs-1"><?=ba(7,2,4)?></div>
						<div class="col-xs-1"><?=ba(7,2,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[7]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								7.3 Relacionamentos com estranhos
								<?=matriz_detalhe(7,3,'Estabelecer contatos e ligações temporários com estranhos para fins específicos como, quando aplicável')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,3,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,3,2)?></div>
						<div class="col-xs-1"><?=ba(7,3,1)?></div>
						<div class="col-xs-1"><?=ba(7,3,2)?></div>
						<div class="col-xs-1"><?=ba(7,3,3)?></div>
						<div class="col-xs-1"><?=ba(7,3,4)?></div>
						<div class="col-xs-1"><?=ba(7,3,5)?></div>
					</div>
				</div>
				<div class="row">
					<div class="linha_matriz[7]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								7.4 Relacionamentos familiares e com pessoas familiares
								<?=matriz_detalhe(7,4,'Criar e manter relações de parentesco com membros do núcleo familiar ou pessoas próximas. Participar da rotina familiar')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,4,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,4,2)?></div>
						<div class="col-xs-1"><?=ba(7,4,1)?></div>
						<div class="col-xs-1"><?=ba(7,4,2)?></div>
						<div class="col-xs-1"><?=ba(7,4,3)?></div>
						<div class="col-xs-1"><?=ba(7,4,4)?></div>
						<div class="col-xs-1"><?=ba(7,4,5)?></div>
					</div>				
				</div>
				<div class="row">
					<div class="linha_matriz[7]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								7.5 Relacionamentos Íntimos
								<?=matriz_detalhe(7,5,'Verificar detalhe desse item')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,5,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,5,2)?></div>
						<div class="col-xs-1"><?=ba(7,5,1)?></div>
						<div class="col-xs-1"><?=ba(7,5,2)?></div>
						<div class="col-xs-1"><?=ba(7,5,3)?></div>
						<div class="col-xs-1"><?=ba(7,5,4)?></div>
						<div class="col-xs-1"><?=ba(7,5,5)?></div>
					</div>				
				</div>
				<div class="row">
					<div class="linha_matriz[7]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								7.6 Socialização
								<?=matriz_detalhe(7,6,'Participar de eventos sociais')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,6,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,6,2)?></div>
						<div class="col-xs-1"><?=ba(7,6,1)?></div>
						<div class="col-xs-1"><?=ba(7,6,2)?></div>
						<div class="col-xs-1"><?=ba(7,6,3)?></div>
						<div class="col-xs-1"><?=ba(7,6,4)?></div>
						<div class="col-xs-1"><?=ba(7,6,5)?></div>
					</div>				
				</div>
				<div class="row">
					<div class="linha_matriz[7]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								7.7 Fazer as próprias escolhas
								<?=matriz_detalhe(7,7,'Exercer a capacidade de tomar decisões sobre a sua própria vida')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,7,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,7,2)?></div>
						<div class="col-xs-1"><?=ba(7,7,1)?></div>
						<div class="col-xs-1"><?=ba(7,7,2)?></div>
						<div class="col-xs-1"><?=ba(7,7,3)?></div>
						<div class="col-xs-1"><?=ba(7,7,4)?></div>
						<div class="col-xs-1"><?=ba(7,7,5)?></div>
					</div>				
				</div>
				<div class="row">
					<div class="linha_matriz[7]">
						<div class="col-sm-5 col-xs-3">
							<div class="linha_matriz">
								7.8 Vida política e cidadania
								<?=matriz_detalhe(7,8,'Exercer a cidadania')?>
							</div>
						</div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,8,1)?></div>
						<div class="col-xs-1 col-sm-1"><?=inss(7,8,2)?></div>
						<div class="col-xs-1"><?=ba(7,8,1)?></div>
						<div class="col-xs-1"><?=ba(7,8,2)?></div>
						<div class="col-xs-1"><?=ba(7,8,3)?></div>
						<div class="col-xs-1"><?=ba(7,8,4)?></div>
						<div class="col-xs-1"><?=ba(7,8,5)?></div>
					</div>				
				</div>
			</div>
		</div>
	<!-- form3 -->

	<!-- form4 -->
		<div class="container form">
			<b>Formulário 4</b>
			<span class="glyphicon hover_pointer glyphicon-plus hide_this table_showhide" id="table_show-4"></span>
			<span class="glyphicon hover_pointer glyphicon-minus table_showhide" id="table_hide-4"></span>
		</div>

		<div class="container">
			<div id="table4">
				<div class="row">
					<div class="col-xs-12 text-center">
						<b><h3>Aplicação do Modelo Linguístico Fuzzy</h3></b>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<b>Deficiência Auditiva</b>
					</div>
					<div class="col-xs-6"></div>
				</div>
				<div class="row" id="row_fuzzy-[1][1]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(1,1)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[1][1]">
							Houve pontuaçao 25 ou 50 em alguma atividade do Dominio Comunicação ou Socialização; <b>ou</b> em 75 em todas as atividades dos Domínios Comunicação ou Socialização
						</div>
					</div>
				</div>
				<div class="row" id="row_fuzzy-[1][2]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(1,2)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[1][2]">
							A surdez ocorreu antes dos 6 anos
						</div>
					</div>
				</div>
				<div class="row" id="row_fuzzy-[1][3]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(1,3)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[1][3]">
							Não dispõe de auxílio de terceiros sempre que necessário
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<b>Deficiência Intelectual (Cognitiva ou Mental)</b>
					</div>
					<div class="col-xs-2">
						
					</div>
				</div>
				<div class="row" id="row_fuzzy-[2][1]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(2,1)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[2][1]">
							Houve pontuaçao 25 ou 50 em alguma atividade do Dominio Vida Doméstica; <b>ou</b> em 75 em todas as atividades dos Domínios Vida Doméstica
						</div>
					</div>
				</div>
				<div class="row" id="row_fuzzy-[2][2]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(2,2)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[2][2]">
							Não pode ficar sozinho em segurança
						</div>
					</div>
				</div>
				<div class="row" id="row_fuzzy-[2][3]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(2,3)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[2][3]">
							Não dispõe de auxílio de terceiros sempre que necessário
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<b>Deficiência Motora</b>
					</div>
					<div class="col-xs-2"></div>
				</div>
				<div class="row" id="row_fuzzy-[3][1]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(3,1)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[3][1]">
							Houve pontuaçao 25 ou 50 em alguma atividade do Dominio Mobilidade ou Cuidados Pessoais; <b>ou</b> em 75 em todas as atividades dos Domínios Mobilidade ou Cuidados Pessoais
						</div>
					</div>
				</div>
				<div class="row" id="row_fuzzy-[3][2]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(3,2)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[3][2]">
							Desloca-se exclusivamente em cadeira de rodas
						</div>
					</div>
				</div>
				<div class="row" id="row_fuzzy-[3][3]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(3,3)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[3][3]">
							Não dispõe de auxílio de terceiros sempre que necessário
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<b>Deficiência Visual</b>
					</div>
					<div class="col-xs-2"></div>
				</div>
				<div class="row" id="row_fuzzy-[4][1]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(4,1)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[4][1]">
							Houve pontuaçao 25 ou 50 em alguma atividade do Dominio Mobilidade ou Vida Doméstica; <b>ou</b> em 75 em todas as atividades dos Domínios Mobilidade ou Vida Doméstica
						</div>
					</div>
				</div>
				<div class="row" id="row_fuzzy-[4][2]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(4,2)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[4][2]">
							A pessoa já não enxergava ao nascer
						</div>
					</div>
				</div>
				<div class="row" id="row_fuzzy-[4][3]">
					<div class="hover_pointer col-xs-1 text-center align_fix"><?=checkbox(4,3)?></div>
					<div class="col-xs-11">
						<div class="linha_fuzzy hover_pointer" id="linha_fuzzy-[4][3]">
							Não dispõe de auxílio de terceiros sempre que necessário
						</div>
					</div>
				</div>
			</div>
		</div>

	</form>


<?php require_once("rodape.php"); ?>