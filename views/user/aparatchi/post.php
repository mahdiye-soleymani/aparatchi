<div id="slider">
<div class="tophit">
        <h3 class="slider_h3 BYekan-sm"> پست ها </h3>
        <div class="slider_main_content">
            <div class="slider_prev"><span class="prev_icon"></span></div>
            <div class="slider_content">
                <ul>

                    <?php
                    if (!empty($aparatchi['showpost'])) {
                        foreach ($aparatchi['showpost'] as $value) { ?>
                            <li style="padding: 15px; text-align: center;">
                                <a href="<?php echo AddressMyWebsite . 'postPage/show/'. $value['id']?>">
                                    <img style="height: 180px; width: 180px;border-radius: 50px;border: solid 2px; "
                                         src="<?php echo AddressMyWebsite . 'public/admin/img/post/' . $value['pic'] ?>">
                                    <p><?php echo $value['title'] ?></p></a></li>
                        <?php }
                    } else {
                        echo '<div class="alert alert-warning" style="margin: 15px 10px">پستی نیست</div>';
                    } ?>

                </ul>
            </div>
            <div class="slider_next"><span class="next_icon"></span></div>
        </div>
</div>
</div>
<div id="slider">
<div class="tophit">

    <h3 class="slider_h3 BYekan-sm"> جدیدترین عناوین </h3>
    <div class="slider_main_content">
        <div class="slider_prev"><span class="prev_icon"></span></div>
        <div class="slider_content">
            <ul>
                <?php
                if (!empty($aparatchi['lastPost'])) {
                    foreach ($aparatchi['lastPost'] as $value) { ?>
                        <li style="padding: 15px; text-align: center;"><a href="<?php echo AddressMyWebsite . 'postPage/show/'. $value['id']?>">
                                <img style="height: 180px; width: 180px;border-radius: 50px;border: solid 2px; "
                                     src="<?php echo AddressMyWebsite . 'public/admin/img/post/' . $value['pic'] ?>">
                                <p><?php echo $value['title'] ?></p></a></li>
                    <?php }
                } else {
                    echo '<div class="alert alert-warning" style="margin: 15px 10px">پستی نیست</div>';
                } ?>
            </ul>
        </div>
        <div class="slider_next"><span class="next_icon"></span></div>
    </div>
</div>

</div>