<script type="text/javascript" src="/wp-content/plugins/simple-nivo-slider/libs/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://www.ultrafemme.dev//wp-content/plugins/simple-nivo-slider/libs/bootstrap/css/bootstrap.css" />
<script type='text/javascript'>
/* <![CDATA[ */
var thickboxL10n = {
            "next":"Next >",
            "prev":"< Prev",
            "image":"Image",
            "of":"\/",
            "close":"Close",
            "noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.",
            "loadingAnimation":"/wp-includes\/js\/thickbox\/loadingAnimation.gif",
            "closeImage":"/wp-includes/js/thickbox/tb-close.png"};
/* ]]> */
</script>
<script src="/wp-includes/js/thickbox/thickbox.js" type="text/javascript" ></script>
<link rel="stylesheet" href="/wp-includes/js/thickbox/thickbox.css" />
<script type="text/javascript">
// Deals with calling the WordPress Media popup box
function myMediaPopupHandler()
{
    window.send_to_editor = function(html) {
        imgurl = jQuery('img',html).attr('src');
        jQuery('#upload_image').val(imgurl);
        tb_remove();
    }

    formfield = jQuery('#upload_image').attr('name');
    tb_show('', '<?php echo admin_url(); ?>media-upload.php?type=image&TB_iframe=true');
    return false;
}
</script>
<div class='wrap'>
    <div id="icon-options-general" class="icon32"></div>
    <h2>
        <?php echo __('General Settings of '); ?>Nivo Slider
    </h2>



    <form>
          <legend>
              <?php echo __("New Slider");?>
          </legend>

          <label> <?php echo __("Image");?></label>
          <input size="80" type="text" id="upload_image" disabled="disabled" placeholder="url" / >
           <br />
           <input id="upload_image_button" class="btn" value="<?php echo __("Get Image");?>" type="button" onclick="myMediaPopupHandler();" />
            <br />
          <label> <?php echo __("Url to Redirect");?></label>
          <input size="90" type="text" id="url_redirect_image"  placeholder="http://domain.com/landing-page.html">
          <span class="help-block"><?php echo __("For example http://domain.com/landing-page.html");?></span>


          <label> <?php echo __("Image Caption");?></label>
          <input size="90" type="text" id="caption_image"  placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">


          <label> <?php echo __("Order");?></label>
          <input size="40" type="text" id="order_image"  placeholder="100">
          <span class="help-block"><?php echo __("Order image in slider");?></span>


             <label> <?php echo __("Date range");?></label>
            <input class="datepicker" type="text" class="input-small" placeholder="##/##/##">
            <input class="datepicker" type="text" class="input-small" placeholder="##/##/##">
        <div class="clear"></div>
          <button type="submit" class="btn btn-primary">Guardar</button>

</form>








    <table class="widefat">
    <thead>
        <tr>
            <th>RegId</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>RegId</th>
        <th>Name</th>
        <th>Email</th>
        </tr>
    </tfoot>
    <tbody>
       <tr>
         <td>11</td>
         <td>Leandro Tec</td>
         <td>Que cosa?</td>
       </tr>
    </tbody>
    </table>


</div>