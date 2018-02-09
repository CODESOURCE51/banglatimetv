<?php require('header.php'); 

?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    
      $( "#datepicker" ).datepicker( "option", "dateFormat", 'DD, d MM, yy' );
  });
  </script>
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

<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/news_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
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
        <td>News name</td>
        <td class="center">
		
                    <input type="text" name="txt_news" class="form-control news_name" id="inputSuccess1" value="<?php echo $category[0]['name'];?>">
                
		</td>
		
		
       
        <td class="center">
            
           
        </td>
    </tr>
    <tr>
        <td>News Date</td>
        <td class="center">
    <input type="text" name="txt_ndate" id="datepicker" size="30" value="<?php echo $category[0]['date'];?>">
    </td>
        
        
       
        <td class="center">
            
           
        </td>
    </tr>
   
    
    <tr>
        <td>News Description</td>
        <td class="center">
		<textarea name="bdesc" id="inputSuccess1" class="desc"><?php echo $category[0]['desc'];?></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td>News Short Description</td>
        <td class="center">
       <input type="text" name="txt_short" id="exampleInputFile" maxlength="200" class="news_short" value="<?php echo $category[0]['sdesc'];?>"> (Max Character 200)</td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
     <tr>
        <td>Select for Current News</td>
        <td class="center">
        <label>
                        <input type="checkbox" value="<?php echo $category[0]['recent_news'];?>" name="txt_editorial" id="editors" <?php if($category[0]['recent_news'] == 1) {?>checked<?php }?> onclick="check_editorial()">
                       
                    </label></td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
	
   
    <tr>
        <td>News Tags</td>
        <td class="center">
        
                    <input type="text" name="txt_tag" class="form-control news_tags" id="inputSuccess1" value="<?php echo $category[0]['tags'];?>">
                
        </td>
        
        
       
        <td class="center">
            
           
        </td>
    </tr>
     <tr>
        <td>Reported By</td>
        <td class="center">
        
                    <input type="text" name="txt_reporter" class="form-control news_reporter" id="inputSuccess1" value="<?php echo $category[0]['reporter_name'];?>">
                
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

<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/news_image1_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_image1()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Change News Image 1</h2> 
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
        <td>Uploaded News picture</td>
         <td class="center">
                   <img src="<?php echo base_url();?>news/<?php echo $category[0]['news_image'];?>" width="130" height="130">       
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
        <td>Submit here >></td>
        <td class="center">
        <button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Submit
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

<form name="slider_break_news" id="slider_break_news" action="<?php echo base_url();?>admin.php/Edit/news_slider_image_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_slider_image()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Change Slider Image</h2> 
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
        <td>Select for Breaking News</td>
        <td class="center">
        <label>
                        <input type="checkbox" value="<?php echo $category[0]['slider'];?>" name="txt_credit" id="cust_credit" <?php if($category[0]['slider'] == 1) {?>checked<?php }?> onclick="check_slider()">
                       
                    </label></td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
      <tr>
        <td>Uploaded Breaking <br/> News picture</td>
         <td class="center">
        <?php if($category[0]['slider_image'] == 'N/A' ) {echo 'No Slider Image'; }else {?>
                   <img src="<?php echo base_url();?>slider/<?php echo $category[0]['slider_image'];?>" width="130" height="130">
           <?php }?>     
        </td>
       
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
        <td>Submit here >></td>
        <td class="center">
        <button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Submit
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
<?php if($category[0]['news_image2'] != 'na') { ?>
<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/news_image2_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_image2()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Change News Image 2</h2> 
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
        <td>Uploaded News picture</td>
         <td class="center">
                   <img src="<?php echo base_url();?>news/<?php echo $category[0]['news_image2'];?>" width="130" height="130">       
        </td>
        <td class="center"> 
        </td>
    </tr>
    <tr>
        <td>News picture</td>
         <td class="center">
                   <input type="file" name="image_file3" id="exampleInputFile" class="image_name2">      
        </td>
        <td class="center">  
        </td>
    </tr>
     <tr>
        <td>News Description 2</td>
        <td class="center">
        <textarea name="bdesc2" id="inputSuccess1" class="desc2"><?php echo $category[0]['desc2'];?></textarea></td>
       
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
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->
    </div> 
</form>
<?php } ?>

<?php if($category[0]['news_image3'] != 'na') { ?>
<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/news_image3_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_image3()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Change News Image 3</h2> 
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
        <td>Uploaded News picture</td>
         <td class="center">
                   <img src="<?php echo base_url();?>news/<?php echo $category[0]['news_image3'];?>" width="130" height="130">       
        </td>
        <td class="center"> 
        </td>
    </tr>
    <tr>
        <td>News picture</td>
         <td class="center">
                   <input type="file" name="image_file4" id="exampleInputFile" class="image_name3">      
        </td>
        <td class="center">  
        </td>
    </tr>
     <tr>
        <td>News Description 3</td>
        <td class="center">
        <textarea name="bdesc3" id="inputSuccess1" class="desc3"><?php echo $category[0]['desc3'];?></textarea></td>
       
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
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->
    </div> 
</form>
<?php } ?>

<?php if($category[0]['news_image4'] != 'na') { ?>
<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/news_image4_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_image4()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Change News Image 4</h2> 
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
        <td>Uploaded News picture</td>
         <td class="center">
                   <img src="<?php echo base_url();?>news/<?php echo $category[0]['news_image4'];?>" width="130" height="130">       
        </td>
        <td class="center"> 
        </td>
    </tr>
    <tr>
        <td>News picture</td>
         <td class="center">
                   <input type="file" name="image_file5" id="exampleInputFile" class="image_name4">      
        </td>
        <td class="center">  
        </td>
    </tr>
    <tr>
        <td>News Description 4</td>
        <td class="center">
        <textarea name="bdesc4" id="inputSuccess1" class="desc4"><?php echo $category[0]['desc4'];?></textarea></td>
       
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
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->
    </div> 
</form>
<?php } ?>

<?php if($category[0]['news_image5'] != 'na') { ?>
<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/news_image5_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_image5()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Change News Image 5</h2> 
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
        <td>Uploaded News picture</td>
         <td class="center">
                   <img src="<?php echo base_url();?>news/<?php echo $category[0]['news_image5'];?>" width="130" height="130">       
        </td>
        <td class="center"> 
        </td>
    </tr>
    <tr>
        <td>News picture</td>
         <td class="center">
                   <input type="file" name="image_file6" id="exampleInputFile" class="image_name5">      
        </td>
        <td class="center">  
        </td>
    </tr>
    <tr>
        <td>News Description 5</td>
        <td class="center">
        <textarea name="bdesc5" id="inputSuccess1" class="desc5"><?php echo $category[0]['desc5'];?></textarea></td>
       
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
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->
    </div> 
</form>
<?php } ?>

<?php if($category[0]['news_image6'] != 'na') { ?>
<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/news_image6_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_image6()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Change News Image 6</h2> 
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
        <td>Uploaded News picture</td>
         <td class="center">
                   <img src="<?php echo base_url();?>news/<?php echo $category[0]['news_image6'];?>" width="130" height="130">       
        </td>
        <td class="center"> 
        </td>
    </tr>
    <tr>
        <td>News picture</td>
         <td class="center">
                   <input type="file" name="image_file7" id="exampleInputFile" class="image_name6">      
        </td>
        <td class="center">  
        </td>
    </tr>
    <tr>
        <td>News Description 6</td>
        <td class="center">
        <textarea name="bdesc6" id="inputSuccess1" class="desc6"><?php echo $category[0]['desc6'];?></textarea></td>
       
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
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->
    </div> 
</form>
<?php } ?>
<?php if($category[0]['news_image7'] != 'na') { ?>
<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/news_image7_update" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_image7()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['news_id'];?>" />
<input type="hidden" name="txt_nCategory" id="txt_nCategory" value="<?php echo $category[0]['category'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Change News Image 7</h2> 
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
        <td>Uploaded News picture</td>
         <td class="center">
                   <img src="<?php echo base_url();?>news/<?php echo $category[0]['news_image7'];?>" width="130" height="130">       
        </td>
        <td class="center"> 
        </td>
    </tr>
    <tr>
        <td>News picture</td>
         <td class="center">
                   <input type="file" name="image_file8" id="exampleInputFile" class="image_name7">      
        </td>
        <td class="center">  
        </td>
    </tr>
     <tr>
        <td>News Description 7</td>
        <td class="center">
        <textarea name="bdesc7" id="inputSuccess1" class="desc7"><?php echo $category[0]['desc7'];?></textarea></td>
       
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
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->
    </div> 
</form>
<?php } ?>
<div id="lazy_load"><img src="<?php echo base_url();?>/assets/admin/img/ajax-loaders/ajax-loader-7.gif" title="img/ajax-loaders/ajax-loader-7.gif" class="cvvhelp" style="display:none;" /></div>

<?php require('footer.php'); ?>

