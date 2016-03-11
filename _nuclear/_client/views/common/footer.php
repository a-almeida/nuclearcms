<section  >

<style>
.gray{filter: url("data:image/svg+xml;utf8,&lt;svg xmlns=\'http://www.w3.org/2000/svg\'&gt;&lt;filter id=\'grayscale\'&gt;&lt;feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/&gt;&lt;/filter&gt;&lt;/svg&gt;#grayscale"); /* Firefox 10+, Firefox on Android */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%);}
</style>
  <!--=== Footer Version 1 ===-->
    <div  style="padding-top:6px;background:#d9a300;" >
        <div class="footer" style="padding-bottom:50px;padding-top:50px">
            <div class="container" >
				<div class="row">         
				
				 	 <div class="col-md-8 md-margin-bottom-40" >
					 <div><h5 style="color:#000000;;Text-transform:uppercase">Contactos</h5><hr style="border:1px solid #000"/></div>
                   		<div class="col-md-4 md-margin-bottom-40" >
                        	<address class="md-margin-bottom-40"  style="color:#fff;Text-transform:uppercase">
	                       	<?=$project['title'];?><br/>
							<?=$project['description'];?><br/>
							<?=$project['address'];?><br/>
							 </address>
						</div>
						<div class="col-md-4 md-margin-bottom-40"  style="color:#fff;">
							<?=$project['CEP'];?>
							<?=$project['city'];?> | 
							<?=$project['country'];?><br/>								
							<b>email:</b><?=$project['email'];?>
						</div>
					</div>
					<div class="col-md-4 md-margin-bottom-40" >
					<div><h5 style="color:#000000;;Text-transform:uppercase">Social Network</h5><hr style="border:1px solid #000"/></div>
                   	
							<div class="network">
							<?php if(isset($project['facebook']) && ($project['facebook']!='' ||  $project['google']!='' ||  $project['linkedin']!='') )
								{
									 
								}
							if(isset($project['facebook']) && $project['facebook']!='' )
								{
								
									echo '<a target="_blank" href="'.$project['facebook'].'"><i class="fa fa-facebook"></i></a>';
								}
								?>	
								<?php if(isset($project['google']) && $project['google']!='' )
								{
									echo '<a  target="_blank" href="'.$project['google'].'"><i class="fa fa-google"></i></a>';
								}
								?>
								<?php if(isset($project['linkedin']) && $project['linkedin']!='' )
								{
									echo '<a target="_blank" href="'.$project['linkedin'].'"><i class="fa fa-linkedin"></i></a>';
								}
								?>
								</div>
                      
                    </div>
                </div>
            </div>
        </div><!--/footer-->
<style>
.network a:hover{background:#fff;color:#000;}
.network a{background:transparent;color:#fff;
margin-right:10px;height:30px;width:30px;line-height:30px;text-align:center;display:block;float:left;border:1px solid #fff
}
</style>
        <div class="copyright" style="background:#000000;border-top:2px solid #4a4a4a;padding-top:6px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p style="color:#fff;text-align:center" ><?=$project['title'];?> &copy;<?=date("Y",time());?>
                         <b>Developed by: </b><a href="http:///www.joelferreira.eu" target="_blank" style="color:#4d4d4d;text-decoration:underline">Joel Ferreira</a> 
                           
                         </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                       
                    </div>
                    <!-- End Social Links -->
                </div>
            </div>
        </div><!--/copyright-->
    </div>
</section>    
    
    <p id="back-top2" >
		<a href="#top">
			<span  class="shadow"><i class="fa fa-arrow-up" style="margin-bottom:6px"></i> <br/>TOP</span>
		</a>
	</p>
    
    
    <style>
    .footer a,.footer a:active,.footer a:focus{color:#fff;text-transform:uppercase}
    </style>
    