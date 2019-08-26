

//setup password user studio
$("#setup-pw").on("click",function(e){
    e.preventDefault();
    var formData=new FormData();
    formData.append("password1",$("#password1").val());
    formData.append("password2",$("#password2").val());
    formData.append("user_code",$("#user_code").val());
    for (var pair of formData.entries()) {
        console.log(pair[0]+ ', ' + pair[1]); 
    }
    $.ajax({
       type:'POST',
       url:'../setpassword',
       cache:false,
       contentType: false,
       processData: false,
       data: formData,
       success:function(data){

        if(data.success){ 
          console.log(data.success);
          window.location = "../login";
        }
        else if(data.error){
          console.log(data.error);
        }
        
       },
       error:function(data) {
          /*$('#message ul').empty();
          if( data.status == 422 ) {
            var errors = $.parseJSON(data.responseText);
            $.each(errors, function (key, value) {
              $('#message').addClass("alert alert-danger");
                if($.isPlainObject(value)) {
                    $.each(value, function (key, value) {                       
                        console.log(key+ " " +value);
                        $('#message ul').append("<li>"+value+"</li>");
                        
                    });
                }
            });
          }*/
        }
    });
});