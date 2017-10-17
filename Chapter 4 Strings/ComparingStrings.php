<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/16
 * Time: 15:58
 */

/**
 * Exact Comparisons 精确比较
 */
$o1 = 3;
$o2 = "3";
if ($o1 == $o2) {
    echo("== returns true<br/>");
}
if ($o1 === $o2) {
    echo("=== return true<br/>");
}
//大于/小于等比较运算符也可用于字符串
$him = "Fred";
$her = "Wilma";
if ($him < $her) {
    print "{$him} comes before {$her} in the alphabet \n";
}

/**
 * strcmp(string_1,string_2)
 * 返回值<0代表string_1排序在前，>0表示string_1排序再后，返回0，相同
 * strcasecmp(string_1,string_2)
 * 转换为小写然后再比较
 */
$n = strcmp("PHP Rocks", 5);
echo($n);//1
$n = strcasecmp("Fred", "fdED");//0

/**
 * Approximate Equality
 * 相似比较
 * soundex() metaphone() similar_text() levenshtein()
 */
//shoudex()和metaphone()都可以比较两个字符串的英语发音是否相似，metaphone()要更加精确
$known = "Fred";
$query = "Phred";
if (soundex($known) == soundex($query)) {
    print "soundex:{$known} sounds like {$query}<br/>";
} else {
    print "soundex:${$known} doesn't sound like {$query}<br/>";
}
if (metaphone($known) == metaphone($query)) {
    print "metaphone:{$known} sounds like {$query}<br/>";
} else {
    print "metaphone:${$known} doesn't sound like {$query}<br/>";
}
//similar_text() 返回两个字符串中相同字符的数量，并可提供相似度（第三个参数）
$string1 = "Rasmus Lerdorf";
$string2 = "Razmus Lehrdorf";
$common = similar_text($string1,$string2,$percent);
printf("They have $d chars in common(%.2f%%).",$common,$percent);
//levenshtein返回两个字符串之间的“编辑数”，即从一个变为另一个需要几部操作
$similarity = levenshtein("cat","cot");//1
























