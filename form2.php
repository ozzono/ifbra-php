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
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-up float_right funcao" id="right-[1]"></span>
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-down hide_this float_right funcao" id="down-[1]"></span>
				</div>
				<div class="col-xs-3 col-sm-2"></div>
			</div>

			<!-- 1.1:Funções Mentais Globais -->

			<div class="text-center row">
				<div class="funcao[1]">
					<div class="col-xs-6 col-sm-9">
						<div class="linha_funcao">Funções Mentais Globais
							<div class="detalhe hide_this" id="detalhe-[1][1]">
								Consciência, orientação, (tempo, lugar, pessoa), intelectuais (inclui desenvolvimento cognitivo e intelectual), psicossociais (inclui altimo), temperamento e personalidade, energia e impulsos, sono.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(1,1)?>
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
						<div class="linha_funcao">Funções Mentais Específicas
							<div class="detalhe hide_this" id="detalhe-[1][2]">
								Atenção, memória, psicomotoras, emocionais, percepção, pensamento, funções executivas, linguagem, cálculo, sequenciamento de movimentos complexos (inclui apraxia), experiência pessoal e do tempo.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(1,2)?>
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
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-up float_right funcao" id="right-[2]"></span>
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-down hide_this float_right funcao" id="down-[2]"></span>
				</div>
			</div>

			<!-- 2.1:Visão e Funções Relacionadas -->
			<div class="text-center row">
				<div class="funcao[2]">
					<div class="col-xs-6 col-sm-9">
						<div class="linha_funcao">Visão e Funções Relacionadas
							<div class="detalhe hide_this" id="detalhe-[2][1]">
								Acuidade Visual, Campos Visual, Funções dos músculos internos e externos do olho, da pálpebra, glândulas lacrimais.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(2,1)?>
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
						<div class="linha_funcao">Funções Auditivas
							<div class="detalhe hide_this" id="detalhe-[2][2]">
								Detecção, descriminação, localização, do som e da fala.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(2,2)?>
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
						<div class="linha_funcao">Funções Vestibulares
							<div class="detalhe hide_this" id="detalhe-[2][3]">
								Relacionadas à posição, equilíbrio e movimento.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(2,3)?>
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
						<div class="linha_funcao">Dor
							<div class="detalhe hide_this" id="detalhe-[2][4]">
								Sensação desagradável que indica lesão potencial ou real em alguma parte do corpo. Generalizada ou localizada.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(2,4)?>
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
						<div class="linha_funcao">Funções Sensoriais adicionais
							<div class="detalhe hide_this" id="detalhe-[2][5]">
								Gustativa, olfativa, proprioceptiva, tátil, à dor, temperatura.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(2,5)?>
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
					<span class="glyphicon hover_pointer glyphicon-chevron-up float_right form-control funcao" id="right-[3]"></span>
					<span class="glyphicon hover_pointer glyphicon-chevron-down float_right hide_this form-control funcao" id="down-[3]"></span>
				</div>
			</div>

			<!-- 3.2:Voz, articulação, fluência, ritmo da fala -->
			<div class="text-center row">
				<div class="funcao[3]">
					<div class="col-xs-6 col-sm-9">
						<div class="linha_funcao">Voz, articulação, fluência, ritmo da fala
							<div class="detalhe hide_this" id="detalhe-[3][1]">
								Sem mais detalhes.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(3,1)?>
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
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-up float_right funcao" id="right-[4]"></span>
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-down hide_this float_right funcao" id="down-[4]"></span>
				</div>
			</div>

			<!-- 4.1:Funções do Sistema Cardiovascular -->
			<div class="text-center row">
				<div class="funcao[4]">
					<div class="col-xs-6 col-sm-9">
						<div class="linha_funcao">Funções do Sistema Cardiovascular
							<div class="detalhe hide_this" id="detalhe-[4][1]">
								Função do coração, vasos sanguíneos, pressão arterial.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(4,1)?>
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
						<div class="linha_funcao">Funções do Sistema Hematológico
							<div class="detalhe hide_this" id="detalhe-[4][2]">
								Produção de sangue, transporte de oxigênio e metabólicos e de coagulação.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(4,2)?>
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
						<div class="linha_funcao">Funções do Sistema Imunológico
							<div class="detalhe hide_this" id="detalhe-[4][3]">
								Resposta imunológica, reações de hipersensibilidade, funções do sistema linfático.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(4,3)?>
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
						<div class="linha_funcao">Funções do Sistema Respiratório
							<div class="detalhe hide_this" id="detalhe-[4][4]">
								Respiratórias, dos músculos respiratórios, da tolerância aos exercícios.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(4,4)?>
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
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-up float_right funcao" id="right-[5]"></span>
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-down hide_this float_right funcao" id="down-[5]"></span>
				</div>
			</div>

			<!-- 5.1:Funções do Sistema Imunológico -->
			<div class="text-center row">
				<div class="funcao[5]">
					<div class="col-xs-6 col-sm-9">
						<div class="linha_funcao">Funções dos Sistemas Digestivos
							<div class="detalhe hide_this" id="detalhe-[5][1]">
								Ingestão, deglutição, digestivas, assimilação, defecação, manutenção de peso.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(5,1)?>
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
						<div class="linha_funcao">Funções do Metabolismo e Sistema Endócrino
							<div class="detalhe hide_this" id="detalhe-[5][2]">
								Funções Metabólicas gerais, equilíbrio hídrico, mineral e eletrolítico, termorreguladoras, das glândulas endócrinas.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(5,2)?>
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
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-up float_right funcao" id="right-[6]"></span>
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-down hide_this float_right funcao" id="down-[6]"></span>
				</div>
			</div>

			<!-- 6.1:Funções Urinárias -->
			<div class="text-center row">
				<div class="funcao[6]">
					<div class="col-xs-6 col-sm-9">
						<div class="linha_funcao">Funções Urinárias
							<div class="detalhe hide_this" id="detalhe-[6][1]">
								Funções de filtragem, coleta e excreção de urina.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(6,1)?>
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
						<div class="linha_funcao">Funções Genitais e Reprodutivas
							<div class="detalhe hide_this" id="detalhe-[6][2]">
								Funções mentais e físicas/motoras relacionadas ao ato sexual, da menstruação e da procriação.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(6,2)?>
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
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-up float_right funcao" id="right-[7]"></span>
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-down hide_this float_right funcao" id="down-[7]"></span>
				</div>
			</div>

			
			<!-- 7.1:Funções das Articulações e dos Ossos -->
			<div class="text-center row">
				<div class="funcao[7]">
					<div class="col-xs-6 col-sm-9">
						<div class="linha_funcao">Funções das Articulações e dos Ossos
							<div class="detalhe hide_this" id="detalhe-[7][1]">
								Mobilidade, estabilidade das articulações e ossos.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(7,1)?>
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
						<div class="linha_funcao">Funções Musculares
							<div class="detalhe hide_this" id="detalhe-[7][2]">
								Força, tônus e resistência muscular.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(7,2)?>
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
						<div class="linha_funcao">Funções dos Movimentos
							<div class="detalhe hide_this" id="detalhe-[7][3]">
								Reflexo motor, movimentos involuntários, controle dos movimentos voluntários, padrão da marcha, sensações relacionadas aos músculos e funções do movimento.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(7,3)?>
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
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-up float_right funcao" id="right-[8]"></span>
					<span class="glyphicon hover_pointer form-control glyphicon-chevron-down hide_this float_right funcao" id="down-[8]"></span>
				</div>
			</div>

			<!-- Funções dos Movimentos -->
			<div class="text-center row">
				<div class="funcao[8]">
					<div class="col-xs-6 col-sm-9">
						<div class="linha_funcao">Funções dos Movimentos
							<div class="detalhe hide_this" id="detalhe-[8][1]">
								Protetora, reparadora, sensação relacionada à pele, pelos e unhas.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 text-center">
						<?=pop_detalhe(8,1)?>
					</div>
					<div class="col-xs-3 col-sm-2">
						<?=select_avaliacao(8,1)?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
