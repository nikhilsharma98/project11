$(document).ready(function(){
    
    
    $("#works").validate({
        rules: {
            title: {
                required: true,
            },
            description: {
                required: true,

            },
            student_class_id: {
                required: true,

            }
        },

            messages:{
                title:{
                    required: "Title is required",
                },
                description:{
                    required: "Description Is required",
                },
                student_class_id:{
                    required: "Student Class Id Is required",
                },
            }
        
    });
});