$(document).ready(function(){
    
    
    $("#guardians").validate({
        rules: {
            father_name: {
                required: true,
            },
            father_image: {
                required: true,

            },
            father_occupation: {
                required: true,

            },
            mother_name: {
                required: true,
            },
            mother_image: {
                required: true,

            },
            mother_occupation: {
                required: true,

            }
        },

            messages:{
                father_name:{
                    required: "Father Name is required",
                },
                father_image:{
                    required: "Father Image Is required",
                },
                father_occupation:{
                    required: "Father Occupation Is required",
                },
                mother_name:{
                    required: "Mother Name is required",
                },
                mother_image:{
                    required: "Mother Image Is required",
                },
                mother_occupation:{
                    required: "Mother Occupation Is required",
                },
            }
        
    });
});