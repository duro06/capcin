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
			<div class="row">
				<div class="col-md-4" id="kolomA">

					<div class="panel widget light-widget panel-bd-left vd_bdl-yellow">

						<div class="panel-heading no-title">
							<h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-square"></i> </span> Form <?=$this->uri->segment(3)?> </h3>
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
						<div class="panel-body">
							<form id="add-form" action="#" class="form-horizontal" role="form">
								<input type="hidden" value="" name="id" id="id_data"/>
								<div class="row">
									
									<div class="col-md-12">
										<label for="controller" class="control-label">Controller</label>
										<div class="controls">
											<input type="text" name="controller" placeholder="Masukkan Controller">
										</div>
									</div>
									<div class="col-md-12">
										<label for="url" class="control-label">Url</label>
										<div class="controls">
											<input type="text" name="url" placeholder="Masukkan Urlnya">
										</div>
									</div>
									<div class="col-md-12">
										<label for="icon" class="control-label">Icon</label>
										<div class="controls">
											<input type="text" name="icon" placeholder="Masukkan Iconnya">
										</div>
									</div>
									<div class="col-md-6">
										<label for="urut" class="control-label">Urut</label>
										<div class="controls">
											<input type="number" name="urut" placeholder="Sorting">
										</div>
									</div>
									<div class="col-md-6"> 
										<label for="url" class="control-label">Submenu?</label>
										<div class="controls">
											<select name="is_main" id="is_main" >
												<option value="0"> Tidak</option>
												<option value="1"> Submenu</option>
											</select>
										</div>
									</div>
									<div class="col-md-12" style="display:none;">
										<label for="id_main" class="control-label">id main</label>
										<div class="controls">
											<input type="text" name="id_main" id="id_main" placeholder="Masukkan Controller" value="0" readonly="on">
										</div>
									</div>
								</div>
							</form>
							<hr />
							<div class="text-right">
								<button class="btn vd_btn vd_bg-grey" id="btnCancel">Cancel</button>
								<button class="btn vd_btn vd_bg-green" id="btnSave">Save</button>
								
							</div>
						</div>
					</div>	
				</div>
				<div class="col-md-8" id="kolomB">
					<div class="panel widget light-widget panel-bd-left ">
						<div class="panel-heading no-title">
							<h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-folder-open-o"></i> </span> Table <?=$this->uri->segment(3)?> </h3>
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

						<div class="panel-body">
							<!--START HTML TBALE LAYOUT-->
							<form role="form" id ="form-order" style="display:none;">
								<input type="text" name="column" id="column" >
								<input type="text" name="ascDesc" id="ascDesc">
							</form>
							<!--START HTML NUMBER OF ITEM PER PAGE BLOCK-->
							<div class="headOptionTableData" style="float:left;">
								<label>
									<div style="display:inline-block">
										<select class="form-control input-sm" id="nav_rowsPerPage">
											<option value="10">10</option>
											<option value="50">50</option>
											<option value="100">100</option>
											<option value="All">All</option>
										</select>
									</div>
								</label>
								<label>
									<div style="display:inline-block" >
										<ul class="list-anchor-table">
											<li><a href="javascript:void(0)" id="refreshTable" data-toggle="tooltip" title="Refresh Tabel" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></a></li>
											<li><a href="javascript:void(0)" id="newData" data-toggle="tooltip" title="Tambah Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a></li>
											<!-- <li><a href="<?=$import_baru;?>" data-id="4" data-toggle="tooltip" title="Import From Excel" class="btn btn-default btn-sm" ><i class="fa fa-file-excel-o" ></i></a></li> -->
										</ul>
									</div>
								</label>
								<label>
									<div style="display:inline-block">Filters </div>
									<label >
										<input type="hidden" class="form-control input-sm" name="subKategori" id="subKategori" >
									</label>
									<label>
										<input type="text" class="form-control input-sm" name="search_txt" id="search_txt" placeholder="Search Data">
									</label> 
									<!-- <label> --> 
									<div style="display:inline-block" >With Selected : <i class="fa fa-long-arrow-right"></i></div>
									<div style="display:inline-block" >
										<ul class="list-anchor-table">
											<li><button id="btnDelete" data-toggle="tooltip" title="Hapus Data" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></li>
											<!-- <li><a href="#" id="btnExport" data-url="<?=$url_export;?>" data-toggle="tooltip" title="Export to Excel" class="btn btn-next btn-xs"><i class="fa fa-file-excel-o"></i></a></li> -->
											<!-- <li><a href="#" id="btnExportPdf" data-url="<?=$url_export_pdf;?>" data-toggle="tooltip" title="Export details to pdf" class="btn btn-warning btn-xs"><i class="fa fa-file-pdf-o"></i></a></li> -->
										</ul>
									</div>
								</label> 
							</div>
							<!-- INI UNTUK KIRIM ARRAY ID -->
							<form method="post" id="form-export" action="" style="display:none;" >
								<input type="text" name="id_item" id="id_item" value="" />
								<input type="submit" id="submit" name="submit" value="Submit" />
							</form>
							<div class="clearfix"></div>  	
							<div class="table-responsive" id="table_data_koe"></div>
							<!--START TOTAL ITEM INFO BLOCK-->
							<div style="padding: 15px;">
								<div style="float:left;">
									<label >
										<span class="label vd_bg-black" id="nav_info"></span>
									</label>
								</div>
							</div>

							<!--END PAGINATION BUTTON-->
						</div>
						<!--END RESPONSIVE TBALE-->
					</div>
				</div><!-- .col-sm --> 
			</div><!-- .row--> 

			<!-- AKHIR CONTENT -->

			
		</div>
	</div><!-- .vd_content --> 
</div><!-- .vd_container --> 
</div><!-- .vd_content-wrapper --> 
<!-- <div id="message" style="display:none;"><h1>Loading</h1></div> -->
<script type="text/javascript" src="<?=base_url()?>assets/admin/js/myjsfile/my-custom-option.js"></script>

<script>
function __subKategori(id)	{
	$('#subKategori').val(id);
	$('#id_main').val(id);
	showList('');
}
// $('#subKategori').on('change', function(){

// })
</script>

