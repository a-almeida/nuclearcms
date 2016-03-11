<section class="panel panel-default">
	<header class="panel-heading">Gerir / {$nmethod}</header>
	<div class="panel-body" style="background:#eaeaea">
		 <div class="container-fluid">	
	          <div class="row">
	               <div class="col-sm-3">	<div  style="border:2px solid #fff;padding:10px;">
				<div id="fileTreeDemo_1" class="demo"></div>
	               </div></div>
	               <div class="col-sm-9" ><div  style="border:2px solid #fff;padding:10px;overflow:hidden;">
	               <h4><b>Directory </b></b><span id="directory"></span></h4>
				       <form id="upload" method="post" action="{PUBLICPATH}{ADMINFOLDER}/files/uploadimages/" enctype="multipart/form-data" class="col-sm-3">
				       <input type="hidden" name="directoria" value="" id="upload_dir">
				        <input type="hidden" value="{PUBLICPATH}" id="public_dir">
				       <div id="drop">
								NOVA IMAGEM
								<a class="btn btn-default"><i class="fa fa-plus-circle"></i> Adicionar</a>
								<input type="file" name="upl" multiple />
								<p >Largue aqui<br/>(DRAG-DROP)</p>
							</div>
			 				<ul></ul>
						</form>
						<div id="images">
	                    </div>	           
	                    </div>
				  </div>
			 </div>		
		</div> 
	</div> 
</section>
<script>
function removeimage(str,esta)
{
	
		var r = confirm("Tem a certeza que deseja eliminar?");
	    if (r == true) {
	    $.post( "{PUBLICPATH}{ADMINFOLDER}/files/images/remove/"+str, { 'delete':  str  }, function( data ) {
				$(esta).parent().remove();
				 //alert(data);
				});
	       
	    } else { event.preventDefault();	 return false;
	       
	    }
		
	}
</script>