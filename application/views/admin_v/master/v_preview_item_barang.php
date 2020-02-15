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
						<?php if ($uri3 == "") { ?>
						<li><a href="<?=base_url()?><?=$uri1?>/<?=$uri2?>"><?=ucfirst($uri1)?></a> </li>
						<li class="active"><?=ucfirst($uri2)?></li>
						<?php } else{?>
						<li><a href="javascript:void(0)"><?=ucfirst($uri1)?></a> </li>
						<li><a href="<?=base_url()?><?=$uri1?>/<?=$uri2?>/<?=$uri3?>"><?=ucfirst($uri2)?></a> </li>	
						<li class="active"><?=ucfirst($uri3)?></li>
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
		<div class="vd_title-section">
			<div class="vd_panel-header">
				<h1><?=ucfirst($uri3)?></h1>
			</div>
		</div><!-- vd_title-section -->
		<div class="vd_content-section clearfix">
		<!-- INI CONTENT -->
		<div class="row">				<div class="col-md-12" id="kolomA">
					<div class="panel widget light-widget panel-bd-left vd_bdl-yellow">
						<div class="panel-heading no-title">
							<h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-eye"></i> </span> preview <?=$this->uri->segment(3)?> </h3>
							<div class="vd_panel-menu">
								<div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
								<div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
									<div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
									<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
										<div class="child-menu">
											<div class="content-list content-menu">
												<ul class="list-wrapper pd-lr-10">
													<li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
							</div><!-- vd_panel-menu -->
						</div>

						<!-- ISINYA -->
						<div class="clearfix"></div>  				
						<div class="panel-body">
							<div class="table-responsive" id="table_data_koe" >
								<table class="table table-striped">
							<tr>
				<td width="20%">Barcode</td>
				<td>: <?=$barcode;?></td>
				</tr>
							<tr>
				<td width="20%">Nama</td>
				<td>: <?=$nama;?></td>
				</tr>
							<tr>
				<td width="20%">Satuan</td>
				<td>: <?=$satuan;?></td>
				</tr>
							<tr>
				<td width="20%">Harga beli</td>
				<td>: <?=$harga_beli;?></td>
				</tr>
							<tr>
				<td width="20%">Harga jual cust</td>
				<td>: <?=$harga_jual_cust;?></td>
				</tr>
							<tr>
				<td width="20%">Harga jual umum</td>
				<td>: <?=$harga_jual_umum;?></td>
				</tr>
							<tr>
				<td width="20%">Stok</td>
				<td>: <?=$stok;?></td>
				</tr>
							<tr>
				<td width="20%">Limit stok</td>
				<td>: <?=$limit_stok;?></td>
				</tr>
					</table>
								<hr />
								<div class="text-right">
									<button class="btn vd_btn vd_btn-bevel vd_bg-red font-semibold" onclick="goBack()"> Kembali</button>
								</div>
							</div>
							<br><br><br><br>

					</div>
				</div>		
		

		</div><!-- .row--> 
		<!-- AKHIR CONTENT -->	
		</div>
		</div><!-- .vd_content --> 
		</div><!-- .vd_container --> 
		</div><!-- .vd_content-wrapper --> 
		<script type="text/javascript" src="<?=base_url()?>assets/admin/js/myjsfile/my-custom-option.js"></script>