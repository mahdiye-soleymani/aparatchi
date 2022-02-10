<div id="slider">
    <div id="slider_item_img">
        <?php
        if (!empty($aparatchi['pics'])) {
            foreach ($aparatchi['pics'] as $value) { ?>

                <a href="#" class="show_item"> <img style="width: 882;height: 309px; " src="
                <?php echo AddressMyWebsite . 'public/admin/img/' . $value['slidename'] ?>"/></a>
            <?php }
        } else {
            echo '<div class="alert alert-warning" style="margin: 15px 10px">اسلایدری نیست</div>';
        } ?>

        <span class="icon_next_show_left nextprev"></span>
        <span class="icon_prev_show_right nextprev"></span>
    </div>

    <!--    <div id="li_nav" class="BYekan-sm">-->
    <!--        <ul>-->
    <!--            -->
    <!--            <li><a href="#">The Dark Knight</a></li>-->
    <!--            <li><a href="#">The Witcher</a></li>-->
    <!--            <li><a href="#">loki</a></li>-->
    <!--            <li><a href="#">godfather</a></li>-->
    <!--            <li><a href="#">game of thrones</a></li>-->
    <!--        </ul>-->
    <!--    </div>-->
</div>