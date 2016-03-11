<link rel="stylesheet" href="{PUBLICPATH}assets/css/summernote.css">
<section class="panel panel-default">
    <header class="panel-heading">Gerir / {$nmethod}</header>
    <div class="panel-body">
		<div class="container-fluid">
		<form action="{PUBLICPATH}{ADMINFOLDER}/cms/menus/{$nmethod}/{$naction}" method="post">		
                <div class="row">
                    <div class="col-md-7">
                       <div class="form-group">
                            <label for="title"  style="float:left">
                               <h5>Nome</h5> </label>
                                <div class="col-xs-8"> 
                            <input type="text" class="form-control" name="title"  id="title" placeholder="título" required="required" value="{$content['results']->menuNAME}" />
                            </div>
                            <div style="clear:both"></div>
                        </div>
                         <div class="form-group">
                            <label for="descrit" style="float:left">
                               <h5>Destino</h5> </label>
                               <div class="col-xs-6">
                               <select class="form-control " name="link"  >
                               {foreach from=$links['results'] item=foo key=fokey}
                               <option value="{$foo->articlesSLUG}" {if $foo->articlesSLUG == $content['results']->menuLINK} selected{/if}>{$foo->articlesNAME}</option>
                               
                                
                                 {/foreach}
                               </select>
                               </div>
                              
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
</section>
