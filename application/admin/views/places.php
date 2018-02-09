<?php require('header.php'); 

$this->load->model('base_model');
$show = $this->base_model->show_data('td_category','*','')->result_array();
$category = $this->base_model->show_data('td_service','*','')->result_array();

//print_r($category);
?>
<style>
#lazy_load {
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: black;
    z-index: 1001;
    -moz-opacity: 0.8;
    opacity: .80;
    filter: alpha(opacity=80);
}
.cvvhelp {
    border: medium none;
    display: none;
    height: auto;
    left: 50%;
    margin: 0 0 0 -155px;
    padding: 0;
    position: fixed;
    text-align: left;
    top: 50%;
    width: auto;
    z-index: 1002;
}
</style>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<form name="cms_page" id="cms_page" action="<?php echo base_url();?>admin.php/dashboard/add_place" method="post" enctype="multipart/form-data">
<input type="hidden" name="category" id="category" value="" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Add Service information</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        <th></th>
        
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Category name</td>
        <td class="center">
		
                   <select id="selectError" name="txt_cat_typ" data-rel="chosen">
                            <?php foreach ($show as $cat) { ?>
							<option value="<?php echo $cat['category_id'];?>"><?php echo $cat['location'];?></option>
							<?php } ?>
                            
                        </select>
                
		</td>
		
		
       
        <td class="center">
            
           
        </td>
    </tr>
	 <tr>
        <td>Category Nesting name</td>
        <td class="center">
		
                   <input type="text" name="txt_sub_cat" class="form-control" id="inputSuccess1">
                
		</td>
		
		
       
        <td class="center">
            
           
        </td>
    </tr>
	<tr>
        <td>Category Nesting picture</td>
         <td class="center">
		
                   <input type="file" name="image_file1" id="exampleInputFile">
                
		</td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>Contact Number</td>
        <td class="center">
		<input type="text" name="txt_phn" class="form-control" id="inputSuccess1"></td>
       
        <td class="center">
           
        </td>
    </tr>
	 <tr>
        <td>Contact Person</td>
        <td class="center">
		<input type="text" name="txt_person" class="form-control" id="inputSuccess1"></td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
	 <tr>
        <td>Contact Address</td>
        <td class="center">
		<input type="text" name="txt_address" class="form-control" id="inputSuccess1"></td>
       
        <td class="center">
           
           
        </td>
    </tr>
	<tr>
        <td>Contact Email</td>
        <td class="center">
		<input type="text" name="txt_email" class="form-control" id="inputSuccess1"></td>
       
        <td class="center">
           
           
        </td>
    </tr>
	<tr>
        <td>Description</td>
        <td class="center">
		<textarea class="autogrow" style="height: 60px; margin: 0px; width: 179px;" name="txt_description" id="txt_mission"></textarea></td>
       
        <td class="center">
           
           
        </td>
    </tr>
	 <tr>
        <td>Site Link</td>
        <td class="center">
		<input type="text" name="txt_website" class="form-control" id="inputSuccess1"></td>
       
        <td class="center">
           
           
        </td>
    </tr>
	<tr>
        <td>Service type</td>
        <td class="center">
		  <select id="selectError" name="txt_srvc_typ" data-rel="chosen">
                            <?php foreach ($category as $serv ){ ?>
							<option value="<?php echo $serv['id'];?>"><?php echo $serv['service'];?></option>
							<?php }?>
                            
                        </select>
       
        <td class="center">
           
           
        </td>
    </tr>
	 <tr>
        <td>Submit here >></td>
        <td class="center">
		<button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Category entry
            </button>
       
        <td class="center">
           
        </td>
    </tr>
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
	
	  
</form>
<div id="lazy_load"><img src="<?php echo base_url();?>/assets/admin/img/ajax-loaders/ajax-loader-7.gif" title="img/ajax-loaders/ajax-loader-7.gif" class="cvvhelp" style="display:none;" /></div>

<?php require('footer.php'); ?>

