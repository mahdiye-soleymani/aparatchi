<!--درستش کن-->
<div class="Acount_info">
    <div class="tableone">
        <h4>اطلاعات کاربر</h4>
        <label>مشخصات کاربری</label>
        <table cellspacing="0">
            <tr>
                <td>
                    <span class="title_acount">
                        نام  و خانوادگی:

                    </span>
                    <span id="info"> <?php
                        echo $aparatchi['showAccount']->info;
                        ?></span>
                </td>
                <td>
                    <span class="title_acount">آدرس ایمیل :</span>
                    <span id="email"> <?php
                        echo $aparatchi['showAccount']->email;
                        ?></span>
                </td>
                <td>
                    <span id="username" class="title_acount">نام کاربری :</span>
                    <span> <?php
                        echo $aparatchi['showAccount']->username;
                        ?></span>
                </td>
                <td>
                    <span id="pass" class="title_acount">پسوورد :</span>

                    <span> <?php
                        echo $aparatchi['showAccount']->password;
                        ?></span>
                </td>
            </tr>


        </table>
        <a href="<?php echo AddressMyWebsite . 'editUser/memberEdit/' . $_SESSION['emailmember'] ?>">
            <input type="submit" name="submit_edit" value="ویرایش اطلاعات کاربری">
        </a>
    </div>


</div>