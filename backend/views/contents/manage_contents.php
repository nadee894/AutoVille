<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $inner_title; ?>
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>

            <!-- forms tab -->
            <div id="forms">

                <form action="#" method="post">
                    <fieldset>

                        <!-- <label>Textarea</label>     -->
                        <form method="post" name="frm_content" id="frm_content">

                            <textarea cols="40" id="content_text" name="content_text" rows="10"><?php echo $content_data->content; ?>
                
                            </textarea>
                            <script type="text/javascript">
                                //<![CDATA[
                                CKEDITOR.replace('content_text',
                                        {
                                            extraPlugins: 'uicolor',
                                            uiColor: '#EBDBDB',
                                            filebrowserBrowseUrl: '<?php echo base_url(); ?>backend_resources/editor/ckfinder/ckfinder.html',
                                            filebrowserImageBrowseUrl: '<?php echo base_url(); ?>backend_resources/editor/ckfinder/ckfinder.html?Type=Images',
                                            filebrowserFlashBrowseUrl: '<?php echo base_url(); ?>backend_resources/editor/ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserUploadUrl: '<?php echo base_url(); ?>backend_resources/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                            filebrowserImageUploadUrl: '<?php echo base_url(); ?>backend_resources/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl: '<?php echo base_url(); ?>backend_resources/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                        });
                                //]]>
                            </script>

                            <input type="hidden" id="content_id" name="content_id" value="<?php echo $content_data->content_id; ?>">

                            <p>	<span id="rtn_msg"></span>				</p>
                            <p>n
                                <input class="button def" type="button" onclick="update_content()"
                                       value="save" />
                            </p>

                    </fieldset>
                </form>
            </div>
        </section>
    </div>
</div>


<script type="text/javascript">
    $('#pages_menu').addClass('active');


    function update_content() {

        var content_text = encodeURIComponent(CKEDITOR.instances.content_text.getData());
        var content_id = $('#content_id').val();

        $.ajax({
            type: "POST",
            url: site_url + '/contents/update_content',
            data: "content_text=" + content_text + "&content_id="+ content_id,
            success: function(msg) {
            if (msg == 1) {
                    $('#rtn_msg').html('<div class="success canhide">Successfully updated.</div>');

                } else {
                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                }

            }

        });

    }

</script>                  




