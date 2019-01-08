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
	<br>
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
			<div class="col-sm-5"> <!-- locatação -->
				<div class="input-group form-group">
					<span class="input-group-addon">Lotação</span>
					<input type="text" name="lotacao" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"> <!-- sexo -->
				<div class="input-group form-group">
					<span class="input-group-addon">Sexo</span>
					<select name="sexo" class="form-control">
						<option value="0">&nbsp;</option>
						<option value="F">F</option>
						<option value="M">M</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4"> <!-- rf -->
				<div class="input-group form-group">
					<span class="input-group-addon">
						Matrícula:
					</span>
					<input type="text" placeholder="Matrícula" class="form-control">
				</div>
			</div>
			<div class="col-sm-4"> <!-- data de nascimento -->
				<div class="input-group date form-group-sm" data-provide="datepicker">
					<span class="input-group-addon">Data de Nascimento</span>
					<input type="date" class="form-control datepicker" id="datepicker2">
					<div class="input-group-addon">
						<span class="glyphicon hover_pointer glyphicon-th" id="date-icon2"></span>
					</div>
				</div>
			</div>
			<div class="col-sm-2"> <!-- idade -->
				<div class="input-group form-group">
					<span class="input-group-addon">Idade</span>
					<input type="number" id="idade" disabled class="size_xs form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4"> <!-- tipo de deficiência -->
				<div class="input-group form-group">
					<span class="input-group-addon">
						<b>Tipo de Deficiência</b>
					</span>
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" style="width: 100%" aria-haspopup="true" aria-expanded="false">
							<span id="dp-text">&nbsp;</span>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<ul class="dp-ul">
								<li>
									<label class="dp-container">Cognitiva
										<input type="checkbox" name="cognitiva" class="dp-box dropdown-item" value="cognitiva">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="dp-container">Visual
										<input type="checkbox" name="visual" class="dp-box dropdown-item" value="visual">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="dp-container">Física
										<input type="checkbox" name="fisica" class="dp-box dropdown-item" value="fisica">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="dp-container">Auditiva
										<input type="checkbox" name="auditiva" class="dp-box dropdown-item" value="auditiva">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>							
				</div>
			</div>
			<div class="col-sm-2"> <!-- etnia -->
				<div class="input-group form-group">
					<span class="input-group-addon">Etnia</span>
					<select class="size_md form-control" name="etnia">
						<option value="0">&nbsp;</option>
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
			<div class="col-sm-2 bottom-02">
				<b>Diagnóstico Médico</b>
			</div>
			<div class="col-sm-10 bottom-02">
				<div class="bg-primary text-light text-center cidinfo">
					Consulte a lista completa de CIDs no <a id="cidlink" href="http://www.datasus.gov.br/cid10/V2008/WebHelp/cid10.htm" target="_blank">DATASUS</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-2">
				<div class="input-group">
					<span class="input-group-addon">CID</span>
					<?=cid10(0)?>
				</div>
			</div>
			<div class="col-sm-10">
				<div class="input-group form-group">
					<span class="input-group-addon">
						Descrição
					</span>
					<?=cid10(1)?>
					<div class="input-group-addon">
						<span class="glyphicon hover_pointer glyphicon-plus" id="add_cid"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<input type="hidden" id="cidlist">
			<div class="cidrow text-center hide_this"></div>
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
					<select name="informante" class="form-control" id="informante">
						<option value="0">&nbsp;</option>
						<option value="1">a própria pessoa</option>
						<option value="2">pessoa de convívio próprio</option>
						<option value="3">ambos</option>
						<option id="outro_informante" value="4">outros</option>
					</select>
					<input type="hidden" name="outro_informante" id="informante1">
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
