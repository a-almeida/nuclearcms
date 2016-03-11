
	<section class="panel panel-default">
	    <header class="panel-heading">CONFIGURATIONS </header>
	    <div class="panel-body" >
			<div class="container-fluid">
			<form action="{PUBLICPATH}{ADMINFOLDER}/project/{$ncontrol}/" method="post">		
	                <div class="row">
  
{foreach from=$content item=value key=fokey}
{if $value->infoKEY=='logotipo'}
	<div class="col-sm-12">
	<div class="col-xs-2 text-right">
	  <label for="image"><h5>Logotipo</h5></label>
	</div>
	<div class="col-xs-3">
	
	 <div class="form-group">
	                     		
		<img src="{PUBLICPATH}uploads/sm/{$value->infoVALUE}" width="100%"/>
	                           
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="hidden" name="{$value->infoKEY}" class="form-control" id="{$value->infoKEY}" readonly 
	                                value="{$value->infoVALUE}" />
	 </div>
	 </div>
	 </div>

	{else}
	<div class="col-sm-12">
	<div class="form-group">	 
	     <div class="col-sm-2 text-right">
	         <label for="title"><h5>{$value->infoKEY}</h5> </label>
	     </div>
	     <div class="col-sm-10">
	     <input type="text" class="form-control" name="{$value->infoKEY}"  id="{$value->infoKEY}"  value="{$value->infoVALUE}" />
	     </div>
	    
	</div>
	<div class="clear"></div>
	</div>
	{/if} 
{/foreach}
<div class="col-xs-12">
<hr style="border:1px solid #ccc"/>
</div>

	                    <div class="col-xs-2"></div>
	                    <div class="col-md-6">
	                        <button type="submit" class="btn btn-success " id="btnContactUs">
	                            Salvar</button>
	                    </div>
	                </div>
	             </form>
			</div>
		</div>	
	</section>

	

		</div> 
	</div> 
</section>
{if isset($files_manager)}
{$files_manager}
{/if}

