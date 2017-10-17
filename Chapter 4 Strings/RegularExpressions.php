<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/17
 * Time: 14:26
 */

/**
 * 正则表达式相关函数
 */
//preg_match(pattern,string[,captured])
preg_match("/y.*e$/","Sylvie");//true
preg_match("/y.*e$/","Sylvie",$m);//
//preg_march_all(pattern,string,marches[,order])
$string = <<< END
13 dogs
12 rabbits
8 cows
1 goat
END;
preg_match_all("/(\d+) (\S+)/",$string,$m1,PREG_PATTERN_ORDER);
preg_match_all("/(\d+) (\S+)/",$string,$m2,PREG_SET_ORDER);
//preg_replace() 查找符合正则的部分，替换之
$better = preg_replace("/<.*?>/","!","do <b>not</b> press the button");
//TODO 正则遗留
