<?php require('header.php'); ?>
<style>
    #contentWrap2 {
	width: 700px;
	margin: 0 auto;
	height: auto;
	overflow: hidden;
}

#contentTop2 {
	width: 600px;
	padding: 10px;
	margin-left: 30px;
}

#contentLeft2 {
	float: left;
	width: 400px;
}

#contentLeft2 li {
	list-style: none;
	margin: 0 0 4px 0;
	padding: 10px;
	background-color:#00CCCC;
	border: #CCCCCC solid 1px;
	color:#fff;
        font: bold;
}


	

#contentRight2 {
	float: right;
	width: 260px;
	padding:10px;
	background-color:#336600;
	color:#FFFFFF;
}

</style>

<script type="text/javascript" src="<?php echo base_url();?>assets/admin_assets/js/jquery-ui-1.7.1.custom.min.js"></script>


<br/>
<br/>
<div id="contentWrap2">

	
		<div id="contentLeft2">
			<ul>
				<?php
				//$query  = "SELECT * FROM records ORDER BY recordListingID ASC";
				//$result = mysql_query($query);
				
				//while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				//{
                                foreach($trick_list as $wi)
                                {
				?>
                            <li id="recordsArray_<?php echo $wi['trick_id']; ?>">
                                <div>
                                    <table cellpadding="2">
                                        <tr>
                                    
                                    <td>
                                    ID
                                    </td>
                                    <td>
                                    Name &nbsp; (Drag Up & Down To Re-order)
                                    </td>
                                    
                                        </tr>
                                        <tr>
                                    <td>
                                        <?php echo $wi['trick_id']; ?>
                                    </td>
                                    <td>
                                       <?php echo $wi['trick_news']; ?>
                                    </td>
                                    
                                        </tr>
                                    </table>  
                                </div>
                            </li>
				
                                            <?php } ?>
			</ul>
		</div>
		
		<div id="contentRight2">
		  <p>Array will be displayed here.</p>
		  <p>&nbsp; </p>
		</div>
	
	</div>
</div>
<?php require('footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(){ 
                           
    $(function() {
        $("#contentLeft2 ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
            var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 
            $.post("<?php echo base_url();?>admin.php/dashboard/order_breaking_news", order, function(theResponse){
                $("#contentRight2").html(theResponse);
            });                                                              
        }                                 
        });
    });

}); 
</script>
<!-- For Drag and drop -->