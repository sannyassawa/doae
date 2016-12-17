<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">


    <div class="row">
        <table class="table">
            <?php
            $sql = " select * from tbl_survey  order by id desc ";
            $objQuery = mysql_query($sql);
            while ($row = mysql_fetch_array($objQuery)) {

                echo "<tr>
                        <td>
                            <div class='row title-layout'>
                                <div class='col-lg-2 titlename'>หัวข้อ TH</div>
                                <div class='col-lg-7'>sdfsdfsdfsd</div>
                            </div>
                            <div class='row title-layout'>
                                <div class='col-lg-2 titlename'>หัวข้อ EN</div>
                                <div class='col-lg-7'>sdfsdfsdfsd</div>
                            </div>
                            <div class='row title-layout'>
                                <div class='col-lg-2 titlename'>Link</div>
                                <div class='col-lg-7'>sdfsdfsdfsd</div>
                            </div>
                        </td>
                    </tr>";


            }
            ?>

        </table>

    </div>
</div>


<? include('footer.php'); ?>



