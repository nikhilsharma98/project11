// var cars = ["countary_id", "state_id", "Student_class_id"];
$('.btn_show').click(function(){
    // alert("okay");
    var student_id = this.id;
    $.ajax({ 
        type: "get",
        url: '/students/studentDetail/' + student_id,
        dataType: "json",
        success: function(res){
            let modalBody = '';
            for(key in res){
                    
                    var keyString = _.startCase(key);
                    // alert(key)
                    modalBody += '<div class="table table-responsive">\n\
                                <div class="col-md-12">\n\
                                    <div class="col-md-6"><label>'+ keyString +'<label></div>\n\
                                    <div class="col-md-6"><label>'+res[key] +'<label></div>\n\
                                </div>\n\
                                </div>';
                                // alert(new_option)
                                // var new_option = $(".student_id").val();
                                // $(".student_id").append('<option value="' + new_option + '">' + new_option + '</option    >');
                                

            }

            $("#modalViewDetails .modal-body").html(modalBody)
            $("#modalViewDetails").modal(); 
        }
    });
})




$('#btn_show').on('change','#student-id', function(){
// alert(btn_show)

    var value = $(this).val();
    var id = $(this).value(id);
    // alert(btn_show)
    alert(value+ "" +id)
    
    // alert(id)
    $.ajax({
        type: "GET",
        url: '/students/studentDetail/' + student_id,
        dataType: "json",
        data:{
            id: id,
            value: value,
        },
        success: function(response){
            // alert(response)
        // alert(result);
        },

        error:function(){
            // alert('error');
        }
    });
});


// var new_option = $("#textbox_id").val();

// $("#my_select_id").append('<option value="' + new_option + '">' + new_option + '</option>');


// $(document).ready(function(){
//     alert('jhsdfj');
//     $('.#displaybtn').click(function(e){
//         var abc = $(this).closest('input').val();
//         alert('1');
//         // e.preventDefault();
//         $.ajax({ 
//             method: "post",
//             url: "/students/index/{$student_id}",
//             data: $('#displaydata').serialize(),
//             dataType: "html",
            
//             success: function(response){
//         // alert('2');
                    
//                     $('#messagedisplay').text(response);
//             }
//         });
//     })

// });
