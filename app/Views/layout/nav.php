<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="/compras">Compras</a></li>
  <li><a href="/usuarios">Usuarios</a></li>
  <li class="divider"></li>
  <li><a href="/logout">Logoff</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
    <?php if(isset($_SESSION['nome'])){ ?>
      <li><a href="/logout">Logoff</a></li>
      <li><a href="#!">  <?php      echo $_SESSION['nome'] ;  ?></a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
  <?php } ;?>
    </ul>
  </div>
</nav>

