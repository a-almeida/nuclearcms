<section class="panel panel-default">
    <div class="panel-body">
		<div class="container-fluid">
		<a href="{PUBLICPATH}{ADMINFOLDER}/cms/pages/create" class="btn btn-success">  <i class="fa fa-plus"></i> Novo</a>
		<table class="table">
		     <thead>
		      <tr>
		       <td>Título</td>
		       <td>Endereço</td>
		       <td>ACTIONS</td>
		   	 </tr>
		   	 </thead>
		   	 <tbody  >		   	 
		     {foreach from=$table['results'] item=foo key=fokey}
		      <tr>
		       <td>{$foo->articlesNAME}</td>
		        <td>
		        /{if $foo->articlesSLUG!='home'}
		        {$foo->articlesSLUG}{/if}</td>
   				 <td>
		         <form action="{PUBLICPATH}{ADMINFOLDER}/cms/pages/delete/{$foo->articlesSLUG}" method="post">
		        <a href="{PUBLICPATH}{ADMINFOLDER}/cms/pages/edit/{$foo->articlesSLUG}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
		        <button  class="btn btn-danger" onclick="delete_item();"><i class="fa fa-remove"></i></button> 
		        <input type="hidden" name="delete" value="{$foo->articlesID}"/>
		        </form>
		       </td>
		       </tr>
			{/foreach}
				
		    </tbody>
		  </table>
		
		</div>
	</div>
</section>
