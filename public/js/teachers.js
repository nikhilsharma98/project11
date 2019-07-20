$(document).ready(function(){
    
    
    $("#teachers").validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,

            },
            email: {
                required: true,
            },
            age: {
                required: true,

            },
            experience: {
                required: true,
            },
            aadhar_id: {
                required: true,

            },
            dob: {
                required: true,
            },
            gender: {
                required: true,

            },
            address: {
                required: true,
            }
        },
           

            messages:{
                first_name:{
                    required: "First Name is required",
                },
                last_name:{
                    required: "Last Name is required",
                },
                email:{
                    required: "Email is Required",
                },
                age:{
                    required: "Age  is Required",
                },
                experience:{
                    required: "Experience is Required",
                },
                aadhar_id: {
                    required: "Aadhar Id is Required",
                },
                dob:{
                    required: "DOB is Required",
                },
                gender:{
                    required: "Gender is Required",
                },
                address: {
                    required: "Address is Required",
                },
               

            }
        
    });
});