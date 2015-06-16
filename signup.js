$(document).ready(function(){
  $("input").keydown(function(){
        
    });     
  

   $("input").keyup(function(){
        $(this).css("background-color", "pink");
  
        var p1= $(this).val();
        var p2= $("#pass").val();
        console.log("hello" + p1);

        window.alert(" hello" + p1 );


        if(p1==p2)
        {
        	console.log("hello match  " );
        	  $("#reText").text("password match");

        	  console.log($("#reText").text()+ "dd" );


        	     //   window.alert(" hello" + p1 );

        }

       

  
      
      
       

       	 
    });
       
});