<?php
    include_once("header.php");
?>
<div class="container">
CADASTRAR CONTATO
 <form class="row g-3" method="POST" action="../Controller/AdicionarContato.php">
    <div class="col-md-8">
        <label for="inputNome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nomeContato" id="inputNome">
    </div>
    <div class="col-md-4">
        <label for="inputFone" class="form-label">Fone</label>
        <input type="text" class="form-control"  name="foneContato" id="inputFone">
    </div>
   
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
    </form>
</div>
<?php
    include_once("footer.php");
?>