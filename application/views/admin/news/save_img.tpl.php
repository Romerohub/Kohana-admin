<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<META HTTP-EQUIV="Content-language" CONTENT="ru-RU">
<title>Admin</title>
<link href="/css/admin/stadm.css" rel="stylesheet" type="text/css" />
</head>
<body topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" background="/img/admin/pic.gif">
<?

//echo __FILE__;
//exit;
//был ли загружен файл в темп
if (is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
//если больше 3 метров
	//echo $_FILES["filename"]["size"];
	if($_FILES["filename"]["size"] < 1024*3*1024)
	{
//проверяем тип файла
		if ((($_FILES["filename"]["type"])==="image/jpeg") or 
		(($_FILES["filename"]["type"])==="image/gif") or
		(($_FILES["filename"]["type"])==="image/pjpeg") or
		(($_FILES["filename"]["type"])==="image/png"))
		{
	//определяем тип и устанавливаем временное имя с расширением
			$temp_name=$_SERVER['DOCUMENT_ROOT']."/userfiles/tmp/".$_FILES["filename"]["name"];
//			print_r($_SERVER['DOCUMENT_ROOT']);
//			exit;
	//перемещаем на сервак файлик
			if(move_uploaded_file($_FILES["filename"]["tmp_name"],$temp_name))
			{
	//смотрим параметры файла
				
				$name_file=$temp_name;
				$name_files="/userfiles/tmp/".$_FILES["filename"]["name"];
				$path_image="../../userfiles/tmp/";
				$size = getimagesize($name_file);
				if (($size[0]<120) && ($size[1]<100)) {$x=$size[0];$y=$size[1];} else {$x=120;$y=100;}
	//делаем резайз файла под нужные размеры
//				require ('image_resize.php');
				if (img_resize($name_file,$name_file, $x, $y))
				{
						echo "<br><b><p class=blue1 align=center>Преобразование прошло успешно</p></b>";
						?><div align='center'><a href="#" class="blue1" align="center" onClick="image_mag_up('<?echo $name_files;?>','<?echo $_FILES["filename"]["type"];?>'); window.close(); ">Дальше</a></div><?
					}
					else
						echo 'Файл не смог быть преобразован'; 
			}
			else {echo "Не удалось переместить файл";}
		}
		else {echo "<p width='400' height='70' class='blue1'><div align='center' class='mmsel'>ОШИБКА.<br>Выбран файл не подходящего содержимого</p>";?><a href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)" class="blue1">Вернуться назад</a><?}
	}
	else echo ("Размер файла превышает три мегабайта");
}
else {echo "<p width='400' height='70' class='blue1'><div align='center' class='mmsel'>ОШИБКА.<br>Не выбран файл</p>";?><a href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)" class="blue1">Вернуться назад</a><?}
?>
<script language="Javascript">
function image_mag_up(kat,ext){
window.opener.document.form_add.d_image_url.value = kat;
window.opener.document.form_add.image_url.value = kat;
window.opener.document.form_add.image_ext.value = ext;
ra=Math.random();
tx="<img src="+kat+"?rnd="+ra+">";
//alert (tx);
window.opener.document.getElementById("logo").innerHTML = tx;
}
</script>
</body>
</html>

<?php
/***********************************************************************************
Функция img_resize(): генерация thumbnails
Параметры:
  $src             - имя исходного файла
  $dest            - имя генерируемого файла
  $width, $height  - ширина и высота генерируемого изображения, в пикселях
Необязательные параметры:
  $rgb             - цвет фона, по умолчанию - белый
  $quality         - качество генерируемого JPEG, по умолчанию - максимальное (100)
***********************************************************************************/
function img_resize($src, $dest, $width, $height, $rgb=0xFFFFFF, $quality=100)
{
  if (!file_exists($src)) return false;

  $size = getimagesize($src);

  if ($size === false) return false;

  // Определяем исходный формат по MIME-информации, предоставленной
  // функцией getimagesize, и выбираем соответствующую формату
  // imagecreatefrom-функцию.
  $format = strtolower(substr($size['mime'], strpos($size['mime'], '/')+1));
  $icfunc = "imagecreatefrom".$format;
  if (!function_exists($icfunc)) return false;
		$x_ratio = $width / $size[0];
		$y_ratio = $height / $size[1];

		$ratio = min($x_ratio, $y_ratio);
		$use_x_ratio = ($x_ratio == $ratio);

  $new_width   = $use_x_ratio  ? $width  : floor($size[0] * $ratio);
  $new_height  = !$use_x_ratio ? $height : floor($size[1] * $ratio);
  $new_left    = $use_x_ratio  ? 0 : floor(($width - $new_width) / 2);
  $new_top     = !$use_x_ratio ? 0 : floor(($height - $new_height) / 2);
  $isrc = $icfunc($src);
  $idest = imagecreatetruecolor($width, $height);

  imagefill($idest, 0, 0, $rgb);
  imagecopyresampled($idest, $isrc, $new_left, $new_top, 0, 0, 
    $new_width, $new_height, $size[0], $size[1]);

  imagejpeg($idest, $dest, $quality);

  imagedestroy($isrc);
  imagedestroy($idest);

  return true;

}
?>