<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/13
 * Time: 14:15
 */

/**
 * 变量修改 Variable Interpolation
 */
$who = "Kilroy";
$where = "here";
echo "$who was $where";
$n = 12;
echo "You are the {$n}th person";
$bar = "this is not printed";
$foo = '$bar';//单引号字符串里不会进行变量修改
print("$foo");

/**
 * Here Documents
 */
$clerihew = <<<EndOfQuote
Sir Humphrey Davy
Abominated gravy
He lived in the odium
Of having discovered sodium
EndOfQuote;
echo($clerihew);
printf(<<< Template
    %s is %d years old.
Template
,"Fred",35
);
//单双引号可以直接下载heredoc中，不需要转义
$dialogue = <<< NoMore
"It's not going to happen!" she fumed.
He raised an eyebrow. "What to bet?"
NoMore;
echo $dialogue;
//换行和空格也可直接表达，不会被忽略
$ws = <<< Enough
 boo
 hoo
Enough;
echo($ws); // $ws = " boo\n  hoo"




