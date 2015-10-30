$(document).ready(function(){

	$("#postForm").submit(function(){
		
		var oEd2=FCKeditorAPI.GetInstance('d[anons]');
		var anons= encodeURIComponent(oEd2.GetData(document.getElementById("d[anons]").value));
		
		if($("#news_name").val()=="" ||  anons =="" || $("#news_data").val()==""){
			alert("Вы не заполнили поля: название, дата или анонс");
			return false;
		}
		
	});
	
	$("#extraFields").click(function(){
		
		$("#news_block").toggle();
		return false;
		
	});
});