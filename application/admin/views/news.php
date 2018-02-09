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
            <a href="#">Headlines / Current News</a>
        </li>
    </ul>
</div>

<form name="news" id="news" action="<?php echo base_url();?>admin.php/dashboard/add_news" method="post" enctype="multipart/form-data" onsubmit="return validate_breaking_news_one()">
<input type="hidden" name="category" id="category" value="" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Add Headlimes / Current News</h2>

       
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
        <td>News Date</td>
        <td class="center">
    <input type="text" name="txt_ndate" id="datepicker" size="30">
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
        <td>News in short</td>
        <td class="center">
		<textarea name="ninshrt" id="inputSuccess1" class="desc"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
	<tr>
        <td>News picture</td>
         <td class="center">
		
                   <input type="file" name="filename" id="exampleInputFile" class="image_name">
                
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
        <td>News picture 2</td>
         <td class="center">
        
                   <input type="file" name="filename2" id="exampleInputFile" class="image_name2">
                
        </td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>News Description 2</td>
        <td class="center">
        <textarea name="bdesc2" id="inputSuccess1" class="desc2"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td>News picture 3</td>
         <td class="center">
        
                   <input type="file" name="filename3" id="exampleInputFile" class="image_name3">
                
        </td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>News Description 3</td>
        <td class="center">
        <textarea name="bdesc3" id="inputSuccess1" class="desc3"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td>News picture 4</td>
         <td class="center">
        
                   <input type="file" name="filename4" id="exampleInputFile" class="image_name4">
                
        </td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>News Description 4</td>
        <td class="center">
        <textarea name="bdesc4" id="inputSuccess1" class="desc4"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td>News picture 5</td>
         <td class="center">
        
                   <input type="file" name="filename5" id="exampleInputFile" class="image_name5">
                
        </td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>News Description 5</td>
        <td class="center">
        <textarea name="bdesc5" id="inputSuccess1" class="desc5"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td>News picture 6</td>
         <td class="center">
        
                   <input type="file" name="filename6" id="exampleInputFile" class="image_name6">
                
        </td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>News Description 6</td>
        <td class="center">
        <textarea name="bdesc6" id="inputSuccess1" class="desc6"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td>News picture 7</td>
         <td class="center">
        
                   <input type="file" name="filename7" id="exampleInputFile" class="image_name7">
                
        </td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>News Description 7</td>
        <td class="center">
        <textarea name="bdesc7" id="inputSuccess1" class="desc7"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
    
    <tr>
        <td>News Short Description</td>
        <td class="center">
       <input type="text" name="txt_short" maxlength="200" id="exampleInputFile" class="news_short"> (Max Character Length 200)</td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
     <tr>
        <td>Select for Current News</td>
        <td class="center">
        <label>
                        <input type="checkbox" value="0" name="txt_editorial" id="editors" onclick="check_editorial()">
                       
                    </label></td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
	 <tr>
        <td>Select for Headlines</td>
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
        <td class="center"><a href="<?php echo base_url();?>admin.php/dashboard/breaking_news" class="btn btn-warning">View Headlimes / Current News</a></td>
       
       
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

