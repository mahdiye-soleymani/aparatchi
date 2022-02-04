<center>
    <nav id="top_nav">
        <div id="top_menu">
            <ul class="BYekan-sm">
                <?php foreach ($aparatchi['listMenuShow']as $value){ ?>
                        <?php if($value['status']==0){?>
                <li>
                    <a href="#">
                        <?php echo $value['title']; ?>
                    </a>
                </li>
                            <?php }elseif ($value['status']==1){?>
                <li data-settime="2">
                    <a href="#">
                        <?php echo $value['title']; ?>
                        <span class="arrow_down_icon"></span>
                    </a>
                    <ul>
                        <?php foreach ($aparatchi['listSubMenuShow']->listSubMenuShow($value['id']) as $value2){?>
                        <li><a href="#">
                                <?php echo $value2['title'];?>
                            </a></li>
                        <?php }?>
                    </ul>
                </li>
                <?php }
                }?>
            </ul>
        </div>
    </nav>
</center>