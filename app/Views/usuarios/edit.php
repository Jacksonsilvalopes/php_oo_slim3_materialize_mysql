<?php $this->tituloPagina = "Adicionar Usuarios"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Editar</h2>

    <form action="/usuarios/<?php echo $this->modelo->id ?>" method="post">
      <input type="hidden" name="_METHOD" value="put" >
      <input type="text" name="nome" value="<?php echo $this->modelo->nome ?>" >
      <input type="email" name="email" value="<?php echo $this->modelo->email ?>" >
      <input type="password" name="senha">
      <button type="submit" >Atualizar</button>
    </form>

<?php $this->layout('layout.rodape'); ?>
