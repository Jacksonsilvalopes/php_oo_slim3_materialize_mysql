<?php $this->tituloPagina = "Lista de Detalhes"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Lista de Detalhes</h2>
    <h3>Titulo:<?php echo $this->modelo->titulo; ?></h3>
    <p>Descrição: <?php echo $this->modelo->desc; ?></p>
<?php $this->layout('layout.rodape'); ?>
