<div class="vd_content-wrapper">
	<div class="vd_container">
		<div class="vd_content clearfix">
			<div class="vd_head-section clearfix">
				<div class="vd_panel-header">
					<ul class="breadcrumb">
						<?php 
							$uri3= $this->uri->segment(3);
							$uri2= $this->uri->segment(2);
							$uri1= $this->uri->segment(1);
							
						?>
						<?php if ($uri3 == '') { ?>
						<li><a href="<?=base_url()?><?=$uri1?>/<?=$uri2?>"><?=strtolower($uri1)?></a> </li>
						<li class="active"><?=strtolower($uri2)?></li>
						<?php } else{?>
						<li><a href="javascript:void(0)"><?=strtolower($uri1)?></a> </li>
						<li><a href="<?=base_url()?><?=$uri1?>/<?=$uri2?>/<?=$uri3?>"><?=strtolower($uri2)?></a> </li>	
						<li class="active"><?=strtolower($uri3)?></li>
						<?php }?>
						<?php ?>
					</ul>
					<div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
						<div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
						<div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
						<div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
					</div>

				</div>
			</div><!-- vd_head-section -->
			
			<!-- INI HEADLINE TITLE -->
			<div class="vd_title-section clearfix">
				<div class="vd_panel-header">
					<h1>Dashboard</h1>
					<small class="subtitle">Dashboard Panel to control Administrator</small> 
				</div>
			</div><!-- vd_title-section -->
			
			<!-- INI CONTENT -->
			<div class="vd_content-section clearfix">
				<!-- CONTENT DISINI -->

				<div class="row">
              		<div class="col-md-5">
                		<div class="row">
                  			<div class="col-md-12">
			                    <div class="vd_status-widget vd_bg-green widget">
									<div class="vd_panel-menu">
							  			<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> 
							  			</div>
									</div>
									<!-- vd_panel-menu --> 
			                                
								    <a class="panel-body" href="#">
								        <div class="clearfix">
								            <span class="menu-icon">
								                <i class="icon-network"></i>
								            </span>
								            <span class="menu-value">
								                1,256,134
								            </span>  
								        </div>   
								        <div class="menu-text clearfix">
								            Total Visitors
								        </div>                                                               
								    </a>        
								</div>                    
							</div><!--col-md-12 --> 
                		</div><!-- .row -->

		                <div class="row">
		                  	<div class="col-xs-6">
		                    	<div class="vd_status-widget vd_bg-red  widget">
		    						<div class="vd_panel-menu">
		  								<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> 
		  								</div>
									</div>
								<!-- vd_panel-menu --> 
								                                 
								    <a class="panel-body" href="#">                                
								        <div class="clearfix">
								            <span class="menu-icon">
								                <i class="icon-bars"></i>
								            </span>
								            <span class="menu-value">
								                24
								            </span>  
								        </div>   
								        <div class="menu-text clearfix">
								            New Orders
								        </div>  
								     </a>                                                                
								</div>                    
							</div><!--col-xs-6 -->

                  			<div class="col-xs-6">
                    			<div class="vd_status-widget vd_bg-blue widget">
    								<div class="vd_panel-menu">
  										<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> 
  										</div>
									</div>
								<!-- vd_panel-menu --> 
								                                  
								    <a class="panel-body"  href="#">                                  
								        <div class="clearfix">
								            <span class="menu-icon">
								                <i class="fa fa-comments"></i>
								            </span>
								            <span class="menu-value">
								                14
								            </span>  
								        </div>   
								        <div class="menu-text clearfix">
								            New Reviews
								        </div>
								     </a>                                                                  
								</div>                   
							</div><!--col-xs-6 --> 
                		</div><!-- .row -->

                	<div class="row">
                  		<div class="col-xs-6">
                    		<div class="vd_status-widget vd_bg-yellow widget">
    							<div class="vd_panel-menu">
  									<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> 
  									</div>
								</div>
							<!-- vd_panel-menu --> 
							                                  
							    <a class="panel-body"  href="#">                                
							        <div class="clearfix">
							            <span class="menu-icon">
							                <i class="icon-users"></i>
							            </span>
							            <span class="menu-value">
							                250
							            </span>  
							        </div>   
							        <div class="menu-text clearfix">
							            New Users
							        </div>  
							     </a>                                                                
							</div>                    
						</div><!--col-xs-6 -->

                  		<div class="col-xs-6">
                    		<div class="vd_status-widget vd_bg-grey widget">
    							<div class="vd_panel-menu">
  									<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> 
  									</div>
								</div>
							<!-- vd_panel-menu --> 
							                                   
							    <a class="panel-body"  href="#">                                  
							        <div class="clearfix">
							            <span class="menu-icon">
							                <i class="fa fa-tasks"></i>
							            </span>
							            <span class="menu-value">
							                3
							            </span>  
							        </div>   
							        <div class="menu-text clearfix">
							            New Tasks
							        </div>
							     </a>                                                                  
							</div>                   
						</div><!--col-md-xs-6 --> 
                	</div><!-- .row --> 
                
                	</div><!-- .col-md-5 -->
              
	              	<div class="col-md-7">
	              		Diisi Nanti
	              	</div> <!-- .col-md-7 -->
            	</div><!-- .row atas-->





            
				
				<!-- AKHIR CONTENT -->
			</div><!-- .vd_content-section --> 
		</div><!-- .vd_content --> 
	</div><!-- .vd_container --> 
</div><!-- .vd_content-wrapper --> 
	