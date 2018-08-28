<?php 
function cid10(){
	$json=file_get_contents('cid10.json');
	$json=json_decode($json);
	$retorno=
		'<input class="form-control" list="cid10">'.
		'<datalist id="cid10">'
	;
	foreach ($json as &$cidnum) {
		$retorno.='<option value="'.$cidnum[0].'">'.$cidnum[1].'</option>'.
	}
	$retorno.='</datalist>';
	return $retorno;
}

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
			'<span class="align-self-center glyphicon hover_pointer float_right text-center glyphicon-plus matriz_detalhe" id="mright-['.$i.']['.$j.']">'.
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
		'<select name="funcao['.$i.']['.$j.']" class="nowebkit select_avaliacao form-control">'.
			'<option value="null" class="disable_this alert-danger"></option>'.
			'<option value="25">25</option>'.
			'<option value="50">50</option>'.
			'<option value="75">75</option>'.
			'<option value="100">100</option>'.
		'</select>';
	echo $retorno;
}

function inss($i,$j,$k,$col){
	$retorno=
		'<select name="inss['.$i.']['.$j.']['.$k.']" id="inss-'.$i.'.'.$j.'.'.$k.'" class="inss_select-'.$i.'.'.$j.' coluna-'.$col.' nowebkit inss_select form-control">'.
			'<option value="null" class="disable_this alert-danger"></option>'.
			'<option value="25">25</option>'.
			'<option value="50">50</option>'.
			'<option value="75">75</option>'.
			'<option value="100">100</option>'.
		'</select>';
	echo $retorno;
}

function ba_li($i,$j,$k,$coluna,$nome_coluna){
	$retorno=
		'<li>'.
			'<label class="dp-container">'.$nome_coluna.
				'<input type="checkbox" name="'.$coluna.'['.$i.']['.$j.']['.$k.']" class="dp-amb dropdown-item" value="'.$coluna.'['.$i.']['.$j.']['.$k.']">'.
				'<span class="checkmark"></span>'.
			'</label>'.
		'</li>'
	;
	return $retorno;
}

function ba_checkbox($i,$j,$k){
	$retorno=
		'<div class="btn-group dropdown dropleft" style="width:100%">'.
			'<button type="button" style="background-color:#EBEBEB" class="form-control btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
				'<span id="ba_button['.$i.']['.$j.']['.$k.']">'.
					'&nbsp;'.
				'</span>'.
			'</button>'.
			'<div class="dropdown-menu">'.
				'<ul class="dp-ul">'.
					ba_li($i,$j,$k,'pet','P e T').
					ba_li($i,$j,$k,'amb','Amb').
					ba_li($i,$j,$k,'aer','A e R').
					ba_li($i,$j,$k,'at','At').
					ba_li($i,$j,$k,'ssep','SS e P').
				'</ul>'.
			'</div>'.
		'</div>';
	echo $retorno;
}
function ba($i,$j,$k){
	$retorno=
		'<div class="input-group text-center hover_pointer form-control ba_inputgroup" id="ba_inputgroup-['.$i.']['.$j.']['.$k.']">'.
			'<div class="input-group-prepend">'.
				'<div class="input-group-text text-center">'.
					'<input type="checkbox" disabled class="hide_this ba_inputbox" name="ba_checkbox['.$i.']['.$j.']['.$k.']" id="ba_checkbox-['.$i.']['.$j.']['.$k.']" >'.
					'<span class="glyphicon glyphicon-check x_check hide_this" id="check-['.$i.']['.$j.']['.$k.']"></span>'.
					'<span class="glyphicon glyphicon-unchecked x_uncheck" id="uncheck-['.$i.']['.$j.']['.$k.']"></span>'.
				'</div>'.
			'</div>'.
		'</div>'
	;
	echo $retorno;
}
?>
