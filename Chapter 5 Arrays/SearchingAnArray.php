<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/18
 * Time: 16:34
 */

/**
 * @param $array
 * @param $requiredFields
 * @return bool
 */
function hasRequired($array,$requiredFields){
    $keys = array_keys($array);
    foreach($requiredFields as $fieldName){
        if(!in_array($fieldName,$keys)){
            return false;
        }
    }
    return true;
}
if($_POST["submitted"]){
    echo "<p>You ";
    echo hasRequired($_POST,array("name","email")) ? "did":"did not";
    echo " have all the required fields</p>";
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <p>
        Name:<input type="text" name="name"/><br/>
        Email:<input type="email" name="email"/><br/>
        Age:<input type="number" name="age"/>
    </p>
    <p>
        <input align="center" type="submit" value="submit" name="submitted"/>
    </p>
</form>
