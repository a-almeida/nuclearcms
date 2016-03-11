<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 15:10:53
  from "X:\_work\dev\_nuclear\demo\demo_cspcs\_nuclear\_admin\views\default\common\scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e2d1ed5d9823_18096043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79c3a6885b1a11bf6ac76cbf04211332de7b63e2' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\demo\\demo_cspcs\\_nuclear\\_admin\\views\\default\\common\\scripts.tpl',
      1 => 1457705452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e2d1ed5d9823_18096043 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.12.1.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/metismenu/metismenu.min.js"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/summernote/summernote.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/responsive-layouts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript"	src="<?php echo PUBLICPATH;?>
assets/js/vendor/sortable/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript"	src="<?php echo PUBLICPATH;?>
assets/js/vendor/sortable/jquery.mjs.nestedSortable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript"
	src="http://dev.server/_old/web_manager/assets/js/morris.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript"
	src="http://dev.server/_old/web_manager/assets/js/raphael.js"><?php echo '</script'; ?>
>


<!-- jQuery File Upload Dependencies -->				
		<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/uploadfiles/jquery.knob.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/uploadfiles/jquery.ui.widget.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/uploadfiles/jquery.iframe-transport.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/uploadfiles/jquery.fileupload.js"><?php echo '</script'; ?>
>
		

<?php if (isset($_smarty_tpl->tpl_vars['docsfull']->value)) {
echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/uploadfiles/script2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/filetree/jqueryFileTree2.js"><?php echo '</script'; ?>
>
<?php } else {
echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/uploadfiles/script.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PUBLICPATH;?>
assets/js/vendor/filetree/jqueryFileTree.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript">

			$(document).ready( function() {
				$('#fileTreeDemo_1').fileTree({ script: '<?php echo PUBLICPATH;?>
'}, function(file) { });
			});
		<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
ResponsiveLayouts('btn btn-default','<i class="fa fa-bars"></i>','<i class="fa fa-bars"></i>');
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function sort(s)
{
if(s==1)
{
	$('.orders').show();
	$('#on_sort').hide();
	$('#sortable').sortable("enable");
	$('#off_sort').show();
}
else{
	$('.orders').hide();
	$('#off_sort').hide();
	$('#sortable').sortable("disable");
	$('#on_sort').show();
}

}
function remova(este)
{	
	
	 event.preventDefault();
	 $(este).parent().parent().remove();
	 }
$( document ).ready(function() {
	 $('#menu').metisMenu();

	 $( "#sortable" ).sortable({
	     placeholder: "alert alert-warning",
	     cursor: 'move',
	     update: function(event, ui) {
	         var order = $("#sortable").sortable("toArray");


	         $.ajax({
	       	   url: this.href,
	       	   data: {
	       	      menus:  order.join(",")
	       	   },
	       	   error: function() {
	       	      $('#info').html('<p>An error has occurred</p>');
	       	   },
	       	   success: function(data) {
	       	   },error: function(erro) {
	            	  alert('ocurreu um erro');
	              },
	       	   type: 'POST'
	       	});

	         
	     }
	 });
	 $('#sortable').sortable("disable");
	 $('.orders').hide();
});


<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
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
    <?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
>
function delete_item()
{
	if (confirm('Tem a certeza que deseja remover este registo?')) {
		this.form.submit();
	} else {
		event.preventDefault();	 return false;
	}
}

<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
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
		var urlimage=image.replace('<?php echo PUBLICPATH;?>
uploads/docs/', "");
		var input = $(target).find('input');
		$(input).val(urlimage);

		$('#myModal').modal('toggle');
	}
	function selecionaimage(obj)
	{
		event.preventDefault();
		var image = $(obj).attr('src');
		var urlimage=image.replace('<?php echo PUBLICPATH;?>
uploads/sm/', "");

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
	
	<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

/*
$(function() {				
    Morris.Area({
        element: "morris-area-chart",			        
        data: <?php echo $_smarty_tpl->tpl_vars['morris']->value;?>
,
        xkey: "period",
        ykeys: ["totalusers","totalindex","total"],
        labels: ["Utilizadores","Visitas","PageViews"],
        pointSize: 3,
        hideHover: "auto",
        xLabels:"day"
    });	  
});
*/
<?php echo '</script'; ?>
>
			
            
           <?php }
}
