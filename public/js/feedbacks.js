$(document).ready(function(){
    
    
    $("#feedbacks").validate({
        rules: {
            month: {
                required: true,
            },
            description	: {
                required: true,

            }
        },

            messages:{
                month:{
                    required: "Month is required not",
                },
                description	:{
                    required: "Description	 Is required",
                },
            }
        
    });
});