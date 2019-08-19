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
            }
            
            $("#modalViewDetails .modal-body").html(modalBody)
            $("#modalViewDetails").modal(); 
        }
    });
})




$('#btn_show').on('change','#student-id', function(e){
    // alert(btn_show)
    var valu = $(this).val();
    var id = $(this).data('id'); 
    // alert(value+ "" +id)
    $.ajax({
        type: "GET",
        url: '/StudentStatus',
        dataType: "json",
        data:{
            id: id,
            valu: valu
        },
        success: function(result){
            // console.log(result);
        // alert(result);
        },
        error:function(){
            // alert('error');
        }
    });
});


