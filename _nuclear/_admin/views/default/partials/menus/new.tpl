<section class="panel panel-default">
    <header class="panel-heading">Gerir / {$nmethod}</header>
    <div class="panel-body">
		<div class="container-fluid">
		<h5>Lista de {$nmethod} - Criar novo </h5>
		
			<form action="{PUBLICPATH}{ADMINFOLDER}/cms/{$ncontrol}/{$nmethod}" method="post">	
			<div class="row"  style="background:#eaeaea">
		
	                    <div class="col-sm-9">
	                  
	                        <div class="form-group">
	                            <label for="title">
	                               <h5>Titulo</h5> </label>
	                            <input type="text" class="form-control" name="title"  id="title" placeholder="título" required="required" />
	                        </div>
	                 
	                        <div class="form-group">
	                            <label for="descrit">
	                               <h5>Descrição Curta</h5> </label>
	                                <input type="text" name="descrit" class="form-control" id="descrit" placeholder="Descrição curta"   />
	                        </div>
	                     
	                        <div class="form-group">
	                            <label for="link">
	                               <h5>Link/endereço</h5> </label>
	                                <input type="text" name="link" class="form-control" id="link" placeholder="http://"   />
	                        </div>
	                      
	                    </div>
	                    <div class="col-sm-3">
	                    
	                   <div class="form-group">
	                   			<img src="{PUBLICPATH}uploads/xs/default.png" width="100%"/>
	                          
	                            <label for="image"><h5>Imagem</h5></label>
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="hidden" name="image" class="form-control" id="image" placeholder="Imagem" value="default.png" readonly/>
	                        </div>
	                     
	                    </div>
	                    <div class="col-md-12">
	                   
	                        <div class="form-group">
	                            <label for="text">
	                               <h5>Texto</h5> </label>
	                            <textarea name="text" id="text" class="form-control summernote"  rows="9" cols="25" 
	                                placeholder="Texto"></textarea>
	                        </div>
	             
	                    </div>
	                    <div class="col-md-6">
	                        <button type="submit" class="btn btn-success " id="btnContactUs">
	                            Salvar</button>
	                    </div>
	                </div>
			</form>
		</div>
		</div>
	</div>
</section>

{if isset($files_manager)}
{$files_manager}
{/if}
