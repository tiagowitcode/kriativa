

<div id="content">
			<div id="content-header">
				<h1><?php echo $nomecontroller; ?></h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/listar" title="Listar Noticias" class="tip-bottom"> <?php echo $nomecontroller;?> </a>
				<a href="#" class="current">Alterar <?php echo $nomecontroller;?></a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/gravar_alteracao" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Nome</label>
										<div class="controls">
											<input type="text" name="nome" id="nome" value="<?php echo $dados[0]->nome; ?>" />
											
										</div>
									</div>
									
									
									<div class="control-group">
										<label class="control-label">Tipo</label>
										<div class="controls">
											<select name="tipo" id="tipo">
												<option value="<?php echo $dados[0]->tipo; ?>"><?php echo $dados[0]->tipo;?></option>
												<option value="musica">Musica</option>
												<option value="empresas">Empresas/Eventos</option>
												<option value="outrasartes">Outras Artes</option>
												<option value="projetos">Projetos Patrocinados</option>

											</select>	
											
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Descricao</label>
										<div class="controls">
											<textarea name="descricao" id="descricao" cols="70" rows="20" /><?php echo $dados[0]->descricao;?></textarea>
										<script type="text/javascript">
												CKEDITOR.replace( 'descricao' );
											</script>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Imagens</label>
										<div class="controls">
											<input type="file" name="userfile[]" id="imagem" size="20" class="multi" />
										</div>
									</div>
									
									<div class="form-actions">
									<input type="hidden" name="id" value="<?php echo $dados[0]->id; ?>" />
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
								<div class="gallery-masonry">
                                    
									<?php
										foreach($fotos as $foto):
											?>
											<div class="item">
												<a href="#" class="thumbnail">
													<img src="<?php echo base_url();?>imgs/<?php echo $foto->nome;?>" alt="">
												</a>
												<div class="actions">
													
													<a title="Remove" href="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/excluirfoto/<?php echo $foto->id;?>" class="tip-top"><i class="icon-remove icon-white"></i></a>
												</div>
											 </div>
										<?php endforeach; ?>
									</div>
								
						
		    
					</div>
				</div>	
			



