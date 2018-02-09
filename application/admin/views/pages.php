<?php require('header.php'); 

$cat1_id = $data[0]['page_id'];
$cat1_cat = $data[0]['category'];
$cat1_about = $data[0]['about-us'];
$cat2_id = $data[1]['page_id'];
$cat2_cat = $data[1]['category'];
$cat2_privacy = $data[1]['our-policy'];
$cat3_id = $data[2]['page_id'];
$cat3_cat = $data[2]['category'];
$cat3_career = $data[2]['our-career'];
$cat4_id = $data[3]['page_id'];
$cat4_cat = $data[3]['category'];
$cat4_advers = $data[3]['our-advers'];
$cat5_id = $data[4]['page_id'];
$cat5_cat = $data[4]['category'];
$cat5_disclaim = $data[4]['our-disclaim'];
$cat6_id = $data[5]['page_id'];
$cat6_cat = $data[5]['category'];
$cat6_terms = $data[5]['our-info'];
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
            <a href="#">Pages</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> <span id="content_type">Choose Page type</span></h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="control-group">
                   

                    <div class="controls">
                      <label class="control-label" for="selectError">Select Page type : </label>   <select id="selectError" data-rel="chosen" onchange="return show_basic();">
                            <option value="">Choose a page type</option>
							<option value="about">About us</option>
                            <option value="advertisement">Advertisement</option>
                            <!-- <option value="disclaimer">Disclaimer</option> -->
                            <option value="terms">Terms</option>
                            <option value="privacy">Privacy</option>
                            <option value="career">Career</option>
                           
                        </select>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
<form name="cms_page" id="cms_page" action="<?php echo base_url();?>dashboard/page_submit" method="post" enctype="multipart/form-data">
<input type="hidden" name="category" id="category" value="" />
  <div class="row" id="about_contant" style="display:none;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> You have Choosen About us</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>About Us</td>
        <td class="center"><textarea class="autogrow" style="height: 60px; margin: 0px; width: 179px;" name="txt_about" id="txt_about" onkeyup="return form_submit();"><?php if(!empty($cat1_about)) echo $cat1_about; ?></textarea></td>
    </tr>
    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
	<!-- Advertisement-->
    <div class="row" id="adver_contant" style="display:none;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> You have Choosen About us</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        
    </tr>
    </thead>
    <tbody>
    
    <tr>
        <td>Advertisements</td>
        <td class="center"><textarea class="autogrow" style="height: 60px; margin: 0px; width: 179px;" name="txt_advers" id="txt_mission" onkeyup="return form_submit();"><?php if(!empty($cat4_advers)) echo $cat4_advers; ?></textarea></td>
        
       
    </tr>
    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
    <!-- Advertisement Ends -->
    <!-- Disclaimer -->
    <div class="row" id="disclaimer_contant" style="display:none;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> You have Choosen About us</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        
    </tr>
    </thead>
    <tbody>
   
    <tr>
        <td>Disclaimer</td>
        <td class="center"><textarea class="autogrow" style="height: 60px; margin: 0px; width: 179px;" name="txt_disclaim" id="txt_disclaim" onkeyup="return form_submit();"><?php if(!empty($cat5_disclaim)) echo $cat5_disclaim; ?></textarea></td>
       
       
    </tr>
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
    <!-- Disclaimer Ends -->
    <!-- Terms-->
    <div class="row" id="terms_contant" style="display:none;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> You have Choosen About us</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        
    </tr>
    </thead>
    <tbody>
    
    <tr>
        <td>Our Terms : </td>
        <td class="center"><textarea class="autogrow" style="height: 60px; margin: 0px; width: 179px;" name="txt_terms" id="txt_info" onkeyup="return form_submit();"><?php if(!empty($cat6_terms)) echo $cat6_terms; ?></textarea></td>
       
        
    </tr>
    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
    <!-- Terms Ends -->
	  <div class="row" id="privacy_contant" style="display:none;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> You have Choosen Privacy</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Privacy Policy : </td>
        <td class="center"><textarea class="autogrow" style="height: 60px; margin: 0px; width: 179px;" name="txt_policy" id="txt_policy" onkeyup="return form_submit();"><?php if(!empty($cat2_privacy)) echo $cat2_privacy; ?></textarea></td>
       
    </tr>
	 
	 
    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
	
	
	 <div class="row" id="career_contant" style="display:none;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> You have Choosen Career</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Career @Bangla Time</td>
        <td class="center"><textarea class="autogrow" style="height: 60px; margin: 0px; width: 179px;" name="txt_career" id="txt_career" onkeyup="return form_submit();"><?php if(!empty($cat3_career)) echo $cat3_career; ?></textarea></td>
       
        
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

