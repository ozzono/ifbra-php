<?php 
function acumulado_dominio($dom,$col){
	echo
		'<div class="col-xs-1 text-center">'.
			'<span class="form-control acumulado" id="domcol-'.$dom.'+'.$col.'">'.
			'</span>'.
		'</div>'
	;
}

function cid10($i){
	$json=file_get_contents('cid10.json');
	$cid=json_decode($json);
	$id=($i==0)?'cid':'desc_cid';
	$retorno=
		"<input class='form-control cid' id='{$id}_id' placeholder='Busque CID' list='{$id}' name='{$id}'>".
		"<datalist id='{$id}'>"
	;
	foreach ($cid as $key => $each) {
		$retorno.="<option value='{$each[$i]}'>{$each[$i]}</option>";
	}
	$retorno.='</datalist><br>';
	return $retorno;
}

function checkbox($i,$j){
	$retorno='<input type="checkbox" class="fuzzy_checkbox" name="fuzzy-['.$i.']['.$j.']" id="fuzzy-['.$i.']['.$j.']" value="sim">';
	return $retorno;
}

function pop_detalhe($i,$j,$detalhe,$valida_detalhe=true){
	if ($valida_detalhe) {
		$return=
			'<span class="glyphicon hover_pointer align-self-left form-control glyphicon-plus pop_detalhe float_right" id="rightplus-['.$i.']['.$j.']">'.
			'</span>'.
			'<span class="glyphicon hover_pointer align-self-left form-control glyphicon-minus pop_detalhe float_right hide_this" id="rightminus-['.$i.']['.$j.']">'.
			'</span>'
		;
	};
	echo $return;
}
function matriz_detalhe($i,$j,$detalhe,$valida_detalhe=true){
	$return='';
	if ($valida_detalhe) {
		$return=
			'<span class="align-self-center glyphicon hover_pointer float_right text-center glyphicon-plus matriz_detalhe" id="plusright-['.$i.']['.$j.']">'.
			'</span>'.
			'<span class="align-self-center hide_this glyphicon hover_pointer float_right text-center glyphicon-minus matriz_detalhe" id="minusright-['.$i.']['.$j.']">'.
			'</span>'.
			'<div class="detalhe hide_this" id="detalhe-['.$i.']['.$j.']">'.
				$detalhe.
			'</div>'
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
			'<option value="0" class="disable_this alert-danger"></option>'.
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
		'<div class="input-group text-center hover_pointer form-control ba_inputgroup" id="ba_inputgroup-'.$i.'+'.$j.'+'.$k.'">'.
			'<div class="input-group-prepend">'.
				'<div class="input-group-text text-center">'.
					'<input type="checkbox" disabled class="hide_this ba_inputbox ba_inputbox-'.$i.'" name="ba_checkbox'.$i.'+'.$j.'+'.$k.'" id="ba_checkbox-'.$i.'+'.$j.'+'.$k.'" >'.
					'<span class="glyphicon glyphicon-check x_check hide_this" id="check-'.$i.'+'.$j.'+'.$k.'"></span>'.
					'<span class="glyphicon glyphicon-unchecked x_uncheck" id="uncheck-'.$i.'+'.$j.'+'.$k.'"></span>'.
				'</div>'.
			'</div>'.
		'</div>'
	;
	echo $retorno;
}
?>
