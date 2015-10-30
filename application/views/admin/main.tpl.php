<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<META HTTP-EQUIV="Content-language" CONTENT="ru-RU">
<title>Admin</title>

<link href="/css/admin/stadm.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='/js/jquery-1.7.2.min.js'></script>

<?php if(!empty($styles)){ foreach($styles as $file => $type) { echo HTML::style($file, array('media' => $type)), "\n"; }} ?>
<?php if(!empty($scripts)) { foreach($scripts as $file) { echo HTML::script($file, NULL, TRUE), "\n"; }} ?>
</head>

<body topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" >
<input type="hidden" id="mes" value="Запись прошла успешно">
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
<!--shapka-->
<tr>
	<td width="4" height="62"><img src="/img/admin/sp.gif" width="28" height="1"></td>
	<td background="/img/admin/topgray.gif"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
	<td width="7" valign="bottom"><img src="/img/admin/cor1.gif" width="7" height="4"></td>
	<td class="grey1">
		<table width="100%"  border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="15%"><img src="/img/admin/logo.jpg" width="149" height="62" align="absmiddle"></td>
            <td width="85%" class="mmsel">для показа<br>
				<span class="grey1">Административная часть</span>
			</td>
		</tr>
        </table>
	</td>
	<td width="10" style="padding:15px">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<img src="/img/admin/fl_rus1.gif" alt="русский" width="25" height="17" border="0">
			</td>
			<td width="10">&nbsp;</td>
			<td>
			<a href="#"><img src="/img/admin/fl_eng2.gif" alt="английский" width="25" height="17" border="0"></a>
			</td>
		</tr>
		</table>
	</td>
	<td width="2"><img src="/img/admin/topline.gif" width="2" height="62"></td>
	<td width="10" class="grey1" style="padding:15px">Пользователь:&nbsp;<strong>1</strong> </td>
	<td width="2"><img src="/img/admin/topline.gif" width="2" height="62"></td>
	<td width="62"><div align="center"><a href="/admin/main/logout/" class="grey1">Выход</a></div></td>
	<td width="7" valign="bottom"><img src="/img/admin/cor2.gif" width="7" height="4"></td>
</tr>
</table>
</td>
    <td width="4"><img src="/img/admin/sp.gif" width="28" height="1"></td>
</tr>
<!--shapka-->
<tr>
    <td height="6" colspan="3"></td>
</tr>
<tr height="100%">
	<td></td>
	<td>
		<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
		<tr>
		<!--left menu-->
			
			<td width="200" valign="top">
			<div id="left_panel" name="left_panel">
				<table width="200" height="100%"  border="0" cellpadding="0" cellspacing="0">
				
				<tr valign="top">
					<td colspan="3">
						<table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
						<tbody><tr>
							<td width="9"><img width="9" height="26" src="/img/admin/mm_top1.gif"></td>
							<td valign="middle" height="26" background="/img/admin/mm_top2.gif" class="blue1"><a class="blue1" href="#">Меню</a></td>
							<td width="9"><img width="9" height="26" src="/img/admin/mm_top3.gif"></td>
						</tr>
						</tbody></table>
					</td>
				</tr>
				
				<tr>
					<td colspan="3">
						<div id="main_menu_blog" name="main_menu_blog" style="display: block;">
							<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="9" valign="top" background="/img/admin/mm_c1.gif">
									<img src="/img/admin/mm_left.gif" width="9" height="40">
								</td>
								<td valign="top" background="/img/admin/mm_c2.gif">
								<div id="page_left">
								<ul class="blue1">
								<?php if($menuList){
									 foreach($menuList as $k=>$v){ 
									 	if(empty($v['idp'])){
									 	?>
										<li><a href="/admin/menu/edit/<?=$v['id']?>"><?=$v['name']?></a></li>
											<ul >
											<?php  foreach($menuList as $kk=>$vv){ 
									 	if($v['id'] == $vv['idp']){ ?>
												<li><a href="/admin/menu/edit/<?=$vv['id']?>"><?=$vv['name']?></a></li>
										<?php }} ?>
											</ul>
										
								<?php }}} ?>
								</ul>
								</div>
								</td>
								<td width="9" valign="top" background="/img/admin/mm_c3.gif">
									<img src="/img/admin/mm_right.gif" width="9" height="40">
								</td>
							</tr>
							</table>
						</div>
					</td>
				</tr>
								
				<tr>
						<td height="3"><img width="9" height="3" src="/img/admin/mm_bot1.gif"></td>
						<td width="182" background="/img/admin/mm_bot2.gif"></td>
						<td><img width="9" height="3" src="/img/admin/mm_bot3.gif"></td>
				</tr>
				
				
				<tr valign="top" height="10px">
					<td colspan="3" valign="top">
					</td>
				</tr>

				<tr valign="top" height="10px">
					<td colspan="3" valign="top">
					</td>
				</tr>
				<tr valign="top">
					<td colspan="3" valign="top">
						<table width="100%" border="0" cellpadding="0" cellspacing="0" valign="top">
						<tr>
							<td width="9"><img src="/img/admin/mm_top1.gif" width="9" height="26"></td>
							<td height="26" background="/img/admin/mm_top2.gif" class="blue1" valign="middle"><a href="#" class="blue1" >Дополнительно</a></td>
							<td width="9"><img src="/img/admin/mm_top3.gif" width="9" height="26"></td>
						</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<div id="add_feat_blog" name="add_feat_blog">
							<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
							<tr valign="top" height="100%">
								<td width="9" valign="top" background="/img/admin/mm_c1.gif">
									<img src="/img/admin/mm_left.gif" width="9" height="40">
								</td>
								<td valign="top" background="/img/admin/mm_c2.gif">
								<table width="100%"  border="0" cellspacing="5" cellpadding="0">
<tr height="20"><td colspan="2"><div align="center"></td></tr>

<tr>
<div align="left">
	<td width="30"><a href="#"  ><img src="/img/admin/ico_menu.png" width="38" height="34" border="0"></a></td>
	<td><a href="/admin/menu/"  class="blue1">Меню</a></td>
</div>
</tr>
<tr>
<div align="left">
	<td width="30"><a href="#"  ><img src="/img/admin/ico_news.png" width="38" height="34" border="0"></a></td>
	<td><a href="/admin/news/"  class="blue1">Новости</a></td>
</div>
</tr>
<tr>
<div align="left">
	<td width="30"><a href="#"  ><img src="/img/admin/ico_article.png" width="38" height="34" border="0"></a></td>
	<td><a href="/admin/article/"  class="blue1">Статьи</a></td>
</div>
</tr>
<tr>
<div align="left">
	<td width="30"><a href="#"  ><img src="/img/admin/ico_constants.png" width="38" height="34" border="0"></a></td>
	<td><a href="/admin/const/"  class="blue1">Константы</a></td>
</div>
</tr>

</table>								</td>
								<td width="9" valign="top" background="/img/admin/mm_c3.gif">
									<img src="/img/admin/mm_right.gif" width="9" height="40">
								</td>
							</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr valign="top">
						<td height="3" valign="top"><img src="/img/admin/mm_bot1.gif" width="9" height="3"></td>
						<td background="/img/admin/mm_bot2.gif" width=100% valign="top"></td>
						<td><img src="/img/admin/mm_bot3.gif" width="9" height="3" valign="top"></td>
				</tr>
				<tr valign="top" height="100%"><td colspan="3"></td></tr>
				</table>
			</div>
			</td>
			
		<!--left menu-->
			<td width="15" ><img src="/img/admin/arr.png"Ю</td>
		<!--right menu-->
			<td valign="top" width="100%">
				<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
			    <tr valign="top">
					<td width="9"><img src="/img/admin/mm_top1.gif" width="9" height="26"></td>
					<td height="26" background="/img/admin/mm_top2.gif" class="blue1" valign="middle">
						<div id="spin"><img border="0" style="display:none;" align="middle" src="/img/admin/spinner_w.gif"/></div>
					</td>
					<td height="26" background="/img/admin/mm_top2.gif" class="blue1" valign="middle" width="100%">
						<div class="blue1"><span id="sections">Раздел: <?php if(!empty($path)){ echo $path; }?></span></div>
					</td>
					<td width="9"><img src="/img/admin/mm_top3.gif" width="9" height="26"></td>
				</tr>
				<tr>
					<td width="9" valign="top" background="/img/admin/mm_c1.gif">
						<img src="/img/admin/mm_left.gif" width="9" height="40">
					</td>
					<td valign="top" background="/img/admin/mm_c2.gif" colspan="2">
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<br>
						<tr>
						<td valign="top">
							<div id="main_block" name="main_block">
							<?php if(!empty($content)) echo $content;?>
							</div>
						</td>
						</tr>
						</table>
					</td>
					<td width="9" valign="top" background="/img/admin/mm_c3.gif">
						<img src="/img/admin/mm_right.gif" width="9" height="40">
					</td>
				</tr>
				<tr>
					<td height="3"><img src="/img/admin/mm_bot1.gif" width="9" height="3"></td>
					<td background="/img/admin/mm_bot2.gif" colspan="2"></td>
					<td><img src="/img/admin/mm_bot3.gif" width="9" height="3"></td>
				</tr>
				</table>
			</td>
		<!--right menu-->
		</tr>
		</table>
	</td>
	<td></td>
</tr>
<tr>
    <td height="6" colspan="3"></td>
</tr>
<!--footer-->
<tr>
	<td height="62"></td>
    <td background="/img/admin/bottgray.gif">
		<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="10" valign="top"><img src="/img/admin/cor3.gif" width="10" height="3"></td>
    <td class="grey1">ОС: <strong>WINNT</strong>&nbsp;&nbsp;&nbsp;Версия ПХП:<strong>5.2.17</strong><br>
    Свободно: <strong>0 Mb</strong><br>
    Последняя активность: <strong>пользователь: 1 в 19:55:55 17-10-2012 c IP 127.0.0.1</strong></td>
    <td width="1"><img src="/img/admin/sp.gif" width="1" height="62"></td>
    <td><div align="right"><span class="grey1">Разработано <a href="http://bionic.org.ua" class="grey1" target="_blank">BionicStudio</a><br>
    дата: 22.08.2012</span><br>
    </div></td>
    <td width="10" valign="top"><img src="/img/admin/cor4.gif" width="10" height="3"></td>
</tr>
</table>
	</td>
    <td></td>
</tr>
<!--footer-->
</table>
</body>
</html>
