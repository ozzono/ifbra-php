<?php //require_once 'total.php'; ?>

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
			<div class="col-xs-5 col-sm-5"></div>
			<div class="col-xs-2 col-sm-2">
				<b>Pontuação</b>
			</div>
			<div class="col-xs-5 col-sm-5">
				<div>
					<b>Barreira Ambiental</b>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-5 col-sm-5">
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
			<div class="col-xs-1 col-sm-1">
				<div class="roll_col">
					<b>P e T</b>
				</div>
			</div>
			<div class="col-xs-1 col-sm-1">
				<div class="roll_col">
					<b>Amb</b>
				</div>
			</div>
			<div class="col-xs-1 col-sm-1">
				<div class="roll_col">
					<b>A e R</b>
				</div>
			</div>
			<div class="col-xs-1 col-sm-1">
				<div class="roll_col">
					<b>At</b>
				</div>
			</div>
			<div class="col-xs-1 col-sm-1">
				<div class="roll_col">
					<b>SS e P</b>
				</div>
			</div>
		</div>
		<div class="row botton_margin">
			<div class="col-xs-5">
				<div class="dominio">
					<b>1. Domínio Sensorial</b>
					<?=matriz_updown(1)?>
					<span class="total_dominio float_right alert-success dominio-1">Total parcial</span>
				</div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-1" id="dominio-1.1"></div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-1" id="dominio-1.2"></div>
			</div>
			<?=acumulado_dominio(1,1)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(1,2)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(1,3)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(1,4)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(1,5)?><!-- ($dom,$coluna) -->
		</div>
		<div class="row">
			<div class="linha_matriz[1]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							1.1 Observar
							<?=matriz_detalhe(1,1,'Enxergar, reconhecer, e interpretar o que enxerga.')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(1,1,1,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(1,2,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,1,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,1,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,1,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,1,5)?></div>
			</div>
		</div>

		<div class="row">
			<div class="linha_matriz[1]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							1.2 Ouvir
							<?=matriz_detalhe(1,2,'Perceber, discriminar, reconhecer e interpretar sons.')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(1,1,2,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(1,2,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,2,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,2,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,2,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(1,2,5)?></div>
			</div>
		</div>
		<div class="row botton_margin">
			<div class="col-xs-5">
				<div class="dominio">
					<b>2. Domínio de comunicação</b>
					<?=matriz_updown(2)?>
					<span class="total_dominio float_right alert-success dominio-2">Total parcial</span>
				</div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-2" id="dominio-2.1"></div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-2" id="dominio-2.2"></div>
			</div>
			<?=acumulado_dominio(2,1)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(2,2)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(2,3)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(2,4)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(2,5)?><!-- ($dom,$coluna) -->
		</div>
		<div class="row">
			<div class="linha_matriz[2]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							2.1 Comunicar-se
							<?=matriz_detalhe(2,1,'Compreender mensagens.')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,1,1,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,2,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,1,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,1,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,1,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,1,5)?></div>
			</div>
		</div>
		<div class="row"> <!-- 2.2 -->
			<div class="linha_matriz[2]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							2.2 Conversar
							<?=matriz_detalhe(2,2,'Iniciar, manter e finalizar uma troca de pensamentos e idéias, realizadas através da linguagem oral e ou de sinais')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,1,2,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,2,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,2,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,2,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,2,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,2,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[2]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							2.3 Conversar
							<?=matriz_detalhe(2,3,'Iniciar, manter e finalizar uma troca de pensamentos e idéias, realizada através da linguagem oral e ou de sinais')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,1,3,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,2,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,3,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,3,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,3,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,3,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[2]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							2.4 Discutir
							<?=matriz_detalhe(2,4,'Iniciar, manter e finalizar uma troca de pensamentos e idéias, realizada através da linguagem oral e ou de sinais')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,1,4,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,2,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,4,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,4,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,4,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,4,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[2]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							2.5 Utilização de dispositivos de comunicação à distância
							<?=matriz_detalhe(2,5,'A utilização de dispositivos de comunicação à distância')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,1,5,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(2,2,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,5,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,5,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,5,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(2,5,5)?></div>
			</div>
		</div>
		<div class="row botton_margin">
			<div class="col-xs-5">
				<div class="dominio">
					<b>3. Domínio Mobilidade</b>
					<?=matriz_updown(3)?>
					<span class="total_dominio float_right alert-success dominio-3">Total parcial</span>
				</div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-3" id="dominio-3.1"></div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-3" id="dominio-3.2"></div>
			</div>
			<?=acumulado_dominio(3,1)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(3,2)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(3,3)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(3,4)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(3,5)?><!-- ($dom,$coluna) -->
		</div>
		<div class="row">
			<div class="linha_matriz[3]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							3.1 Mudar e manter a posição do corpo
							<?=matriz_detalhe(3,1,'Sem detalhes')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,1,1,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,2,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,1,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,1,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,1,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,1,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[3]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							3.2 Alcançar, transportar e mover objetos
							<?=matriz_detalhe(3,2,'Transportar e mover objeto de posição e alcançar acima da cabeça, à frente, ao lado e abaixo')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,1,2,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,2,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,2,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,2,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,2,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,2,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[3]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							3.3 Movimentos finos da mão
							<?=matriz_detalhe(3,3,'Manusear objetos, manipulá-los e soltá-los utilizando as mãos, dedos e polega')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,1,3,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,2,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,3,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,3,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,3,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,3,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[3]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							3.4 Deslocar se dentro de casa
							<?=matriz_detalhe(3,4,'Andar ou deslocar-se dentro da própria casa, em um ambiente, incluindo áreas anexas quando aplicável')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,1,4,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,2,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,4,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,4,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,4,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,4,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[3]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							3.5 Deslocar-se dentro de edifícios que não a própria casa
							<?=matriz_detalhe(3,5,'Andar ou deslocar-se dentro de edifícios que não a própria residência, incluindo áreas anexas quando aplicável')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,1,5,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,2,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,5,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,5,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,5,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,5,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[3]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							3.6 Deslocar-se fora de sua casa e de outros edifícios
							<?=matriz_detalhe(3,6,'Andar ou deslocar-se perto ou longe da própria casa e de outros edifícios, sem utilização de transporte público ou privado')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,1,6,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,2,6,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,6,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,6,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,6,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,6,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,6,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[3]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							3.7 Utilizar transporte coletivo
							<?=matriz_detalhe(3,7,'Utilizar transporte coletivo para se deslocar, como passageiro, por meio terrestre, aqüaviário ou aéreo')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,1,7,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,2,7,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,7,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,7,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,7,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,7,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,7,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[3]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							3.8 Utilizar transporte individual como passageiro
							<?=matriz_detalhe(3,8,'Utilizar transporte para se deslocar, como passageiro, por meio terrestre, aqüaviário ou aéreo')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,1,8,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(3,2,8,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,8,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,8,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,8,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,8,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(3,8,5)?></div>
			</div>
		</div>
		<div class="row botton_margin">
			<div class="col-xs-5">
				<div class="dominio">
					<b>4. Domínio Cuidados Pessoais</b>
					<?=matriz_updown(4)?>
					<span class="total_dominio float_right alert-success dominio-4">Total parcial</span>
				</div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-4" id="dominio-4.1"></div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-4" id="dominio-4.2"></div>
			</div>
			<?=acumulado_dominio(4,1)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(4,2)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(4,3)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(4,4)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(4,5)?><!-- ($dom,$coluna) -->
		</div>
		<div class="row">
			<div class="linha_matriz[4]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							4.1 Lavar-se
							<?=matriz_detalhe(4,1,'Tomar banho e limpar o corpo de forma completa incluindo lavar e secar todas as partes do corpo da forma habitual')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,1,1,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,2,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,1,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,1,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,1,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,1,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[4]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							4.2 Cuidar de partes do corpo
							<?=matriz_detalhe(4,2,'Realizar cuidados pessoais')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,1,2,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,2,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,2,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,2,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,2,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,2,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[4]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							4.3 Regulação da micção
							<?=matriz_detalhe(4,3,'Reconhecer a necessidade de urinar, escolher a forma e o local apropriado, manipular a roupa, urinar e secar-se')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,1,3,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,2,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,3,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,3,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,3,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,3,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[4]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							4.4 Regulação da defecação
							<?=matriz_detalhe(4,4,'Reconhecer a necessidade de evacuar, escolher a forma e o local apropriado, manipular a roupa, evacuar e limpar-se')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,1,4,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,2,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,4,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,4,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,4,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,4,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[4]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							4.5 Vestir-se
							<?=matriz_detalhe(4,5,'Vestir e retirar peças habituais, incluíndo calçados')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,1,5,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,2,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,5,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,5,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,5,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,5,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[4]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							4.6 Comer
							<?=matriz_detalhe(4,6,'Levar à boca e comer alimento preparado e servido de forma de forma habitual')	?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,1,6,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,2,6,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,6,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,6,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,6,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,6,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,6,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[4]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							4.7 Beber
							<?=matriz_detalhe(4,7,'Levar à boca e beber bebida preparada e servida de forma de forma habitual e com deglutição segura')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,1,7,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,2,7,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,7,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,7,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,7,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,7,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,7,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[4]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							4.8 Capacidade de identificar agravos à saúde
							<?=matriz_detalhe(4,8,'Identificar sinais e sintomas que possam potencialmente comprometer a saúde e a integridade física, reconhecer abusos e violência')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,1,8,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(4,2,8,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,8,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,8,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,8,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,8,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(4,8,5)?></div>
			</div>
		</div>
		<div class="row botton_margin">
			<div class="col-xs-5">
				<div class="dominio">
					<b>5. Domínio Vida Doméstica</b>
					<?=matriz_updown(5)?>
					<span class="total_dominio float_right alert-success dominio-5">Total parcial</span>
				</div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-5" id="dominio-5.1"></div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-5" id="dominio-5.2"></div>
			</div>
			<?=acumulado_dominio(5,1)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(5,2)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(5,3)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(5,4)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(5,5)?><!-- ($dom,$coluna) -->
		</div>
		<div class="row">
			<div class="linha_matriz[5]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							5.1 Preparar refeições tipo lanches
							<?=matriz_detalhe(5,1,'Preparar e escolher alimentos simples para lanches')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,1,1,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,2,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,1,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,1,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,1,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,1,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[5]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							5.2 Cozinhar
							<?=matriz_detalhe(5,2,'Planejar, organizar e executar o preparo de refeições que exijam varios ingredientes ou utensílios, ou uma sequência de ações')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,1,2,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,2,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,2,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,2,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,2,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,2,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[5]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							5.3 Realizar tarefas domésticas
							<?=matriz_detalhe(5,3,'',false)?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,1,3,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,2,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,3,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,3,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,3,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,3,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[5]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							5.4 Manutenção e uso apropriado de objetos pessoais e utensílios da ca
							<?=matriz_detalhe(5,4,'Utilizar, guardar e conservar objetos pessoais, cuidar da casa e dos utensílios domésticos')?>
						sa</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,1,4,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,2,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,4,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,4,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,4,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,4,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[5]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							5.5 Cuidar dos Outros
							<?=matriz_detalhe(5,5,'',false)?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,1,5,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(5,2,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,5,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,5,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,5,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(5,5,5)?></div>
			</div>
		</div>
		<div class="row botton_margin">
			<div class="col-xs-5">
				<div class="dominio">
					<b>6. Domínio Educação</b>
					<?=matriz_updown(6)?>
					<span class="total_dominio float_right alert-success dominio-6">Total parcial</span>
				</div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-6" id="dominio-6.1"></div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-6" id="dominio-6.2"></div>
			</div>
			<?=acumulado_dominio(6,1)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(6,2)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(6,3)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(6,4)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(6,5)?><!-- ($dom,$coluna) -->
		</div>
		<div class="row">
			<div class="linha_matriz[6]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							6.1 Educação
							<?=matriz_detalhe(6,1,'Adquirir habilidades e conhecimentos educacionais, dentro e fora da escola, considerando acessibilidade e disponibilidade de recursos educacionais adequados')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,1,1,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,2,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,1,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,1,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,1,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,1,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[6]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							6.2 Qualificação Profissional
							<?=matriz_detalhe(6,2,'Adquirir habilidades e conhecimentos específicos para atividade profissional, considerando acessibilidade e disponibilidade de recursos educacionais adequados')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,1,2,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,2,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,2,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,2,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,2,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,2,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[6]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							6.3 Educação
							<?=matriz_detalhe(6,3,'Adquirir habilidades e conhecimentos educacionais, dentro e fora da escola, considerando acessibilidade e disponibilidade de recursos educacionais adequados')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,1,3,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,2,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,3,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,3,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,3,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,3,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[6]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							6.4 Educação
							<?=matriz_detalhe(6,4,'Adquirir habilidades e conhecimentos educacionais, dentro e fora da escola, considerando acessibilidade e disponibilidade de recursos educacionais adequados')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,1,4,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,2,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,4,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,4,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,4,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,4,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[6]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							6.5 Educação
							<?=matriz_detalhe(6,5,'Adquirir habilidades e conhecimentos educacionais, dentro e fora da escola, considerando acessibilidade e disponibilidade de recursos educacionais adequados')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,1,5,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(6,2,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,5,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,5,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,5,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(6,5,5)?></div>
			</div>
		</div>
		<div class="row botton_margin">
			<div class="col-xs-5">
				<div class="dominio">
					<b>7. Domínio Socialização e Vida Comunitária</b>
					<?=matriz_updown(7)?>
					<span class="total_dominio float_right alert-success dominio-7">Total parcial</span>
				</div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-7" id="dominio-7.1"></div>
			</div>
			<div class="col-xs-1">
				<div class="alert-success form-control dominio-x dominio-7" id="dominio-7.2"></div>
			</div>
			<?=acumulado_dominio(7,1)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(7,2)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(7,3)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(7,4)?><!-- ($dom,$coluna) -->
			<?=acumulado_dominio(7,5)?><!-- ($dom,$coluna) -->
		</div>
		<div class="row">
			<div class="linha_matriz[7]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							7.1 Regular o comportamento nas interações
							<?=matriz_detalhe(7,1,'Controlar o próprio comportamento, emoções e impulsos, agressão verbal e física nas interações, de maneira contextual e socialmente apropriada')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,1,1,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,2,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,1,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,1,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,1,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,1,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,1,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[7]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							7.2 Interagir de acordo com as regras sociais
							<?=matriz_detalhe(7,2,'Agir independentemente nas interações sociais e adaptar-se às convenções sociais que regem o papel, posição ou status social das pessoas nas interações com os outros')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,1,2,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,2,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,2,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,2,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,2,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,2,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,2,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[7]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							7.3 Relacionamentos com estranhos
							<?=matriz_detalhe(7,3,'Estabelecer contatos e ligações temporários com estranhos para fins específicos como, quando aplicável')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,1,3,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,2,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,3,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,3,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,3,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,3,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,3,5)?></div>
			</div>
		</div>
		<div class="row">
			<div class="linha_matriz[7]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">7.4 Relacionamentos familiares e com pessoas familiares
						<?=matriz_detalhe(7,4,'Criar e manter relações de parentesco com membros do núcleo familiar ou pessoas próximas. Participar da rotina familiar')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,1,4,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,2,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,4,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,4,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,4,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,4,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,4,5)?></div>
			</div>				
		</div>
		<div class="row">
			<div class="linha_matriz[7]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							7.5 Relacionamentos Íntimos
							<?=matriz_detalhe(7,5,'Verificar detalhe desse item')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,1,5,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,2,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,5,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,5,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,5,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,5,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,5,5)?></div>
			</div>				
		</div>
		<div class="row">
			<div class="linha_matriz[7]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							7.6 Socialização
							<?=matriz_detalhe(7,6,'Participar de eventos sociais')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,1,6,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,2,6,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,6,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,6,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,6,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,6,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,6,5)?></div>
			</div>				
		</div>
		<div class="row">
			<div class="linha_matriz[7]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							7.7 Fazer as próprias escolhas
							<?=matriz_detalhe(7,7,'Exercer a capacidade de tomar decisões sobre a sua própria vida')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,1,7,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,2,7,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,7,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,7,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,7,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,7,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,7,5)?></div>
			</div>				
		</div>
		<div class="row">
			<div class="linha_matriz[7]">
				<div class="col-sm-5 col-xs-5">
					<div class="linha_matriz">
						<div class="texto_matriz align-items-start">
							7.8 Vida política e cidadania
							<?=matriz_detalhe(7,8,'Exercer a cidadania')?>
						</div>
					</div>
				</div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,1,8,1)?></div>
				<div class="col-xs-1 col-sm-1"><?=inss(7,2,8,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,8,1)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,8,2)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,8,3)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,8,4)?></div>
				<div class="col-xs-1 text-center"><?=ba(7,8,5)?></div>
			</div>				
		</div>
	</div>
</div>