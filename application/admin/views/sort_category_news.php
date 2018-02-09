<?php require('header.php'); 

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
            <a href="#">Sponsors</a>
        </li>
    </ul>
</div>

<form name="news" id="news" action="<?php echo base_url();?>admin.php/dashboard/sort_category_news" method="post" enctype="multipart/form-data">
<input type="hidden" name="category" id="category" value="" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Add Sponsors</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        <th></th>
        
    </tr>
    </thead>
    <tbody>
    
    <tr>
        <td>Add Position</td>
        <td class="center">
        <label class="radio-inline">
            <input type="radio" value="2" id="inlineRadio2" class="inlineRadio2" name="inlineRadioOptions" checked style="opacity: 1;"> কলকাতা
        </label>
         <label class="radio-inline">
            <input type="radio" value="3" id="inlineRadio2" class="inlineRadio2" name="inlineRadioOptions" style="opacity: 1;"> রাজ্য
        </label>
         <label class="radio-inline">
            <input type="radio" value="4" id="inlineRadio2" class="inlineRadio2" name="inlineRadioOptions" style="opacity: 1;"> দেশ
        </label>
         <label class="radio-inline">
            <input type="radio" value="5" id="inlineRadio2" class="inlineRadio2" name="inlineRadioOptions" style="opacity: 1;"> বিশ্ব
        </label>
        <label class="radio-inline">
            <input type="radio" value="6" id="inlineRadio2" class="inlineRadio2" name="inlineRadioOptions" style="opacity: 1;">খেলা
        </label>
        <label class="radio-inline">
            <input type="radio" value="7" id="inlineRadio2" class="inlineRadio2" name="inlineRadioOptions" style="opacity: 1;">বিনোদন
        </label>
         <label class="radio-inline">
            <input type="radio" value="8" id="inlineRadio2" class="inlineRadio2" name="inlineRadioOptions" style="opacity: 1;">লাইফ স্টাইল
        </label>
        <label class="radio-inline">
            <input type="radio" value="12" id="inlineRadio2" class="inlineRadio2" name="inlineRadioOptions" style="opacity: 1;">ব্যবসা
        </label>
         
                </td>
       
        <td class="center">
           
        </td>
    </tr>
	 
	 
	 <tr>
        <td>Submit here >></td>
        <td class="center">
		<button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Submit
            </button>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td></td>
        <td class="center"><a href="<?php echo base_url();?>admin.php/dashboard/vew_sponsors" class="btn btn-warning">View Sponsors</a></td>
       
       
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

