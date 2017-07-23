<html>
<head>
<title>Random Colour Generator</title>
<style>
html{
background-color: <?php echo '#'.$colorCode=generateCode() ?>;
}
p{
display:inline;
background-color: white;
color: black;
}
</style>
</head>
<body>
<?php
function generateCode(){
//rand() generates a integer between the hex numbers 0x000000 and 0xFFFFFF, this is the range of web colours(from black to white)
//The number generated is in base 10 (i.e decimal) and it needs to be converted into hexadecimal format for this we use dechex()
//dechex() converts base 10 numbers(decimals) into base 16 numbers (hexadecimals).
//Finally, it's saved in a variable called $colorCode and then echoed with a "#" sign as the background-color attribute for setting the page color.
$colorCode = dechex(rand(0x000000, 0xFFFFFF));
//In some cases, the generater outputs 5 letters instead of 6, in that case, we'll have to append a 0 to the end.
if (strlen($colorCode)==5){
$colorCode = $colorCode.'0';
}
return $colorCode;
}
//I used https://appendto.com/2017/02/rgb-to-hex-understanding-the-major-web-color-codes/ as a referance to create the below function.
function hexToRGB($hex){
$partialvalue=0;
$hexcode = array();
$hexcode = str_split($hex);
//getting red, green, blue value
$red=hexdec($hexcode[0])*16+hexdec($hexcode[1]);
$green=hexdec($hexcode[2])*16+hexdec($hexcode[3]);
$blue=hexdec($hexcode[4])*16+hexdec($hexcode[5]);
return "rgb (".$red.", ".$green.", ".$blue.")";
}
?>
<!--
Random Color Generator. A simple educational script which generates a random hex color code
and show the hex code in top-left corner for easy copy-paste. Written in PHP, source code is available online at https://github.com/TheCuriousLearner/RandomHexColorGenerator :)
-->
<p>
<?php
echo '#'.$colorCode."<br><br>";
?>
</p>
<p>
<?php
echo hexToRGB($colorCode);
?>
</p>
</body>
</html>

