<?php $this->load->view('layout/sidebar'); ?>

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view('layout/navbar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

  <nav  aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item "><a href="<?php echo base_url('/'); ?>">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
  </ol>
  </nav>

<!-- DataTales Example -->
<div class="card shadow mb-3">
    <div class="card-body">
    <form method="POST" name="form_edit">  
              
  <div class="form-group row mb-5">

    <div class="col-md-3">
    <label>Razão social</label>
    <input type="text" class="form-control" name="sistema_razao_social" placeholder="Razao social" value="<?php echo $sistema->sistema_razao_social;  ?>" >
   <?php echo form_error('sistema_razao_social', '<small class="form-text text-danger">','</small>');  ?>
  </div>

  <div class="col-md-3">
    <label>Nome fantasia</label>
    <input type="text" class="form-control" name="sistema_nome_fantasia" placeholder="Nome fantasia" value="<?php echo $sistema->sistema_nome_fantasia;  ?>" >
    <?php echo form_error('sistema_nome_fantasia', '<small class="form-text text-danger">','</small>');  ?>
  </div>

  <div class="col-md-3">
    <label>NIF/CNPJ</label>
    <input type="text" class="form-control" name="sistema_cnpj" placeholder="S" value="<?php echo $sistema->sistema_cnpj;  ?>" >
    <?php echo form_error('sistema_cnpj', '<small class="form-text text-danger">','</small>');  ?>
  </div>
  
  <div class="col-md-3">
    <label>Inscriçao estadual</label>
    <input type="text" class="form-control" name="sistema_ie" placeholder="Inscrição estadual" value="<?php echo $sistema->sistema_ie;  ?>" >
    <?php echo form_error('sistema_ie', '<small class="form-text text-danger">','</small>');  ?>
  </div>

  </div>

              
  <div class="form-group row mb-3">

    <div class="col-md-3">
    <label>Telefone fixo</label>
    <input type="text" class="form-control" name="sistema_telefone_fixo" placeholder="Telefone fixo" value="<?php echo $sistema->sistema_telefone_fixo;  ?>" >
   <?php echo form_error('sistema_telefone_fixo', '<small class="form-text text-danger">','</small>');  ?>
  </div>

  <div class="col-md-3">
    <label>Telefone móvel</label>
    <input type="text" class="form-control" name="sistema_telefone_movel" placeholder="Telefone móvel" value="<?php echo $sistema->sistema_telefone_movel;  ?>" >
    <?php echo form_error('sistema_telefone_movel', '<small class="form-text text-danger">','</small>');  ?>
  </div>

  <div class="col-md-3">
    <label>URL do site</label>
    <input type="text" class="form-control" name="sistema_site_url" placeholder="URL do site" value="<?php echo $sistema->sistema_site_url;  ?>" >
    <?php echo form_error('sistema_site_url', '<small class="form-text text-danger">','</small>');  ?>
  </div>
  
  <div class="col-md-3">
    <label>E-mail de contacto</label>
    <input type="text" class="form-control" name="sistema_email" placeholder="E-mail de contacto" value="<?php echo $sistema->sistema_email;  ?>" >
    <?php echo form_error('sistema_email', '<small class="form-text text-danger">','</small>');  ?>
  </div>

  </div>

  <div class="form-group row mb-3">

<div class="col-md-4">
<label>Endereço</label>
<input type="text" class="form-control" name="sistema_endereco" placeholder="Endereço" value="<?php echo $sistema->sistema_endereco;  ?>" >
<?php echo form_error('sistema_endereco', '<small class="form-text text-danger">','</small>');  ?>
</div>

<div class="col-md-2">
<label>CEP</label>
<input type="text" class="form-control" name="sistema_cep" placeholder="CEP" value="<?php echo $sistema->sistema_cep;  ?>" >
<?php echo form_error('sistema_cep', '<small class="form-text text-danger">','</small>');  ?>
</div>

<div class="col-md-2">
<label>Número</label>
<input type="text" class="form-control" name="sistema_numero" placeholder="Número" value="<?php echo $sistema->sistema_numero;  ?>" >
<?php echo form_error('sistema_numero', '<small class="form-text text-danger">','</small>');  ?>
</div>

<div class="col-md-2">
<label>Cidade</label>
<input type="text" class="form-control" name="sistema_cidade" placeholder="Cidade" value="<?php echo $sistema->sistema_cidade;  ?>" >
<?php echo form_error('sistema_cidade', '<small class="form-text text-danger">','</small>');  ?>
</div>

<div class="col-md-2">
<label>Estado</label>
<input type="text" class="form-control" name="sistema_estado" placeholder="Estado" value="<?php echo $sistema->sistema_estado;  ?>" >
<?php echo form_error('sistema_estado', '<small class="form-text text-danger">','</small>');  ?>
</div>


</div>

<div class="form-group row mb-3">

<div class="col-md-12">
<label>Texto da ordem de serviço e venda</label>
<textarea  class="form-control" name="sistema_txt_ordem_servico" placeholder="Texto da ordem de serviço e venda" ><?php echo $sistema->sistema_txt_ordem_servico; ?></textarea>
<?php echo form_error('sistema_txt_ordem_servico', '<small class="form-text text-danger">','</small>');  ?>
</div>


</div>


  <div class="form-group row">

  <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
</form>
      <div class="table-responsive">
      <table class="table table-bordered dataTable"  width="100%" cellspacing="0">
                
      </div>
   </div>
 </div>

</div>
        <!-- /.container-fluid -->
</div>
      <!-- End of Main Content -->

     