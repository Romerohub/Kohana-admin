$(document).ready(function(){
	ch_action = true; //"выбрать все " запоминаем состояние для выделение всего списка
	
	$(".publishIt").click(function(){
		var t_parent = $(this).parent().parent();
		var res = $(t_parent).find("input").val();
		var s_img = $(this).find("img");
		var t_img = s_img.attr("src");
		//console.log(t_img);
		var patt=/b_publ_no.gif/g;
		 var result=patt.test(t_img);
		
		var status = 1;
		if(result) status = 2;
		$.post("/admin/post/status/", {'status':status, "id":res}, function(data){
			data = $.parseJSON(data);
			
			if(data.error == "OK"){
				if(status == 2){ 
					s_img.attr("src", "/img/admin/b_publ.gif");
				}else{
					s_img.attr("src", "/img/admin/b_publ_no.gif");
				}
			}
		});
		return false;
	});
	
	/**Удаление выбранных*/
	$(".delSelected").click(function(){
		
		if(!confirm("Точно удалить?")) return false;
		
		delList();
		return false;
	});
	
	/**выбрать все**/
	$(".check_all").click(function(){
		
		$(".item_ch_box").each(function(key, data){
				$(this).attr("checked", ch_action);
		});
		if(ch_action){
			ch_action = false;
		}else{
			ch_action = true;
		}
		return false;
	});
	/*удаление отдельного поста*/
	$(".del_post").click(function(){
		if(!confirm("Точно удалить?")) return false;
		delItem(this);
		
		return false;
	});
	
});

/**Удаляем список*/
function delList(){

	var list = new Array();
	var i = 0;
	$(".item_ch_box").each(function(key, data){
		
		if($(this).attr("checked")){

			list[i] = $(this).val();
			i++;
		}
		
	});

	postDel(list);
	return false;
}

/**удаляем одну запись**/
function delItem(item){
	
	var t_parent = $(item).parent().parent();
	var t_id  = t_parent.attr("id");
	
	var list = new Array();
	list[0] = t_id;

	postDel(list);
	
	return false;
	
}
/**отправим данные для удаления**/
function postDel(list){
	
	$.post("/admin/post/del/", {'post_ids[]':list}, function(data){
		data = $.parseJSON(data);
		
		if(data.error == "OK" && data.res.length > 0){
			$.each(data.res, function(key, val){
				$("#"+val+"tr").remove();
				
			});
		}
		
	});
}