<?php
$img_array = glob('images/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
if(count($img_array) == 0) die('û�ҵ�ͼƬ�ļ��������ϴ�һЩͼƬ�� '.dirname(__FILE__).'/images/ �ļ���');
header('Content-Type: image/png');
echo(file_get_contents($img_array[array_rand($img_array)]));
?>