<link rel="stylesheet" href="{PUBLICPATH}assets/css/summernote.css">
<section class="panel panel-default">
    <header class="panel-heading">Gerir / {$nmethod}</header>
    <div class="panel-body">
		<div class="container-fluid">
		<form action="{PUBLICPATH}{ADMINFOLDER}/cms/pages/{$nmethod}/{$naction}" method="post">		
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title">
                               <h5>Titulo</h5> </label> 
                            <input type="text" class="form-control" name="title"  id="title" placeholder="título" required="required" value="{$content->articlesTITLE}" />
                        </div>
                        <div class="form-group">
                            <label for="descrit">
                               <h5>Descrição Curta</h5> </label>
                                <input type="text" name="descrit" class="form-control" id="descrit" placeholder="Descrição curta" required="required" 
                                value="{$content->articlesSUBTITLE}" />
                        </div>
                        <div class="form-group">
                            <label for="text">
                               <h5>Texto</h5> </label>
                            <textarea name="text" id="text" class="form-control summernote"  rows="9" cols="25" 
                                placeholder="Texto">{$content->articlesTEXT}</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
	                   <div class="form-group">
	                     		<img src="{PUBLICPATH}uploads/sm/{$content->articlesIMG}" width="100%"/>
	                            <label for="image"><h5>Imagem</h5></label>
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="text" name="image" class="form-control" id="image" placeholder="Imagem" required="required" 
	                                value="{$content->articlesIMG}" />
	                    </div>
                     </div>
                    <div class="col-md-12">
                        
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success " id="btnContactUs">
                            Salvar</button>
                    </div>
                   
                </div>
             </form>
		</div>
	</div>	
</section>

{if isset($files_manager)}
{$files_manager}
{/if}
