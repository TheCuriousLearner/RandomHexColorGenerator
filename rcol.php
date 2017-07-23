<html>
<head>
<title>Random Colour Generator</title>
<style>
html{
background-color: <?php 


//rand() generates a integer between the hex numbers 0x000000 and 0xFFFFFF, this is the range of web colours(from black to white)
//The number generated is in base 10 (i.e decimal) and it needs to be converted into hexadecimal format for this we use dechex()
//dechex() converts base 10 numbers(decimals) into base 16 numbers (hexadecimals).
//Finally, it's saved in a variable called $colorCode and then echoed with a "#" sign as the background-color attribute for setting the page color.


$colorCode = dechex(rand(0x000000, 0xFFFFFF));

//In some cases, the generater outputs 5 letters instead of 6, in that case, we'll have to append a 0 to the end.
if (strlen($colorCode)==5){
$colorCode = $colorCode.'0';
}
echo '#'.$colorCode ?>;
}
p{
display:inline;
background-color: white;
color: black;
}
</style>
</head>
<body>
<!--
Random Color Generator. A simple educational script which generates a random hex color code
and show the hex code in top-left corner for easy copy-paste. Written in PHP, source code is available online :)
-->
<p>
<?php
echo '#'.$colorCode;
?>
</p>
</body>
</html>

