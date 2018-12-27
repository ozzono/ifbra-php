//array functions
	function bigArray(bigArrayValor,tamanho){
		bigArrayRetorno=[];
		for (var i = 0; i<tamanho; i++) {
			// indice=intToString(i);
			// bigArrayRetorno.push({indice:bigArrayValor});
			// bigArrayRetorno.push({i:bigArrayValor});
			bigArrayRetorno.push(bigArrayValor);
		}
		return bigArrayRetorno;
	}

	function arrayInt(arrayIntValor,tamanho){
		arrayIntRetorno=[];
		for (var i = 0; i<tamanho; i++) {
			arrayIntRetorno.push(parseInt(arrayIntValor));
		}
		return arrayIntRetorno;
	}

	function arrayFloat(arrayFloatValor,tamanho){
		arrayFloatRetorno=[];
		for (var i = 0; i<tamanho; i++) {
			arrayFloatRetorno.push(parseFloat(arrayFloatValor));
		}
		return arrayFloatRetorno;
	}
//array functions
var pont0=arrayFloat(0,7);
var pont1=arrayFloat(0,7);

$(document).ready(function(){
	function loga(printa){console.log(printa);}


//começa functions
	function classifica(resumo){
		var grau='';
		if (resumo<=5739) {
			grau='Grave'
			$('#insuficiente').hide();
		}else if (resumo<=6354) {
			grau='Moderado'
			$('#insuficiente').hide();
		}else if (resumo<=7584) {
			grau='Leve'
			$('#insuficiente').hide();
		}else{
			grau='Insuficiente<b>*</b>';
			$('#insuficiente').show();
		}
		$('#grau').html(grau);
	}

	function acumulado_print(i,j){
		ref_i=i++;ref_j=j++;
		if (dom_acumulado[ref_i][ref_j]==0) {
			$('[id="domcol-'+i+'+'+j+'"]').hide();
		}else{
			$('[id="domcol-'+i+'+'+j+'"]').show();
		}
		$('[id="domcol-'+i+'+'+j+'"]').html(dom_acumulado[ref_i][ref_j]);
	}

	function novadata(){
		nova= new Date();
		mes=nova.getMonth();
		dia=nova.getDate();
		ano=nova.getFullYear();

		hora=nova.getHours();
		min=nova.getMinutes();
		return ano+'/'+mes+'/'+dia+' '+hora+':'+min;
	}

	function acumulado(box,incremento){
		//box[i][j][k] i=>dominio; j=>linha; i=>coluna
		box=box.split('+');
		i=--box[0];
		j=--box[2];
		if (incremento) {
			dom_acumulado[i][j]++;
		}else{
			dom_acumulado[i][j]--;
		}
		acumulado_print(i,j);
	}

	function salva_lista() {
		$('#cidlist').val(JSON.stringify(cidlist));
	}

	function varre_total(){
		retorno=true;
		for (var i = pont0.length - 1; i >= 0; i--) {
			if(pont0[i]=='0' ||pont1[i]=='0' ){
				retorno=false;
			}
		}
		return retorno;
	}

	function soma_total(){
		verifica=varre_total();
		if (verifica) {
			incremento1=0;
			incremento2=0;
			for (var i = pont0.length - 1; i >= 0; i--) {
				incremento1=incremento1+parseFloat(pont0[i]);
			}
			for (var i = pont1.length - 1; i >= 0; i--) {
				incremento2=incremento2+parseFloat(pont1[i]);
			}
			total[0]=incremento1;
			total[1]=incremento2;

			//total[0]=total[0]/7;
			//total[1]=total[1]/7;
			total_resumo=total[0]+total[1];

			$('#total_ss').html(total[0]);
			$('#total_mp').html(total[1]);
			$('#total_resumo').html(total_resumo);
			classifica(total_resumo);
		}	
	}

	function pontuacao(box_col,valor) {
		box_col=box_col.split('.');
		box=parseFloat(box_col[0]);
		col=parseFloat(box_col[1]);
		--box;
		--col;	
		if (col==0) {
			pont0[box]=valor;
		}else{
			pont1[box]=valor;
		}
		soma_total();
	}

	function snackbar($content) {
		var x = document.getElementById("snackbar");
		x.className = "show";
		x.innerHTML=$content;
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		$('#add_avaliador').focus();
	}

	function calculate_age(birth_month,birth_day,birth_year){
		today_date = new Date();
		today_year = today_date.getFullYear();
		today_month = today_date.getMonth();
		today_day = today_date.getDate();
		age = today_year - birth_year;

		if ( today_month < (birth_month - 1))
		{age--; }
		if (((birth_month - 1) == today_month) && (today_day < birth_day))
		{age--; }
		$('#idade').val(age);
	}

	function inss_each(item){
		my = {};
		my.namespaced = {};
		(my.namespaced.item = function() {
			console.log("constructed");
		})
	}

	function load_size(){
		window_size=($(window).width());
		if (window_size<768) {
			$('.roll_col').addClass('vertical_text');
			$('.roll_col').removeClass('text-center');
		}else{
			$('.roll_col').removeClass('vertical_text');
			$('.roll_col').addClass('text-center');
		}
	}

	function outro_informante() {
		var person = prompt("Quem prestou as informações?", "");
		if (person != null || person!="" || person!="undefined") {
			$('#outro_informante').html('outro: '+person);
			$('#informante1').val('outro: '+person);
		}else{
			alert("Nome inválido.");
			$('#outro_informante').html('outro');
		}
	}
//fecha functions


	var avaliador_count=0;
	var cid_count=0;
	var span_append;
	var input_append;
	var cidlist=[];

	// var pont=bigArray(arrayFloat(0,7),2);
	var total=arrayFloat(0,2);
	var dom_acumulado=new Array(
		new Array(5),
		new Array(5),
		new Array(5),
		new Array(5),
		new Array(5),
		new Array(5),
		new Array(5)
	);

	for (var k = dom_acumulado.length - 1; k >= 0; k--) {//preenche dom_acumulado
		for (var h = dom_acumulado[k].length - 1; h >= 0; h--) {
			dom_acumulado[k][h]=0;
		}
	}

	// $(window).resize(function () {
	// 	window_size=$(window).width();
	// 	if (window_size<768) {
	// 		$('.roll_col').addClass('vertical_text');
	// 		$('.roll_col').removeClass('text-center');
	// 	}else{
	// 		$('.roll_col').removeClass('vertical_text');
	// 		$('.roll_col').addClass('text-center');
	// 		console.log('window size: '+window_size);
	// 	}
	// });	

//abre elements
	$('.inss_select').val('0');
	$('.acumulado').hide();
	$('.ba_inputbox').attr('checked',false);

	$('.inss_select').change(function(){
		var dominio=this.className.split(" ")[0];
		dom_col=dominio.split('-')[1];
		dom_box=dominio.split('-')[1].split('.');
		valida=true;
		valor=0;
		$('[class^="'+dominio+'"]').each(function(){
			if (this.value=='0') {
				valida=false;
			}
		});
		if (valida) {
			$('[class^="'+dominio+'"]').each(function(){
				valor+=parseFloat(this.value);
			});
			// valor=(valor/i).toFixed(3);

			$('[id="dominio-'+dom_col+'"]').html(valor);
			pontuacao(dom_col,valor);
			$('[id="dominio-'+dom_col+'"]').css({
				'-webkit-box-shadow': '0 0 5px 2px var(--default-blue)',
				'-moz-box-shadow': '0 0 5px 2px var(--default-blue)',
				'box-shadow': '0 0 5px 2px var(--default-blue)'
			});
		}
	});

	$('#informante').change(function(){
		if (this.value=="4") {
			outro_informante();
		}else{
			$('#outro_informante').html('');
			$('#outro_informante').html('outro');
		}
	});

	$('.dp-box').change(function(){
		retorno='';
		count=0;
		marked=$('.dp-box:checked').length;
		$('.dp-box').each(function(){
			if (this.checked) {
				pontovirgula=(marked>1)?"; ":"";
				retorno+=this.value+pontovirgula;
				count++;
				marked--;
			}
		});
		// console.log(retorno);
		if (count>0) {
			$('#dp-text').html(retorno);
		}else{
			$('#dp-text').html('&nbsp;');
		}
	});

	$('.ba_inputbox').change(function(){
		box=this.id.split("-")[1];
		box_id='#check-'+box;
		$('[id="check-'+box).toggle();
		$('[id="uncheck-'+box).toggle();
		if (this.checked) {
			$('[id="ba_inputgroup-'+box).css('background-color','var(--default-blue)');
			acumulado(box,true);
		}else{
			$('[id="ba_inputgroup-'+box).css('background-color','white');
			acumulado(box,false);
		}
	});

	$('.ba_inputgroup').click(function(){
		box=this.id.split('-')[1];
		checked=$('[id="ba_checkbox-'+box+'"').is(':checked');
		if (checked) {
			$('[id="ba_checkbox-'+box+'"').attr('checked',false);
		}else{
			$('[id="ba_checkbox-'+box+'"').attr('checked',true);
		}
		$('[id="ba_checkbox-'+box+'"').change();

	});

	$('#hide_right').click(function(){
		$('[id="hide_right').hide();
		$('[id="hide_down').show();
		for (var i = 1; i <= 8; i++) {
			$('[class="funcao['+i+']"').show();
			$('[id="right-['+i+']"').show();
			$('[id="down-['+i+']"').hide();
		}
	});
	$('#hide_down').click(function(){
		$('[id="hide_down').hide();
		$('[id="hide_right').show();
		for (var i = 1; i <= 8; i++) {
			$('[class="funcao['+i+']"').hide();
			$('[id="right-['+i+']"').hide();
			$('[id="down-['+i+']"').show();
		}
	});

	$('.pop_detalhe').click(function(){
		var ref_id=this.id.split("-")[1];
		var plus='rightplus-'+ref_id;
		var minus='rightminus-'+ref_id;
		$('[id="detalhe-'+ref_id+'"').toggle();
		$('[id="'+plus+'"').toggle();
		$('[id="'+minus+'"').toggle();
		// console.log(ref_id);
		// snackbar($('[id="detalhe-'+ref_id+'"').val());
		// $('[id="down-'+ref_id+'"').toggle();
		// $('[id="right-'+ref_id+'"').toggle();
		// $('[id="detalhe-'+ref_id+'"').toggle();
	});

	$('.matriz_detalhe').click(function(){
		var ref_id=this.id.split("-")[1];
		detalhe='detalhe-'+ref_id;
		plusright='plusright-'+ref_id;
		minusright='minusright-'+ref_id;
		// $('#'+detalhe).hide();
		$('[id="'+detalhe+'"').toggle();
		$('[id="'+plusright+'"').toggle();
		$('[id="'+minusright+'"').toggle();
	});

	$('.funcao').click(function(){
		var ref_id=this.id.split('-')[1];
		// console.log(ref_id);
		$('[class="funcao'+ref_id+'"').toggle();
		$('[id="right-'+ref_id+'"').toggle();
		$('[id="down-'+ref_id+'"').toggle();
	});

	$('.matriz_updown').click(function(){
		var ref_id=this.id.split('-')[1];
		console.log(ref_id);
		$('[class="linha_matriz'+ref_id+'"').toggle();
		$('[id="mright-'+ref_id+'"').toggle();
		$('[id="mdown-'+ref_id+'"').toggle();
	});

	$("#datepicker2").change(function (){
		data=$('#datepicker2').val();
		var data=data.split("-");//aaaa-mm-dd
		calculate_age(data[1],data[2],data[0]);//(birth_month,birth_day,birth_year)
	});
	$("#date-icon1").click(function(){
		$("#datepicker1").focus();
	});
	$("#date-icon2").click(function(){
		$("#datepicker2").focus();
	});
	$('#add_avaliador').click(function(){
		avaliador=$('#avaliador').val();
		if (avaliador.length>0 ) {
			$('#avaliador').val('');
			span_append=
				'<div class="col-sm-12">'+
					'<div class="input-group form-group-md avaliadores" id="avaliador-['+avaliador_count+']">'+
						'<span id="remove_avaliador-['+avaliador_count+']" class="remove_avaliador hover_pointer input-group-addon glyphicon glyphicon-minus"></span>'+
						'<input type="text" class="form-control" value="'+avaliador+'" name="avaliador['+avaliador_count+']" placeholder="Insira avaliador">'+
					'</div>'+
				'</div>';
			
			$(".lista_avaliadores").append(span_append);
			avaliador_count++;
		}else{
			snackbar('Insira avaliador');
			$('#add_avaliador').focus();
		}
		$('.remove_avaliador').click(function(){
			numrow=this.id.split('-')[1];
			$('[id="avaliador-'+numrow+'"').fadeOut("slow",function(){
				$('[id="avaliador-'+numrow+'"').remove();
			});
		});
	});

	$('#add_cid').click(function(){
		cid=[$('#cid_id').val(),$('#desc_cid_id').val()];
		if (cid[0].length>0) {
			$('#cid_id').val('');
			$('#desc_cid_id').val('');
			ref=parseInt(cid_count);
			cidlist.push({"cid":cid[0],"desc":cid[1]});
			span_append=
				'<div class="col-sm-4 col-x-3">'+
					'<div class="card border-default cidcard float_left" id="cid-'+cid_count+'">'+
						'<div class="card-footer text-muted">'+
							'<h5>CID: '+cid[0]+'</h5>'+
						'</div>'+
						'<div class="card-body">'+
							'<h6>'+cid[1]+'</h6>'+
						'</div>'+
						'<div class="card-header text-muted">'+
							'<span id="remove_cid-'+cid_count+'" class="hover_pointer glyphicon glyphicon-minus remove_cid"></span>'+
						'</div>'
					'</div>'+
				'</div>'		
			;
			$(".cidrow").append(span_append);
			cid_count++;
			$('.cidrow').show();
			salva_lista();
		}else{
			snackbar('Busque um CID.');
			$('#cid_id').focus();
		}
		$('.remove_cid').click(function(){
			card=this.id.split('-')[1];
			$('[id="cid-'+card+'"]').fadeOut("slow",function(){
				$('[id="cid-'+card+'"]').remove();
			});
			cidlist[parseInt(card)]='null';
			salva_lista();
		});
	});
	
	$('.table_showhide').click(function(){
		table=this.id.split('-')[1];
		// console.log(table);
		$('[id="table'+table+'"').toggle();
		$('[id="table_show-'+table+'"').toggle();
		$('[id="table_hide-'+table+'"').toggle();
		// $('.table_show').toggle();
		// $('#table1').toggle();
	});
	$('.table_showhide2').click(function(){
		$('.table_showhide2').toggle();
		$('#table2').toggle();
	});
	$('.fuzzy_checkbox').change(function(){
		checkbox=this.id.split('-')[1];
		// console.log(checkbox);
		if (this.checked) {
			$('[id="row_fuzzy-'+checkbox+'"').css('background-color','#75E391');
			$('[id="linha_fuzzy-'+checkbox+'"').css('background-color','white');
		}else{
			$('[id="row_fuzzy-'+checkbox+'"').css('background-color','var(--medium-gray)');
			$('[id="linha_fuzzy-'+checkbox+'"').css('background-color','#EBEBEB');
		}
	});
	$('.linha_fuzzy').click(function(){
		checkbox=this.id.split('-')[1];
		checked=$('[id="fuzzy-'+checkbox+'"').is(':checked');
		// console.log(checked);
		if (checked) {
			$('[id="fuzzy-'+checkbox+'"').attr('checked',false);
		}else{
			$('[id="fuzzy-'+checkbox+'"').attr('checked',true);
		}
		$('[id="fuzzy-'+checkbox+'"').change();

	});
	$('.cid').change(function(){
		search_val=this.value;
		field_side=this.id;
		if (field_side=='cid_id') {
			search_col=0;
			find_col=1;
			other_col="#desc_cid_id";
		}else{
			search_col=1;
			find_col=0;
			other_col="#cid_id";
		}

		$.get('cid10.json', 
			function(data) {
				$.each(data,function(key,val){
					if (search_val==val[search_col]) {
						$(other_col).val(val[find_col]);
					}
				})
			},
			"json"
		);
	});
//fecha elements


console.log('loaded successfuly');
});