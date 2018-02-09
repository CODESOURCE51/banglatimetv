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
            <a href="#">Breaking / Current News</a>
        </li>
    </ul>
</div>

<form name="news" id="news" action="<?php echo base_url();?>admin.php/dashboard/add_news" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news()">
<input type="hidden" name="category" id="category" value="" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Add Breaking / Current News</h2>

       
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
        <td>News Category</td>
        <td class="center">
    <div class="control-group">
                    

                    <div class="controls">
                     <select id="selectError" data-rel="chosen" name="txt_nCategory">
                     <?php foreach($value as $cat){?>
                           
                            <option value="<?php echo $cat['id'];?>"><?php echo $cat['service'];?></option>
                        <?php } ?>   
                        </select>
                       
                    </div>
                </div>
                </td>
        
        
       
        <td class="center">
            
           
        </td>
    </tr>
    <tr>
        <td>News name</td>
        <td class="center">
		
                    <input type="text" name="txt_news" class="form-control news_name" id="inputSuccess1">
                
		</td>
		
		
       
        <td class="center">
            
           
        </td>
    </tr>
	<tr>
        <td>News picture</td>
         <td class="center">
		
                   <input type="file" name="image_file1" id="exampleInputFile" class="image_name">
                
		</td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>News Description</td>
        <td class="center">
		<textarea name="bdesc" id="inputSuccess1" class="desc"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
	 <tr>
        <td>Select for Breaking News</td>
        <td class="center">
		<label>
                        <input type="checkbox" value="0" name="txt_credit" id="cust_credit" onclick="check_slider()">
                       
                    </label></td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
	 <tr>
        <td>Breaking News Image</td>
        <td class="center">
		<input type="file" name="image_file2" id="exampleInputFile" class="slide_image"></td>
       
        <td class="center">
           
           
        </td>
    </tr>
    <tr>
        <td>News Tags</td>
        <td class="center">
        
                    <input type="text" name="txt_tag" class="form-control news_tags" id="inputSuccess1">
                
        </td>
        
        
       
        <td class="center">
            
           
        </td>
    </tr>
     <tr>
        <td>Reported By</td>
        <td class="center">
        
                    <input type="text" name="txt_reporter" class="form-control news_reporter" id="inputSuccess1">
                
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
        <td class="center"><a href="<?php echo base_url();?>admin.php/dashboard/breaking_news" class="btn btn-warning">View Breaking / Current News</a></td>
       
       
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

