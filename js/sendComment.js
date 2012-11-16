function comment()
{ 
	alert($("#writeComment").val());
 
	 
      $.post('ajax/sendComment.php',{comment:$("#writeComment").val()},function(data){
         if(data=="success")
          {
   
              $("#comments").append("<li>"+$("#writeComment").val()+"</li>");
              $("#writeComment").val("");
          }
      });
    
    
}