
//update profile user studio
$("#update-profile").click(function(e){
    e.preventDefault();
    if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
      btn = $(this);
      btn.addClass('loading');

      $('.has-error').removeClass('has-error');
      $('.help-block').remove();

      var formdata=new FormData();

      formdata.append("user_full_name",$("#user_full_name").val());
      formdata.append("user_phone",$("#user_phone").val());
      formdata.append("user_position",$("#user_position").val());
      formdata.append("user_location",$("#user_location").val());
      formdata.append("user_photo",$("#user_photo").get(0).files[0]);
      
      $.ajax({
         type:'POST',
         dataType:"json",
         url:'profile/update',
         contentType: false,
         processData: false,
         data: formdata,
         success:function(data){
            btn.removeClass('loading');

            if(data.errors){
              $.each(data.errors, function(index, error){
                $('#form_'+index).addClass('has-error');
                $('#form_'+index).append('<span class="help-block">'+error+'</span>');
              });
            } else if(data.status == "error" || data.status == "warning"){
              // show message
              console.log(data.status, data.message);
            } else {
              // show message
              var user=data.user;
              $("#user_full_name").val(user["user_full_name"]);
              $("#user_phone").val(user["user_phone"]);
              $("#user_position").val(user["user_position"]);
              $("#user_location").val(user["user_location"]);
              if(user["user_photo"]!=null){
                $("#user_photo").attr("src", "uploads/photo/"+user["user_photo"]);
                $("#photo_header").attr("src", "uploads/photo/"+user["user_photo"]);
              }else{
                $("#user_photo").attr("src", "img/default.jpg");
                $("#photo_header").attr("src", "img/default.jpg");
              }
              $("#full_name_header").text( user["user_full_name"]);
              
              console.log(data.status, data.message);
            }
         }
      });
    }
}); //end update profile user studio


//update password profile user studio
$("#update-password").click(function(e){

    e.preventDefault();

    if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
      btn = $(this);
      btn.addClass('loading');

      $('.has-error').removeClass('has-error');
      $('.help-block').remove();

      var formData=new FormData();
      formData.append("current_password",$("#current_password").val());
      formData.append("password1",$("#password1").val());
      formData.append("password2",$("#password2").val());
      $.ajax({
        type:'POST',
        dataType:"json",
        url:'updatepassword',
        contentType: false,
        processData: false,
        data: formData,
        success:function(data){
          btn.removeClass('loading');
          if(data.errors){
            $.each(data.errors, function(index, error){
              $('#form_'+index).addClass('has-error');
              $('#form_'+index).append('<span class="help-block">'+error+'</span>');
            });
          } else if(data.status == "error" || data.status == "warning"){
            // show message
            console.log(data.status, data.message);
          } else {
            // show message
            console.log(data.status, data.message);
          }
        }
      });
    }
}); //end update password profile of user studio

// upload user photo
//function upload photo
function ekUpload() {
   function Init() {

      console.log("Upload Initialised");

      var fileSelect = document.getElementById('user_photo'),
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

      fileDrag.className = (e.type === 'dragover' ? 'hover' : ' file-upload');
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
         document.getElementById('user-photo').classList.remove("hidden");
         document.getElementById('user-photo').src = URL.createObjectURL(file);
      }
      else {
         document.getElementById('user-photo').classList.add("hidden");
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
ekUpload();

// delete avatar
$('#delete_avatar').on('click', function(){
  $('#user-photo').attr('src','img/default.jpg');
  }
);