<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody><tr><td width="154" valign="top"><table width="100%" cellspacing="0" cellpadding="2" border="0">
<tbody><tr>
	<td width="16%"><a   href="#"><img width="20" height="20" border="0" src="/img/admin/b_add.gif"></a></td>
	<td width="84%"><a class="blue1"   href="/admin/menu/add/">Добавить</a></td>
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

Здесь доступны такие опции, как: добавить, редактировать, опубликовать/снять с публикации, удалить, отсортировать разделы/подразделы 	</div>
	</td>
</tr>
<tr>
	<td><img width="147" height="4" src="/img/admin/hlp4.gif"></td>
</tr>
</tbody></table></td><td width="100%" valign="top"><form name="news_show">
<table width="100%" cellspacing="1" cellpadding="3" border="0">
<tbody><tr class="blue1">
	<td width="5%" height="21" background="/img/admin/mm_top2.gif" title="" class="blue1">№</td>
	<td width="30%" height="21" background="/img/admin/mm_top2.gif" title="Раздел" class="blue1">Раздел</td>
	<td width="5%" height="21" background="/img/admin/mm_top2.gif" title="" class="blue1">№</td>
	<td width="30%" height="21" background="/img/admin/mm_top2.gif" title="Подраздел" class="blue1">Подраздел</td>
	<td width="30%" background="/img/admin/mm_top2.gif" title="ЧПУ">ЧПУ</td>
	<td width="4%" background="/img/admin/mm_top2.gif" title="Опубликовать"><img width="26" height="15" alt="Опубликовать" src="/img/admin/ipubl.gif"></td>
	<td width="4%" background="/img/admin/mm_top2.gif" title="Редактировать"><img width="26" height="15" alt="Редактировать" src="/img/admin/iedit.gif"></td>
	<td width="4%" background="/img/admin/mm_top2.gif" title="Удалить"><img width="26" height="15" alt="Удалить" src="/img/admin/idel.gif"></td>
	<td width="4%" background="/img/admin/mm_top2.gif" title="Выделить"><img width="25" height="15" alt="Выделить" src="/img/admin/isel.gif"></td>
</tr>
<?php  if($list){ 
	$list1 = $list;
		foreach($list as $v){ 
			if(empty($v['idp'])){ ?>
			
<tr id="<?=$v['id']?>tr" bgcolor="F8FAFC" onmouseout="this.bgColor = '#F8FAFC'" onmouseover="this.bgColor = '#EFF3F7'">	
	<td title="Дата" class="blue1"><input type="text" maxlength="4" size="4" value="<?=$v['idr']?>"></td>
	<td title="Название" class="blue1"><?=$v['name']?></td>
	<td title="Название" class="blue1"></td>
	<td title="Название" class="blue1"></td>
	<td width="4%" title="" class="blue1"><?=$v['link']?></td>
	<td title="Опубликовать"><a  href="#" class="publishIt"><img border="0" alt="Опубликовать" src="/img/admin/<?php if($v['publ'] == "2") echo "b_publ.gif"; else echo "b_publ_no.gif"; ?>"></a></td>
	<td title="Редактировать"><a  href="/admin/menu/edit/<?=$v['id']?>"><img width="20" height="20" border="0" alt="Редактировать" src="/img/admin/b_edit.gif"></a></td>
	<td title="Удалить"><a  href="#" class="del_post"><img width="20" height="20" border="0" alt="Удалить" src="/img/admin/b_del.gif"></a></td>
	<td title="Выделить"><input type="checkbox" value="<?=$v['id']?>" class="fld item_ch_box" name="news_check[1]"></td>
</tr>
	<?php  
			 foreach($list1 as $vv){ 
				if($v['id'] == $vv['idp']){
				?>
	<tr id="<?=$vv['id']?>tr" bgcolor="F8FAFC" onmouseout="this.bgColor = '#F8FAFC'" onmouseover="this.bgColor = '#EFF3F7'">	
		<td title="Дата" class="blue1"></td>
		<td title="Название" class="blue1"></td>
		<td title="Название" class="blue1"><input type="text" maxlength="4" size="4" value="<?=$vv['idr']?>"></td>
		<td title="Название" class="blue1"><?=$vv['name']?></td>
		<td width="4%" title="" class="blue1"><?=$vv['link']?></td>
		<td title="Опубликовать"><a  href="#" class="publishIt"><img border="0" alt="Опубликовать" src="/img/admin/<?php if($vv['publ'] == "2") echo "b_publ.gif"; else echo "b_publ_no.gif"; ?>"></a></td>
		<td title="Редактировать"><a  href="/admin/menu/edit/<?=$vv['id']?>"><img width="20" height="20" border="0" alt="Редактировать" src="/img/admin/b_edit.gif"></a></td>
		<td title="Удалить"><a  href="#" class="del_post"><img width="20" height="20" border="0" alt="Удалить" src="/img/admin/b_del.gif"></a></td>
		<td title="Выделить"><input type="checkbox" value="<?=$vv['id']?>" class="fld item_ch_box" name="news_check[1]"></td>
	</tr>
	<?php 		}
			}  ?>
			
<?php		 }
		}
	}  ?>

<tr>
	<td height="21" colspan="9">
		<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#EFEFEF">
		<tbody>
			<tr bgcolor="#FFFFFF">
				<td width="25" height="5"></td>
				<td width="692" class="blue1">
				
				</td>
				<td width="23"></td>
				<td width="79"></td>
			</tr>
			<tr>
				<td><a  href="#" class="delSelected"><img width="20" height="20" border="0" src="/img/admin/b_del.gif"></a></td>
				<td><a class="blue1 delSelected"  href="#">Удалить выделенное</a></td>
				<td><input type="checkbox"  value="checkbox" class="fld check_all actionChBox" name="checkbox"></td>
				<td><a class="blue1 check_all"  name="checkbox" href="#">Выделить все</a> </td>
			</tr>
		</tbody>
		</table>
	</td>
</tr>
</tbody></table>
&#65279;<table cellspacing="1" cellpadding="3" border="0" align="right">
<tbody><tr>
</tr>
</tbody></table><input type="hidden" value="send" name="action">
</form></td></tr></tbody></table>