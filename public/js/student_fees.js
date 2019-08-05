$(document).ready(function(){
    
    
    $("#student_fees").validate({
        rules: {
            class_fees: {
                required: true,
            }
        },
          

            messages:{
                class_fees:{
                    required: "Class Fees Is Required",
                },
               
            }
        
    });
});