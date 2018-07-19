$(document).ready(function(){
	var avaliador_count=0;
	var span_append;
	var input_append;

	$(window).resize(function () {
		window_size=$(window).width();
		if (window_size<768) {
			$('.roll_col').addClass('vertical_text');
			$('.roll_col').removeClass('text-center');
		}else{
			$('.roll_col').removeClass('vertical_text');
			$('.roll_col').addClass('text-center');
			console.log('window size: '+window_size);
		}
	});	

	function snackbar($content) {
		var x = document.getElementById("snackbar");
		x.className = "show";
		x.innerHTML=$content;
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		$('#add_avaliador').focus();
	}

	function calculate_age(birth_month,birth_day,birth_year)
	{
		today_date = new Date();
		today_year = today_date.getFullYear();
		today_month = today_date.getMonth();
		today_day = today_date.getDate();
		age = today_year - birth_year;

		if ( today_month < (birth_month - 1))
		{
			age--;
		}
		if (((birth_month - 1) == today_month) && (today_day < birth_day))
		{
			age--;
		}
		$('#idade').val(age);
	}

	function inss_each(item){
		loga(item);
		my = {};
		my.namespaced = {};
		(my.namespaced.item = function() {
			console.log("constructed");
		})
	}

	function loga(printa){console.log(printa);}

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
	load_size();

	$('.inss_select').change(function(){
		var dominio=this.className.split(" ")[0];
		dom_col=dominio.split('-')[1];
		dom_box=dominio.split('-')[1].split('.')[0];
		i=0;
		valida=true;
		valor=0;
		$('[class^="'+dominio+'"]').each(function(){
			if (this.value=='null') {
				valida=false;
			}
		});
		if (valida) {
			$('[class^="'+dominio+'"]').each(function(){
				valor+=parseInt(this.value);
				i++;
			});
			valor=valor/i;
			$('[id="dominio-'+dom_col+'"]').html(valor);
			$('[id="dominio-'+dom_col+'"]').css({
				'-webkit-box-shadow': '0 0 5px 2px var(--default-blue)',
				'-moz-box-shadow': '0 0 5px 2px var(--default-blue)',
				'box-shadow': '0 0 5px 2px var(--default-blue)'
			});
		}
	});

	$('.coluna-1, .coluna-2').change(function(){
		var coluna=this.className.split(" ")[1];
		var col=this.className.split(" ")[1].split('-')[1];
		i=0;
		valida=false;
		valor=0;
		loga('[class^="'+coluna+'"]');
		$('[class^="'+coluna+'"]').each(function(){
			if (this.value=='null') {
				valida=true;
			}
		});
		loga(valida);
		for (var j = 1; j <= 7; j++) {
			$('[class^="inss_select-'+j+'.'+col+'"]').each(function(){
				valor+=parseInt(this.value);
				i++;
			});
		}
		loga('[class^="inss_select-'+j+'.'+col+'"]');
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
		$('.dp-box').each(function(){
			if (this.checked) {
				retorno+=this.value+"; ";
				count++;
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
		}else{
			$('[id="ba_inputgroup-'+box).css('background-color','white');
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
		var detalhe=$('[id="detalhe-'+ref_id+'"').val();
		// console.log(ref_id);
		snackbar($('[id="detalhe-'+ref_id+'"').val());
		// $('[id="down-'+ref_id+'"').toggle();
		// $('[id="right-'+ref_id+'"').toggle();
		// $('[id="detalhe-'+ref_id+'"').toggle();
	});

	$('.matriz_detalhe').click(function(){
		var ref_id=this.id.split("-")[1];
		var detalhe=$('[id="matriz_detalhe-'+ref_id+'"').val();
		// console.log(ref_id);
		snackbar(detalhe);
		// $('[id="down-'+ref_id+'"').toggle();
		// $('[id="right-'+ref_id+'"').toggle();
		// $('[id="detalhe-'+ref_id+'"').toggle();
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
			$('[id="row_fuzzy-'+checkbox+'"').css('background-color','white');
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
	

	console.log('loaded successfuly');
});