// var cars = ["countary_id", "state_id", "Student_class_id"];
$('.btn_show').click(function(){
    // alert("okay");
    var student_id = this.id;
    // var abc = $(this).closest('input').val();
    // e.preventDefault();
    $.ajax({ 
        type: "get",
        url: '/students/studentDetail/' + student_id,
        dataType: "json",
        success: function(res){
            let modalBody = '';
            for(key in res){
                // if(key !== "countary_id" && key !== "state_id" && key !== "Student_class_id"){
                    
                    var keyString = _.startCase(key);
                    // alert(key)
                    modalBody += '<div class="table table-responsive">\n\
                                <div class="col-md-12">\n\
                                    <div class="col-md-6"><label>'+ keyString +'<label></div>\n\
                                    <div class="col-md-6"><label>'+res[key] +'<label></div>\n\
                                </div>\n\
                                </div>';
                // }
                            
            }
            
            $("#modalViewDetails .modal-body").html(modalBody)
            $("#modalViewDetails").modal(); 
        }
    });
})

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

