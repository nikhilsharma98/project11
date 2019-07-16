$(document).ready(function(){
    
    
    $("#students").validate({
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
            father_name: {
                required: true,

            },
            mother_name: {
                required: true,
            },
            aadhar_id: {
                required: true,

            },
            dob: {
                required: true,
            },
            doa: {
                required: true,

            },
            photo: {
                required: true,
            },
            gender: {
                required: true,

            },
            address: {
                required: true,
            },
            city: {
                required: true,

            },
            state_id: {
                required: true,
            },
            countary_id: {
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
                father_name:{
                    required: "Father Name is Required",
                },
                mother_name:{
                    required: "MOther Name is Required",
                },
                aadhar_id: {
                    required: "Aadhar Id is Required",
                },
                dob:{
                    required: "DOB is Required",
                },
                doa:{
                    required: "DOA is Required",
                },
                photo:{
                    required: "Photo is Required",
                },
                gender:{
                    required: "Gender is Required",
                },
                address: {
                    required: "Address is Required",
                },
                city:{
                    required: "City is Required",
                },
                state_id:{
                    required: "State  is Required",
                },
                countary_id:{
                    required: "State  is Required",
                },

            }
        
    });
});