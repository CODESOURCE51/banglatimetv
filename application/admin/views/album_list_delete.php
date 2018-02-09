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
            <a href="#">Album Image List</a>
        </li>
    </ul>
</div>

<form name="news" id="news" action="<?php echo base_url();?>admin.php/dashboard/multi_img_delete" method="post" enctype="multipart/form-data">
<input type="hidden" name="category" id="category" value="" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Delete Multiple Images</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered responsive">
    <thead>
    <tr>
        <th>Select Checkbox</th>
        <th>Image</th>
        <th>Publish Date</th>
        
    </tr>
    </thead>
    <tbody>
    <?php  foreach($post_list as $wi)
                                {
				?>
    <tr>
        <td><input type="checkbox" id="mnews"  name="mnews" value="<?php echo $wi['img_id']; ?>"/></td>
        <td class="center">
       <img src="<?php echo base_url();?>album/images/<?php echo $wi['album_image']; ?>" width="200" height="170" />
         
                </td>
       
        <td class="center">
          <?php echo $wi['date']; ?> 
        </td>
    </tr>
	<?php } ?> 
	 
	 <tr>
        <td>Submit here >></td>
        <td class="center">
		<button type="button" class="btn btn-success" onclick="getCheckedCheckboxesFor()">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Submit
            </button>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td></td>
        <td class="center"></td>
       
       
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
<script>
function getCheckedCheckboxesFor() {
   var checkboxes = document.getElementsByName('mnews');
var selected = [];
for (var i=0; i<checkboxes.length; i++) {
    if (checkboxes[i].checked) {
        selected.push(checkboxes[i].value);
    }
}
 if(selected == '') {
    alert('You didn"t Select Any Image');
 } else {
    //alert(selected);
    //window.location.href = 'billing_multiple.php?bill_id='+selected;
    window.open('<?php echo base_url();?>admin.php/Dashboard/multi_img_delete/'+btoa(encodeURIComponent(selected)),'_self');
 }
}
</script>

