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
            <a href="#">Rail Budget</a>
        </li>
    </ul>
</div>

<form name="general_news" id="general_news" action="<?php echo base_url();?>admin.php/Edit/update_vote_news" method="post" enctype="multipart/form-data" onsubmit="return validate_budget()">
<input type="hidden" name="category" value="<?php echo $category[0]['bg_id'];?>">
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Update Puja News</h2>

       
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
        <td>Title</td>
        <td class="center">
		
                    <input type="text" name="txt_news_title" class="form-control budget_title" id="inputSuccess1" value="<?php echo $category[0]['budget_title'];?>">
                
		</td>
		
		
       
        <td class="center">
            
           
        </td>
    </tr>
     <tr>
        <td>Content</td>
        <td class="center">
                <textarea name="bdesc" id="inputSuccess1" class="bdesc"><?php echo $category[0]['content'];?></textarea>
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
        <td class="center"><a href="<?php echo base_url();?>admin.php/dashboard/view_puja_news" class="btn btn-warning">View All Puja News</a></td>
       
       
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

