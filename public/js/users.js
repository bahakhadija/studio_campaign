// get all users (team)
function all_users(user_photo,user_full_name, role_name,user_date_added,user_id)
{
  var src="";
  if(user_photo==null){
    src="img/default.jpg";
  }else{
    src="uploads/photo/"+user_photo;
  }

 /* if(user["user_photo"]!=null){
    $("#user_photo").attr("src", "uploads/photo/"+user["user_photo"]);
    $("#photo_header").attr("src", "uploads/photo/"+user["user_photo"]);
  }else{
    $("#user_photo").attr("src", "img/default.jpg");
    $("#photo_header").attr("src", "img/default.jpg");
  }
  $("#full_name_header").text( user["user_full_name"]);*/


  $("#users-list").append('<div class="c-pipeline__card u-width-100">\
                            <div class="o-media">\
                              <div class="o-media__img u-m-auto u-pr-small">\
                                <div class="c-avatar c-avatar--large">\
                                  <img class="c-avatar__img" src="'+src+'" alt="photo">\
                                </div>\
                              </div>\
                              <div class="o-media__body u-m-auto">\
                                <h4>'+user_full_name+'</h4>\
                                <p class="c-pipeline__card-subtitle">'+role_name+'</p>\
                                <p class="c-pipeline__card-subtitle">'+user_date_added+'</p>\
                              </div>\
                              <div class="o-media__body u-m-auto">\
                                <div>Assigned Campaign :</div>\
                                <div class="c-avatar c-avatar--small">\
                                  <img class="c-avatar__img" src="img/m1.jpg" alt="photo">\
                                  <img class="c-avatar__img" src="img/m2.jpg" alt="photo">\
                                  <img class="c-avatar__img" src="img/m3.jpg" alt="photo">\
                                </div>\
                              </div>\
                              <div class="o-media__body u-m-auto">\
                                  <div class="dropdown fc-rtl u-pr-xsmall"> \
                                    <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">\
                                    <i class="feather icon-more-horizontal" style="color: #768093de;"></i>\
                                    </span>\
                                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end" style="position: absolute; transform: translate3d(-130px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">\
                                      <a href="#" class="btnSelect c-dropdown__item dropdown-item user-settings" data-toggle="modal" data-target="#modal2" userid="'+user_id+'" action="edit">Edit</a>\
                                      <a href="#" class="btnSelect c-dropdown__item dropdown-item user-settings" data-toggle="modal" data-target="#modal3" userid="'+user_id+'" action="delete">Delete</a>\
                                    </div>\
                                  </div>\
                              </div>\
                            </div>\
                          </div>');
}

///////////////////////////////////
//function upload photo
function ekUpload(img,file) {
     function Init() {

          console.log("Upload Initialised");

          var fileSelect = document.getElementById(file),
               fileDrag = document.getElementById('file-drag'),
               submitButton = document.getElementById('submit-button');

          fileSelect.addEventListener('change', fileSelectHandler, false);

          // Is XHR2 available?
          var xhr = new XMLHttpRequest();
          if (xhr.upload) {
               // File Drop
               fileDrag.addEventListener('dragover', fileDragHover, false);
               fileDrag.addEventListener('dragleave', fileDragHover, false);
               fileDrag.addEventListener('drop', fileSelectHandler, false);
          }
     }

     function fileDragHover(e) {
          var fileDrag = document.getElementById('file-drag');

          e.stopPropagation();
          e.preventDefault();

          fileDrag.className = (e.type === 'dragover' ? 'hover' : ' '+file+'');
     }

     function fileSelectHandler(e) {
          // Fetch FileList object
          var files = e.target.files || e.dataTransfer.files;

          // Cancel event and hover styling
          fileDragHover(e);

          // Process all File objects
          for (var i = 0, f; f = files[i]; i++) {
               parseFile(f);
               uploadFile(f);
          }
     }

     // Output
     function output(msg) {
          // Response
          var m = document.getElementById('messages');
          m.innerHTML = msg;
     }

     function parseFile(file) {

          console.log(file.name);
          // output(
          //      '<strong>' + encodeURI(file.name) + '</strong>'
          // );

          // var fileType = file.type;
          // console.log(fileType);
          var imageName = file.name;

          var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
          if (isGood) {
               document.getElementById('start').classList.add("hidden");
               document.getElementById('response').classList.remove("hidden");
               document.getElementById('notimage').classList.add("hidden");
               // Thumbnail Preview
               document.getElementById(img).classList.remove("hidden");
               document.getElementById(img).src = URL.createObjectURL(file);
          }
          else {
               document.getElementById(file).classList.add("hidden");
               document.getElementById('notimage').classList.remove("hidden");
               document.getElementById('start').classList.remove("hidden");
               document.getElementById('response').classList.add("hidden");
               document.getElementById("file-upload-form").reset();
          }
     }
/*
  function setProgressMaxValue(e) {
        var pBar = document.getElementById('file-progress');

        if (e.lengthComputable) {
             pBar.max = e.total;
        }
  }

  function updateFileProgress(e) {
        var pBar = document.getElementById('file-progress');

        if (e.lengthComputable) {
             pBar.value = e.loaded;
        }
  }*/

  function uploadFile(file) {

        var xhr = new XMLHttpRequest(),
             fileInput = document.getElementById('class-roster-file'),
            // pBar = document.getElementById('file-progress'),
             fileSizeLimit = 1024; // In MB
        if (xhr.upload) {
             // Check if file is less than x MB
             if (file.size <= fileSizeLimit * 1024 * 1024) {
                  // Progress bar
                 // pBar.style.display = 'inline';
                 /* xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                  xhr.upload.addEventListener('progress', updateFileProgress, false);*/

                  // File received / failed
                  xhr.onreadystatechange = function (e) {
                       if (xhr.readyState == 4) {
                            // Everything is good!

                            // progress.className = (xhr.status == 200 ? "success" : "failure");
                            // document.location.reload(true);
                       }
                  };

                  // Start upload
                  /*xhr.open('POST', document.getElementById('file-upload-form').action, true);
                  xhr.setRequestHeader('X-File-Name', file.name);
                  xhr.setRequestHeader('X-File-Size', file.size);
                  xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                  xhr.send(file);*/
             } else {
                  output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
             }
        }
  }

  // Check for the various File API support.
  if (window.File && window.FileList && window.FileReader) {
    Init();
  } else {
    document.getElementById('file-drag').style.display = 'none';
  }
}
ekUpload("user-photo",'user_photo');
ekUpload("user-photo2",'user_photo2');
// end function upload photo

//get info of selected user studio in modal and update or delete
$("#users-list").on("click",".user-settings",function(e){
    e.preventDefault();
    //$('#form-delete').get(0).reset();
    var action = $(this).attr('action');
    var userid = $(this).attr('userid');
      
    console.log(action+" "+userid);

    $('#user_photo2').wrap('<form>').closest('form').get(0).reset();
    $('#user_photo2').unwrap();
    $("#user-photo2").attr("src","img/default.jpg");

    $.ajax({
      type : "POST",
      dataType:"json",
      url: 'user/show',
      data: {user_id:userid,action:action},
      async: true,
      success:function(data){
        if(data.errors){
          $.each(data.errors, function(index, error){
            $('#form_'+index).addClass('has-error');
            $('#form_'+index).append('<span class="help-block">'+error+'</span>');
          });
        } else if(data.status == "error" || data.status == "warning"){
          // show message
          console.log(data.status, data.message);
        } else {  

          if(action == 'edit'){
            var user=data.user;

            //put user information in inputs
            $("#update-user").attr("userid",user["user_id"]);
            $("#user_full_name2").val(user["user_full_name"]);
            $("#user_phone2").val(user["user_phone"]);
            $("#user_position2").val(user["user_position"]);
            $("#user_location2").val(user["user_location"]);
            $("#user_email2").val(user["user_email"]);
            if(user["user_photo"]==null){
              $("#user-photo2").attr("src", "img/default.jpg");
            }
            else{
              $("#user-photo2").attr("src", "uploads/photo/"+user["user_photo"]);
            }
            $("#user_role2 option").each(function(){
              var role=$(this).val();
              console.log(role+" "+user["role_id"]);
              if(parseInt(role)==parseInt(user["role_id"])){
                $(this).prop("selected","true");                                  
              }
              else{
                $(this).removeAttr("selected");
              }
            });

            /* update user */
            $('#modal2').on('click','#update-user',function(e){
                e.preventDefault();
                if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
                    btn = $(this);
                    btn.addClass('loading');
                    var user_id = btn.attr("userid");
                    $('.alert.alert-danger').removeClass('alert alert-danger');
                    $('.help-block').remove();

                    var formData=new FormData();
                    formData.append("user_full_name",$("#user_full_name2").val());
                    formData.append("user_id",user_id);
                    formData.append("user_phone",$("#user_phone2").val());
                    formData.append("user_position",$("#user_position2").val());
                    formData.append("user_location",$("#user_location2").val());
                    formData.append("user_role_id",$("#user_role2").val());
                    formData.append("user_photo",$("#user_photo2").get(0).files[0]);


                    $.ajax({
                        type : "POST",
                        dataType:"json",
                        url :  'user/update',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data){
                            btn.removeClass('loading');

                            if(data.errors){
                                $.each(data.errors, function(index, error){
                                    $('#form2_'+index).append('<div class="alert alert-danger help-block p-width u-mt-xsmall u-p-xsmall">'+error+'</div>');
                                    $('#'+index+'2').addClass('c-input--danger');
                                });
                            } else if(data.status == "error" || data.status == "warning"){
                              $('#modal2 .o-line').before('<div class="alert alert-danger help-block u-m-small u-p-xsmall">'+data.message+'</div>');

                              setTimeout(function() {
                                $('.help-block').remove();
                              }, 5000);//fin setimeout
                                // show message
                                console.log(data.status, data.message);
                            } else {
                              $('#modal2 .o-line').before('<div class="alert alert-success help-block u-m-small u-p-xsmall">'+data.message+'</div>');

                              $("#users-list").empty();
                              $.each(data.users, function(){
                                var users=$(this);
                                var user=users[0];
                                all_users(user["user_photo"],user["user_full_name"], user["role_name"],user["user_date_added"],user["user_id"]);
                              });

                              setTimeout(function() { 
                                $("#modal2 .c-modal__close").trigger( "click" );
                                $('.help-block').remove();
                              }, 5000);//fin setimeout
                              // show message
                              console.log(data.status, data.message);
                            }
                        }
                    });
                }
            });
          }
          else if(action== 'delete'){
            var user=data.user;
            console.log(user["user_full_name"], user["user_id"]);
            $(".full_name").text(user["user_full_name"]);
            $("#delete-user").attr("userid",user["user_id"]);

            $('#modal3').on('click','#delete-user',function(e){
              e.preventDefault();

              if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
                btn = $(this);
                btn.addClass('loading');
                var user_id = btn.attr("userid");
                
                var formdata = new FormData();
                formdata.append("user_id", user_id);

                $.ajax({
                    type : "POST",
                    dataType:"json",
                    url : 'user/delete',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        btn.removeClass('loading');

                        if(data.status == "error" || data.status == "warning"){
                          $('#modal3 .o-line').before('<div class="alert alert-danger help-block u-m-small u-p-xsmall">'+data.message+'</div>');

                          setTimeout(function() {
                            $('.help-block').remove();
                          }, 5000);//fin setimeout
                            // show message
                            console.log(data.status, data.message);
                        } else {
                          $('#modal3 .o-line').before('<div class="alert alert-success help-block u-m-small u-p-xsmall">'+data.message+'</div>');

                          $("#users-list").empty();
                          $.each(data.users, function(){
                            var users=$(this);
                            var user=users[0];
                            all_users(user["user_photo"],user["user_full_name"], user["role_name"],user["user_date_added"],user["user_id"]);
                          });

                          setTimeout(function() { 
                            $("#modal3 .c-modal__close").trigger( "click" );
                            $('.help-block').remove();
                          }, 5000);//fin setimeout
                          // show message
                          console.log(data.status, data.message);
                        }
                    }
                });
              }
            });

          }
        }
      }
    });
    
});// end get info of selected user studio in modal and update or delete

// add user studio
$("#new-user").on("click",function(e){
  
  $("#user_full_name").val("");
  $("#user_email").val("");
  $("#user_phone").val("");
  $("#user_position").val("");
  $("#user_location").val("");
  var $el = $('#user_photo');
  $el.wrap('<form>').closest('form').get(0).reset();
  $el.unwrap();
  $("#user-photo").attr("src","img/default.jpg");
  //$("#user_photo").get(0).files[0]);

  $("#add-user").on("click",function(e){
      e.preventDefault();
      if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
        btn = $(this);
        btn.addClass('loading');

        $('.alert.alert-danger').removeClass('alert alert-danger');
        $('.help-block').remove();

        var formData=new FormData();
        formData.append("user_full_name",$("#user_full_name").val());
        formData.append("user_email",$("#user_email").val());
        formData.append("user_phone",$("#user_phone").val());
        formData.append("user_position",$("#user_position").val());
        formData.append("user_location",$("#user_location").val());
        formData.append("user_role_id",$("#user_role").val());
        formData.append("user_photo",$("#user_photo").get(0).files[0]);

        $.ajax({
          type : "POST",
          dataType:"json",
          url: 'user/save',
          cache:false,
          contentType: false,
          processData: false,
          data: formData,
          success:function(data){
            
            btn.removeClass('loading');

            if(data.errors){
              $.each(data.errors, function(index, error){
                $('#form_'+index).append('<div class="alert alert-danger help-block p-width u-mt-xsmall u-p-xsmall">'+error+'</div>');
                $('#'+index).addClass('c-input--danger');
              });
            } else if(data.status == "error" || data.status == "warning"){
              $('#modal1 .o-line').before('<div class="alert alert-danger help-block u-m-small u-p-xsmall">'+data.message+'</div>');

              setTimeout(function() {
                $('.help-block').remove();
              }, 5000);//fin setimeout
              // show message
              console.log(data.status, data.message);
            } else {
              $('#modal1 .o-line').before('<div class="alert alert-success help-block u-m-small u-p-xsmall">'+data.message+'</div>');

              $("#users-list").empty();
              $.each(data.users, function(){
                var users=$(this);
                var user=users[0];
                all_users(user["user_photo"],user["user_full_name"], user["role_name"],user["user_date_added"],user["user_id"]);
              });

              setTimeout(function() { 
                $("#modal1 .c-modal__close").trigger( "click" );
                $('.help-block').remove();
              }, 5000);//fin setimeout
              
              console.log(data.status, data.message);
            }
          }
        });
      }
  });
});
//end add user studio