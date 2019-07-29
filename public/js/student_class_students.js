$(document).ready(function(){
    
    
    $("#student_class_students").validate({
        rules: {
            student_class: {
                required: true,
            },
            // student_class_id: {
            //     required: true,
            // },
            student_id	: {
                required: true,

            },
            school_session_id	: {
                required: true,

            }
        },

            messages:{
                student_class:{
                    required: "Student Class is Required",
                },
                // student_class_id:{
                //     required: "Student Class ID is Required",
                // },
                student_id	:{
                    required: "Student Id Is Required",
                },
                school_session_id	:{
                    required: "School Session Is Required",
                },
            }
        
    });
});