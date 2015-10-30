
<?php 
//print_r($post);

?>
<form action="" enctype="multipart/form-data" name="form_add" method="post" id="postForm">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody><tr><td width="154" valign="top"><table width="100%" cellspacing="0" cellpadding="2" border="0">
<tbody><tr>
	<td width="16%"><a  href="#"><img width="20" height="20" border="0" src="/img/admin/b_save.gif"></a></td>
	<td width="84%">
	<button class="blue1" id="submitBtn">Сохранить</button>
	<!--a class="blue1" href="#">Сохранить</a-->
	</td>
</tr>
<tr>
	<td colspan="2"><img width="147" height="2" src="/img/admin/sp.gif"></td>
</tr>
</tbody></table>
<br>
<table width="147" cellspacing="0" cellpadding="0" border="0">
<tbody><tr>
	<td height="17" background="/img/admin/hlp2.gif"><strong><span class="blue1">&nbsp;&nbsp;Помощь</span></strong></td>
</tr>
<tr>
	<td><img width="147" height="4" src="/img/admin/hlp3.gif"></td>
</tr>
<tr>
	<td bgcolor="DBE3ED" style="padding:5px" class="blue1">
	<div align="left">
В данной части вы можете полностью отредактировать запись.	</div>
	</td>
</tr>
<tr>
	<td><img width="147" height="4" src="/img/admin/hlp4.gif"></td>
</tr>
</tbody></table></td><td width="100%" valign="top">
<input type="hidden" value="edit" id="act" name="act">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<input type="hidden" value="19:15:11" name="times" id="times">
<input type="hidden" value="52" name="ids" id="ids"><tbody><tr>
	<td width="14%" height="25" bgcolor="F8FAFC" class="blue1"><div align="right"><strong>Дата</strong></div></td>
	<td width="86%" bgcolor="F8FAFC" class="blue1"><input type="date" value="<?php if(empty($post['dates'])) echo date("Y-m-d H:i:s"); else echo $post['dates'];?>" class="fld" id="news_data" name="d[date]">
	
	</td>
</tr>
<tr>
	<td height="25" class="blue1"><div align="right"><strong>Название</strong></div></td>
	<td class="blue1"><input type="text" value="<?php if(!empty($post['name'])) echo $post['name']; ?>" style="width:90%;" size="4" class="blue1" name="d[name]" id="news_name"></td>
</tr>

<tr bgcolor="F8FAFC">
	<td height="25" class="blue1"><div align="right"><strong>Опубликовано?</strong></div></td>
	<td class="blue1">
		<select class="blue1" name="d[publ]" id="publ">
			<option value="1" <?php if(!empty($post['publ']) && $post['publ'] == "1") echo "selected";?> >Да</option>
			<option value="2" <?php if((!empty($post['publ'])  && $post['publ'] == "2") || empty($post['publ'])) echo "selected";?> >Нет</option>
		</select>
	</td>
</tr>
</tbody></table>
<fieldset title="Служебная">
	<legend class="blue1" id="extraFields">Свернуть/Развернуть</legend>
	<div name="news_block" id="news_block">
		<table width="100%" cellspacing="2" cellpadding="2" border="0">
		<tbody><tr class="blue1">
			<td width="14%" valign="top" class="blue1"><div align="right"><strong>Заголовок</strong></div></td>
			<td><textarea style="width:100%" rows="2" name="d[title]" id="news_title" class="blue1"><?php if(!empty($post['title'])) echo $post['title']; ?></textarea></td>
		</tr>
		<tr bgcolor="F8FAFC" class="blue1">
			<td valign="top" class="blue1"><div align="right"><strong>Описание</strong></div></td>
			<td><textarea style="width:100%" rows="2" name="d[description]" id="news_desc" class="blue1"><?php if(!empty($post['description'])) echo $post['description']; ?></textarea></td>
		</tr>
		<tr class="blue1">
			<td valign="top" class="blue1"><div align="right"><strong>Ключ. слова</strong></div></td>
			<td><textarea style="width:100%" rows="2" name="d[keys]" id="news_word" class="blue1"><?php if(!empty($post['keywords'])) echo $post['keywords']; ?></textarea></td>
		</tr>
		</tbody></table>
	</div>
</fieldset>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tbody><tr height="16px">
	<td height="16px" class="blue1" colspan="2"></td>
</tr>
<tr bgcolor="F8FAFC">
	<td width="14%" valign="top" class="blue1"><div align="right"><strong>Анонс</strong></div></td>
	<td class="blue1"></td>
</tr>
<tr bgcolor="F8FAFC">
	<td class="blue1" colspan="2">
<?php 
if(!empty($post['anons'])) $anons = $post['anons']; else $anons = "";
		    include_once("ext/fckeditor/fckeditor.php");
			$oFCKeditor = new FCKeditor('d[anons]') ;
			$oFCKeditor->Height = 190;
			$oFCKeditor->BasePath = '/ext/fckeditor/' ;
			$oFCKeditor->Config['AutoDetectLanguage']	= false ;
			$oFCKeditor->Config['DefaultLanguage']		= "ru";
			$oFCKeditor->Value = $anons;
			$oFCKeditor->Create() ;
?>
</td>
</tr>
<tr height="16px">
	<td height="16px" class="blue1" colspan="2"></td>
</tr>
<tr bgcolor="F8FAFC">
	<td width="14%" valign="top" class="blue1"><div align="right"><strong>Наполнение</strong></div></td>
	<td class="blue1"></td>
</tr>
<tr bgcolor="F8FAFC">
	<td class="blue1" colspan="2">
<?php 
if(!empty($post['content'])) $tmp_t = $post['content']; else $tmp_t = "";
		    include_once("ext/fckeditor/fckeditor.php");
			$oFCKeditor = new FCKeditor('d[content]') ;
			$oFCKeditor->Height = 380;
			$oFCKeditor->BasePath = '/ext/fckeditor/' ;
			$oFCKeditor->Config['AutoDetectLanguage']	= false ;
			$oFCKeditor->Config['DefaultLanguage']		= "ru";
			$oFCKeditor->Value = $tmp_t;
			$oFCKeditor->Create() ;
?>
</td>
</tr>
<tr>
	<td valign="top" class="blue1"><div align="right"><strong>Картинка</strong></div></td>
	
	<td class="blue1"><div id="logo"><?php if(!empty($post['image'])) echo"<img src=/userfiles/news_images/".$post['image'].">"; ?></div><br>
	<input type="hidden" value="" name="image_url" id="image_url">
	<input type="hidden" value="" name="image_ext" id="image_ext">
	<input type="hidden" value="" name="d[image]" id="d_image_url" >
		<table width="100%" cellspacing="3" cellpadding="0" border="0" class="blue1">
		<tbody><tr>
			<td width="23%">Новая картинка (JPG, GIF) </td>
			<td class="blue1">
				<a onclick="window.open('/admin/news/uploadimg', 'image', 'top=150,left='+(window.screen.availWidth - 410)/2+', height=135, width=400'); retunr false;" href="#"><img width="20" height="20" border="0" align="absmiddle" src="/img/admin/b_img.gif"></a>
				<a class="blue1" onclick="window.open('/admin/news/uploadimg', 'image', 'top=150,left='+(window.screen.availWidth - 410)/2+', height=135, width=400'); return false;" href="#">Загрузить фотографию</a></td>
		</tr>
<tr bgcolor="F8FAFC">
	<td height="25" class="blue1"><div align="right"><strong>Удалить картинку?</strong></div></td>
	<td class="blue1">
				<select <?php if(empty($post['image'])) echo "disabled"; ?> class="blue1" name="del_img" id="del_img">
					<option value="1">Да</option>
			<option selected="" value="2">Нет</option>
		</select>
	</td>
</tr>
		</tbody></table>
	</td>
</tr>
</tbody></table>
</form></td></tr></tbody></table>