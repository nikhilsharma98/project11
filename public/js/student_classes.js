$(document).ready(function(){
    
    
    $("#student_classes").validate({
        rules: {
            title: {
                required: true,
            },
            section: {
                required: true,

            }
        },

            messages:{
                title:{
                    required: "Title is required not",
                },
                section:{
                    required: "Section Is required",
                },
            }
        
    });
});