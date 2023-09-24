<?php
// echo hex2bin("48656c6c6f20576f726c6421");

// $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
// echo html_entity_decode($str);

// $str = '<a> href="https://www.w3schools.com"Go to w3schools.com</a>';
// echo htmlentities($str);

$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);

$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);

$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);

echo lcfirst("Hello world!");

echo levenshtein("Hello World","ello World");
echo "<br>";
echo levenshtein("Hello World","ello World",10,20,30);

setlocale(LC_ALL,"US");
$locale_info = localeconv();
print_r($locale_info);

$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");

$str = "Hello";
echo md5($str);

$filename = "test.txt";
$md5file = md5_file($filename);
echo $md5file;

echo metaphone("World");

$number = 1234.56;
setlocale(LC_MONETARY,"en_US");
echo money_format("The price is %i", $number);



echo nl2br("One line.\nAnother line.");

echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");

echo ord("h")."<br>";
echo ord("hello")."<br>";

parse_str("name=Peter&age=43");
echo $name."<br>";
echo $age;

print "Hello world!";

$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);

$str = "Hello=0Aworld.";
echo quoted_printable_decode($str);



?>