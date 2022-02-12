<div id="sidebar">

    <div id="news">
        <h3 class="BYekan-sm">تازه ترین خبرهای سایت</h3>
        <ul><?php
            if (!empty($aparatchi['showNews'])) {
                foreach ($aparatchi['showNews'] as $value) { ?>
                    <li>
                        <a href="<?php echo AddressMyWebsite . 'newsPage/show/' . $value['id'] ?>">

                            <div class="img_right"><img
                                        src="<?php echo AddressMyWebsite . 'public/admin/img/news/' . $value['pic'] ?>">
                            </div>
                            <div class="link_left BYekan-sm">
                                <p><?php echo $value['title'] ?> </p>
                                <p><?php echo $value['time'] ?> </p>
                            </div>
                        </a>
                    </li>
                <?php }
            } else {
                echo '<div class="alert alert-warning" style="margin: 15px 10px">اخباری نیست</div>';
            } ?>

        </ul>
    </div>
    <div id="brand_site">
        <h3 class="BYekan-sm">سایت های سینمایی</h3>
        <a href="https://www.imdb.com/"><img src="<?php echo AddressMyWebsite; ?>/public/user/images/IMDB.png"></a>
        <a href="https://www.rottentomatoes.com/"><img
                    src="<?php echo AddressMyWebsite; ?>/public/user/images/rotten tomatoes.jpg"></a>


    </div>
</div>