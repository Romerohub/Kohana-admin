<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody><tr><td width="154" valign="top"><table width="100%" cellspacing="0" cellpadding="2" border="0">
<tbody><tr>
	<td width="16%"><a   href="#"><img width="20" height="20" border="0" src="/img/admin/b_add.gif"></a></td>
	<td width="84%"><a class="blue1"   href="/admin/news/add/">Добавить</a></td>
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
Здесь доступны такие опции, как: добавить, редактировать, опубликовать/снять с публикации, удалить	</div>
	</td>
</tr>
<tr>
	<td><img width="147" height="4" src="/img/admin/hlp4.gif"></td>
</tr>
</tbody></table></td><td width="100%" valign="top"><form name="news_show">
<table width="100%" cellspacing="1" cellpadding="3" border="0">
<tbody><tr class="blue1">
	<td width="11%" height="21" background="/img/admin/mm_top2.gif" title="Дата" class="blue1">Дата</td>
	<td width="26%" height="21" background="/img/admin/mm_top2.gif" title="Название" class="blue1">Название</td>
	<td width="47%" background="/img/admin/mm_top2.gif" title="Анонс">Анонс</td>
	<td width="4%" background="/img/admin/mm_top2.gif" title="Опубликовать"><img width="26" height="15" alt="Опубликовать" src="/img/admin/ipubl.gif"></td>
	<td width="4%" background="/img/admin/mm_top2.gif" title="Редактировать"><img width="26" height="15" alt="Редактировать" src="/img/admin/iedit.gif"></td>
	<td width="4%" background="/img/admin/mm_top2.gif" title="Удалить"><img width="26" height="15" alt="Удалить" src="/img/admin/idel.gif"></td>
	<td width="4%" background="/img/admin/mm_top2.gif" title="Выделить"><img width="25" height="15" alt="Выделить" src="/img/admin/isel.gif"></td>
</tr>
<?php  if($list){ 
		foreach($list as $k=>$v){ ?>
<tr id="<?=$v->id?>tr" bgcolor="F8FAFC" onmouseout="this.bgColor = '#F8FAFC'" onmouseover="this.bgColor = '#EFF3F7'">	<td title="Дата" class="blue1"><?=$v->dates?></td>
	<td title="Название" class="blue1"><?=$v->name?></td>
	<td width="4%" title="Анонс" class="blue1"><p>&nbsp;<?=$v->anons?></p></td>
	<td title="Опубликовать"><a  href="#" class="publishIt"><img border="0" alt="Опубликовать" src="/img/admin/<?php if($v->publ == "2") echo "b_publ.gif"; else echo "b_publ_no.gif"; ?>"></a></td>
	<td title="Редактировать"><a  href="/admin/news/edit/<?=$v->id?>"><img width="20" height="20" border="0" alt="Редактировать" src="/img/admin/b_edit.gif"></a></td>
	<td title="Удалить"><a  href="#" class="del_post"><img width="20" height="20" border="0" alt="Удалить" src="/img/admin/b_del.gif"></a></td>
	<td title="Выделить"><input type="checkbox" value="<?=$v->id?>" class="fld item_ch_box" name="news_check[1]"></td>
</tr>
<?php }}  ?>
<?php /* if($list){ 
		foreach($list as $k=>$v){ ?>
<tr id="<?=$v['id']?>tr" bgcolor="F8FAFC" onmouseout="this.bgColor = '#F8FAFC'" onmouseover="this.bgColor = '#EFF3F7'">	<td title="Дата" class="blue1">2012-10-17 17:17:55</td>
	<td title="Название" class="blue1"><?=$v['name']?></td>
	<td width="4%" title="Анонс" class="blue1"><p>&nbsp;<?=$v['anons']?></p></td>
	<td title="Опубликовать"><a  href="#" class="publishIt"><img border="0" alt="Опубликовать" src="/img/admin/<?php if($v['publ'] == "2") echo "b_publ.gif"; else echo "b_publ_no.gif"; ?>"></a></td>
	<td title="Редактировать"><a  href="/admin/post/edit/<?=$v['id']?>"><img width="20" height="20" border="0" alt="Редактировать" src="/img/admin/b_edit.gif"></a></td>
	<td title="Удалить"><a  href="#" class="del_post"><img width="20" height="20" border="0" alt="Удалить" src="/img/admin/b_del.gif"></a></td>
	<td title="Выделить"><input type="checkbox" value="<?=$v['id']?>" class="fld item_ch_box" name="news_check[1]"></td>
</tr>
<?php }} */ ?>
<tr>
	<td height="21" colspan="9">
		<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#EFEFEF">
		<tbody>
			<tr bgcolor="#FFFFFF">
				<td width="25" height="5"></td>
				<td width="692" class="blue1">
				
				
				<?php
				//PAGINATION
				 if(!empty($pager) && $pager['total_pages']>1){ ?> 
				Страницы: <ul style="display: inline;">
				<?php 
					for($i = 1; $i<=$pager['total_pages'];$i++){
						
						if(($pager['number']) == $i)
						echo '<li style="display: inline;">'.$i.'| </li>';
						else
						echo '<li style="display: inline;"><a href="?page='.$i.'">'.$i.'</a>| </li>';
					}
					 //print_r($pager);
				?>
				</ul>
				<?php } 
				//PAGINATION
				?>
				
				
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