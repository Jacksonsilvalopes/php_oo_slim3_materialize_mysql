<?php $this->tituloPagina = "Adicionar Compras"; 
$id =  $this->modelo->id;

?>

<?php $this->layout('layout.topo'); ?>
    <h2>Editar</h2> 

    <form action="/compras/<?php echo $id ?>" method="post">
      <input type="hidden" name="_METHOD" value="put">  
      <input type="text" name="titulo" value="<?php echo $this->modelo->titulo ?>" >
      <input type="text" name="desc" value="<?php echo $this->modelo->desc ?>" >
      <button>Atualizar</button>
    </form>

<?php $this->layout('layout.rodape'); ?>
