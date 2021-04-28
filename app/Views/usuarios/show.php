<?php $this->tituloPagina = "Lista de Usuarios"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Lista de Usuarios</h2>
    <h3><?php echo $this->modelo->nome; ?></h3>  
    <p>Email: <?php echo $this->modelo->email; ?></p>
<?php $this->layout('layout.rodape'); ?>
