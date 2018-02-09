
<?php include('_header.php'); ?>
<!-- CONTENT -->
<div class="content row">
    <!-- INDEX PAGE -->
    <div class="ambrogrid_10 single-post">
        <div class="breadcrumbs">
            <a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a> &Gt; <a href="#">যোগাযোগ</a>
        </div>
        <div class="single-title">
            <h2> আমাদের সঙ্গে যোগাযোগ করুন</h2>
            <div class="clear"></div>
        </div>
        <div class="single-content">
        <form role="form" class="contact" action="<?php echo base_url();?>send_buy_mail.php" id="contact_form" method="post" enctype="multipart/form-data" >
            
                <input name="name" type="text" class="half" placeholder="আপনার নাম" required>
                <input name="phone" type="text" class="half" placeholder="ফোন নম্বর" required>
                <input name="email" type="txt_email" placeholder="আপনার ইমেইল" required>
                <input name="subject" type="text" placeholder="যোগাযোগের কারণ" required>
                <textarea name="message" id="message" placeholder="বার্তা" required></textarea>
                <button type="submit">বার্তা পাঠান</button><?php echo $msg[0];?>
            </form>
        </div>
    </div>
    <?php include('_sidebar.php'); ?>
</div>



<script>
    $(".vid-thumbs > a").click(function () {
        console.log($(this).attr('href'));
        flowplayer().play($(this).attr('href'));
        return false;
    });
</script>
<!-- FOOTER WIDGET -->

<?php include('_footer.php'); ?>
