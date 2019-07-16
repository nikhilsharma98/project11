$(document).ready(function(){
    
    
    $("#school_sessions").validate({
        rules: {
            session_year: {
                required: true,
            }
        },
          

            messages:{
                session_year:{
                    required: "Session Year is required",
                },
               
            }
        
    });
});