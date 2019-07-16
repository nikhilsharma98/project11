$(document).ready(function(){
    
    
    $("#school").validate({
        rules: {
            name: {
                required: true,
            },
            title: {
                required: true,

            },
            date_of_opening	: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,

            },
            state_id	: {
                required: true,
            },
            countary_id	: {
                required: true,
            }
        },
           

            messages:{
                name:{
                    required: "Name is required",
                },
                title:{
                    required: "Title Is required",
                },
                date_of_opening:{
                    required: "Date Of Opening is required",
                },
                address:{
                    required: "Address Is required",
                },
                city:{
                    required: "City is required",
                },
                state_id:{
                    required: "State Id Is required",
                },
                countary_id:{
                    required: "Countary Id Is required",
                },

            }
        
    });
});