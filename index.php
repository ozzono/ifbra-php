<?php require_once 'cabecalho.php'; ?>
<?php require_once 'form_funcoes.php'; ?>

<?php $form_filter=$_GET['filter']; ?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

<div class="container titulo">
	<h1><p>Avaliação Médica e Funcional</p></h1>
	<h2><div id="snackbar"></div></h2>
	<h6>
		*Portaria interministerial SDH/MPS/MF/MOG/AGU nº 1.<br>
		27 de janeiro de 2014.<br>
		Índice de Funcionalidade Brasileiro: Aplicado para fins de classificação e concessão de aposentadoria da pessoa com deficiência. (IF-BrA)
	</h6>
	<a href="http://sislex.previdencia.gov.br/paginas/65/SDH-MPS-MF-MOG-AGU/2014/1.htm" role='button' target="_blank" class="btn btn-primary" id="consultar">
		Consultar Portaria
	</a>
</div>

<form action="">
	<?php 
	if (isset($form_filter)) {
		$form_filter=explode("*", $form_filter);
		foreach ($form_filter as $filter) {
			require_once 'form'.$filter.'.php';
		}
	}else{
		require_once 'form1.php';
		require_once 'form2.php';
		require_once 'form3.php';
		require_once 'form4.php';
	}
	?>
</form>
<?php require_once("rodape.php"); ?>