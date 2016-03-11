
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{PUBLICPATH}assets/js/vendor/metismenu/metismenu.min.js"></script>

		<script src="{PUBLICPATH}assets/js/vendor/summernote/summernote.js"></script>
<script src="{PUBLICPATH}assets/js/vendor/responsive-layouts.js"></script>
<script type="text/javascript"	src="{PUBLICPATH}assets/js/vendor/sortable/jquery-ui.min.js"></script>
<script type="text/javascript"	src="{PUBLICPATH}assets/js/vendor/sortable/jquery.mjs.nestedSortable.js"></script>


<!-- jQuery File Upload Dependencies -->				
		<script src="{PUBLICPATH}assets/js/vendor/uploadfiles/jquery.knob.js"></script>
		<script src="{PUBLICPATH}assets/js/vendor/uploadfiles/jquery.ui.widget.js"></script>
		<script src="{PUBLICPATH}assets/js/vendor/uploadfiles/jquery.iframe-transport.js"></script>
		<script src="{PUBLICPATH}assets/js/vendor/uploadfiles/jquery.fileupload.js"></script>
		


<script src="{PUBLICPATH}assets/js/vendor/uploadfiles/script.js"></script>
<script src="{PUBLICPATH}assets/js/vendor/filetree/jqueryFileTree.js"></script>
<script type="text/javascript">

			$(document).ready( function() {
				$('#fileTreeDemo_1').fileTree({ script: '{PUBLICPATH}'}, function(file) { });
			});
		</script>
<script>
ResponsiveLayouts('btn btn-default','<i class="fa fa-bars"></i>','<i class="fa fa-bars"></i>');
</script>
<script>

function remova(este)
{	
	
	 event.preventDefault();
	 $(este).parent().parent().remove();
	 }
$( document ).ready(function() {
	 $('#menu').metisMenu();

	 
	 $('.orders').hide();
});


</script>
<script type="text/javascript">
    $(function() {
    	$('.summernote').summernote({
    		fontNames: [
    		            'Roboto', 'Sans', 'Arial', 'Arial Black'
    		        ],
    		        fontNamesIgnoreCheck: [
    		                               'Roboto'
    		                           ],
    		  toolbar: [
    		    ['style', ['bold', 'italic', 'underline', 'clear']],
    		    ['font', ['strikethrough', 'superscript', 'subscript']],
    		    ['fontsize', ['fontsize','fontname']],
    		    ['color', ['color']],
    		    ['para', ['ul', 'ol', 'paragraph']],
    		    ['code', ['codeview']]
    		  ],
    		  height:'350px'
    		});

    });
    </script>
 <script>
function delete_item()
{
	if (confirm('Tem a certeza que deseja remover este registo?')) {
		this.form.submit();
	} else {
		event.preventDefault();	 return false;
	}
}

</script>

	<script>
	function new_img()
	{
		event.preventDefault();
var ht = $('#newimg').html();
$('#newimgs').append(ht);
		}
	function new_doc()
	{
		event.preventDefault();
var ht = $('#newdoc').html();
$('#newdocs').append(ht);
		}
	var target='';
	function selecionadoc(obj)
	{
		event.preventDefault();
		var image = $(obj).attr('href');
		var urlimage=image.replace('{PUBLICPATH}uploads/docs/', "");
		var input = $(target).find('input');
		$(input).val(urlimage);

		$('#myModal').modal('toggle');
	}
	function selecionaimage(obj)
	{
		event.preventDefault();
		var image = $(obj).attr('src');
		var urlimage=image.replace('{PUBLICPATH}uploads/sm/', "");

		var targetimg = $(target).find('img');
		$(targetimg).attr('src',image);
		var input = $(target).find('input');
		$(input).val(urlimage);
		$('#myModal').modal('toggle')
		
	}
	function getimage(obj)
	{
		
		target=$(obj).parent();

		}
	
	</script>
			
            
           