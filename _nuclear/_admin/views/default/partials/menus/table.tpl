
<section class="panel panel-default">
    <div class="panel-body">
		<div class="container-fluid">
		<table class="table">
		    <thead>
		      <tr><td></td>
		       {if isset($table['cols']['title'])}
		       <td>name</td>
		       {/if} 
		       {if isset($table['cols']['title'])}
		       <td>link</td>
		       {/if} 
		       <td>ACTIONS</td>
		   	 </tr>
		   	 </thead>
		   	 
		   	 <tbody id="sortable">
		   	 
		   	{if isset($table['cols']) && isset($table['type']) && $table['type']=='articles'}
		     {foreach from=$table['results'] item=foo key=fokey}
		      <tr id="sort{$foo->menuID}">
		      <td>
		       <span class="fa fa-arrows pull-left orders" style="cursor:move"></span>
		       </td>
		     {if isset($table['cols']['title'])}
		       <td>{$foo->menuNAME}</td>
		       {/if} 
		       {if isset($table['cols']['link'])}
		        <td>/{$foo->menuLINK}</td>
		       {/if} 
   				 <td>
		         <form action="{PUBLICPATH}{ADMINFOLDER}/cms/menus/delete/{$foo->menuID}" method="post">
		        <a href="{PUBLICPATH}{ADMINFOLDER}/cms/menus/edit/{$foo->menuID}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
		        <button  class="btn btn-danger" onclick="delete_item();"><i class="fa fa-remove"></i></button> 
		        <input type="hidden" name="delete" value="{$foo->menuID}"/>
		        
		        </form>
		       
		       </td>
		       </tr>
			{/foreach}
				
			{/if}
		    </tbody>
		  </table>
		
		</div>
	</div>
</section>
