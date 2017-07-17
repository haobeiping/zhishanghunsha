<?php
header('Content-type:image/jpeg'); //告诉浏览器这是个图片
$width = 120;
$height = 40;
$img=imagecreatetruecolor($width, $height);//定义图片

$colorbg=imagecolorallocate($img, rand(200,250), rand(200,250), rand(200,250));//定义图片背景的颜色
imagefill($img, 0, 0, $colorbg);//填充图片的背景和他的颜色

$colorbk=imagecolorallocate($img, 0, 0, 0);
imagerectangle($img, 0, 0, $width-1, $height-1, $colorbk);

for($i=1;$i<100;$i++)
{
$colorxs=imagecolorallocate($img, rand(100,150), rand(100,150), rand(100,150));
imagesetpixel($img, rand(0,$width-1), rand(0,$height-1), $colorxs);


for($i=0;$i<5;$i++)
{
$colorxt=imagecolorallocate($img, rand(0,100), rand(0,100),  rand(0,100));
imageline($img, rand(0,$width/2), rand(0,$height), rand($width/2,$width), rand(0,$height), $colorxt);
}


$colorstring=imagecolorallocate($img, rand(10,100),rand(10,100),rand(10,100));
$zifu=array('a','b','d','c','e','f','g','h');
$string='';
for($i=0;$i<4;$i++) 
{
   $string.=$zifu[rand(0,count($zifu)-1)];
}
imagettftext($img, 14, rand(-5,3), rand(30,60), rand(20,35), $colorstring, 'alternategothic2.ttf', $string);//输出字符


imagejpeg($img);//输出图片
