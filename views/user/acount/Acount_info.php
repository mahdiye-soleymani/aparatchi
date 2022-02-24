<!--درستش کن-->
<div class="Acount_info">
    <div class="tableone">
        <h4>مشخصات کاربری</h4>
        <label style="background-color: #ffb922;color: black"> ثبتنام شده در : <?php
            echo shamsi($aparatchi['showAccount']->register_time);
            ?></label>
        <table cellspacing="0">
            <tr>
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