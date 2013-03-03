<script>
    $(document).ready(function () {
        //Examples of how to assign the ColorBox event to elements
        $(".group1").colorbox({rel:'group1', width:"600px", height:"800px"});

    });
</script>

<div class="container">

    <p>We hope that you find the previous year papers for your selected option. In case you don't find any paper or any
        inconvenience caused to you can any time contact us at info@shikshahelp.com</p>
    <br/>

    <?php if (count($papers) <= 1) { ?>
    <div class="span11">
        <div class="row">
            <div class="span2">
                <script type="text/javascript"><!--
                google_ad_client = "ca-pub-2768322976891570";
                /* verticaladsggsipu */
                google_ad_slot = "7026421465";
                google_ad_width = 160;
                google_ad_height = 600;
                //-->
                </script>
                <script type="text/javascript"
                        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            </div>
            <div class="span5">
                <a class="group1 cboxPhoto" rel="group1" href="<?php echo base_url() . $papers[0]->path;?>">
                    <img class="img-polaroid" src="<?php echo get_resize_image($papers[0]->path, 600, 800);?>"/>
                </a>
                <?php $papers[0]->subjects?>
            </div>
            <div class="span3">
                <script type="text/javascript"><!--
                google_ad_client = "ca-pub-2768322976891570";
                /* 300-600 */
                google_ad_slot = "3524710549";
                google_ad_width = 300;
                google_ad_height = 600;
                //-->
                </script>
                <script type="text/javascript"
                        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            </div>
        </div>
    </div>

    <?php } else { ?>

    <div class="span2">
        <script type="text/javascript"><!--
        google_ad_client = "ca-pub-2768322976891570";
        /* verticaladsggsipu */
        google_ad_slot = "7026421465";
        google_ad_width = 160;
        google_ad_height = 600;
        //-->
        </script>
        <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </div>
    <div class="span5" style="margin-left:100px">
        <?php foreach ($papers as $paper) { ?>
        <!--        <div class="offset1 span3">-->
        <div class="paper" style="display: inline-block;">
            <a class="group1 cboxPhoto" rel="group1" href="<?php echo base_url() . $paper->path;?>">
                <img class="img-polaroid" src="<?php echo get_resize_image($paper->path, 400, 450);?>"/>
            </a>
        </div>
        <div>
            <?php echo $paper->subjects?>
        </div>
        <!--        </div>-->

        <?php } ?>
    </div>
    <div class="span3">
        <script type="text/javascript"><!--
        google_ad_client = "ca-pub-2768322976891570";
        /* jobads */
        google_ad_slot = "9163963470";
        google_ad_width = 300;
        google_ad_height = 250;
        //-->
        </script>
        <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
        <div class="alert alert-info">
            <h4>Like Us To Want Updates </h4>
        </div>
        <div class="fb-like-box" data-href="http://www.facebook.com/shikshahelp" data-width="300" data-height="400"
             data-show-faces="true" data-stream="false" data-header="true"></div>

    </div>
    <?php } ?>
</div>
