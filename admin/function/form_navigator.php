<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 12/17/2016 AD
 * Time: 2:02 PM
 */
function form_navigator($array_tab,$link,$addtext=null,$addlink=null){
    echo '<div class="container">
		<div class="row">
            <div class="col-lg-10">';
        $i=0;

    foreach($array_tab as $key => $value) {

        echo '  <span class="en"><a href="'.$link["$key"]["th"].'">'.$value["en"].'</a></span>
                <span class="th"><a href="'.$link["$key"]["th"].'">'.$value["th"].'</a></span>';
        $i++;
        if($i!=sizeof($array_tab)) {
            echo '<b>	>  </b>';
        }
    }


    echo '</div>
          <div class="col-lg-2"><a href="'.$addlink['th'].'">'.$addtext['th'].'</a></div>
        </div>
     </div>';

}
?>