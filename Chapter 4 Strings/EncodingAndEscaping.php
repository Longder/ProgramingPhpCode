<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/16
 * Time: 14:06
 */

/**
 * HTML
 * htmlentities()函数 可以把某些特殊转换为html中的特殊字符
 * 是所有特殊字符，所以可能会有中文乱码现象。
 * 次函数有3个参数
 * htmlentities(input,quote_style,charset);
 * 第二个参数控制是否只转换双引号（默认），单/双引号都转换或都不转换
 */
$input = <<< End
"Stop pulling my hair!" Jane's eyes flashed.<p>
End;
$both = htmlentities($input,ENT_QUOTES);
$neither = htmlentities($input,ENT_NOQUOTES);

/**
 * htmlspecialchars()
 * 转换html中的特殊字符，只转换：& " ' < >
 * 同样有3个参数 同上
 */

/**
 * get_html_translation_table()
 * 获取某个html转换方法所使用的转换值对应表
 */
$table = get_html_translation_table(HTML_ENTITIES);
$table = get_html_translation_table(HTML_SPECIALCHARS);

/**
 * strip_tags() 函数移除html标签
 */
$input = "<p>Howdy,$quot;Cowboy$quot;</p>";
$output = strip_tags($input);
//第二个参数可以指定不移除的标签
$input = "The <b>bold</b> tags will <i>stay</i><p>";
$output = strip_tags($input,"<b>");

/**
 * get_meta_tags()
 * 获取某个html页面的元数据
 * get_meta_tags(filename,[,use_include_path]);
 */
$metaTags = get_meta_tags("http://www.baidu.com");
echo"Web page made by {$metaTags['author']}";

/**
 * URLS
 * url解析有两种方式，区分于如何处理空格
 * 1.空格变为：%20   RFC 3986 encoding
 * 2.空格变为：+     Query-string encoding
 */
/**
 * rawurlencode()和rawurldecode()
 */
$name = "Programing PHP";
$output = rawurlencode($name);
echo "http://localhost/{$output}";
/**
 * urlencode()和urldecode()
 */
$baseUrl = "http://www.google.com/q=";
$query = "PHP session -cookies";
$url = $baseUrl . urlencode($query);
echo $url;
/**
 * addslashes()添加反斜杠，可以对字符串中的引号、双引号等特殊字符同意添加反斜杠转义
 * stripslashes() 取出所有转义的反斜杠
 */
$string = <<<EOF
"It's never going to work," she cried,
as she hit the backslash(\) key.
EOF;
$string = addslashes($string);
echo $string;
echo stripslashes($string);

