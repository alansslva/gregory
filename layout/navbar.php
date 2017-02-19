
  <nav class="navbar navbar-default">
    <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="#"><?=  $config->getProjectName() ?></a>
   </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
     <li class=""><a href="#">Início <span class="sr-only">(current)</span></a></li>
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="<?=  $config->baseUrl('pages/create-customer') ?>">Pessoa</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="<?=  $config->baseUrl('pages/create-types') ?>">Tipo de Produto</a></li>
        <li><a href="<?=  $config->baseUrl('pages/create-product') ?>">Produto</a></li>
      </ul>
    </li>
    <li><a href="<?=  $config->baseUrl('pages/create-operation') ?>">Realizar Operação</a></li>
    <li><a href="#">Consultar Operação</a></li>

  </ul>
 </li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>