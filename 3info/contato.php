<?php
	include("cabecalho.php");
?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8">
      <h2>Contato</h2>
       <form action="/action_page.php">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="nome">Nome:</label>
		    <input type="text" class="form-control" id="nome" name="nome">
		  </div>
		  <div class="form-group">
		    <label for="fone">Fone:</label>
		    <input type="text" class="form-control" id="fone" name="fone">
		  </div>
		  <div class="form-group">
		    <label for="descricao">Descrição:</label>
		    <textarea class="form-control" id="descricao" name="descricao"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form> 	
    </div>
  </div>
</div>

<?php
	include("rodape.php");	
?>