
</div>

    <script src="js/jquery.min.js"></script>
     
    <script src="tinymce/tinymce.min.js"></script>
<!--attach_1-->
<script>
    $(document).ready(function(){
        $('#btn_upload_1').click(function(){

            var fd = new FormData();
            var files = $('#attach_1')[0].files[0];
            fd.append('attach_1',files);

            // AJAX request
            $.ajax({
                url: 'attach_1.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_1').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_2-->
<script>
    $(document).ready(function(){
        $('#btn_upload_2').click(function(){

            var fd = new FormData();
            var files = $('#attach_2')[0].files[0];
            fd.append('attach_2',files);

            // AJAX request
            $.ajax({
                url: 'attach_2.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_2').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_3-->
<script>
    $(document).ready(function(){
        $('#btn_upload_3').click(function(){

            var fd = new FormData();
            var files = $('#attach_3')[0].files[0];
            fd.append('attach_3',files);

            // AJAX request
            $.ajax({
                url: 'attach_3.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_3').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_4-->
<script>
    $(document).ready(function(){
        $('#btn_upload_4').click(function(){

            var fd = new FormData();
            var files = $('#attach_4')[0].files[0];
            fd.append('attach_4',files);

            // AJAX request
            $.ajax({
                url: 'attach_4.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_4').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_5-->
<script>
    $(document).ready(function(){
        $('#btn_upload_5').click(function(){

            var fd = new FormData();
            var files = $('#attach_5')[0].files[0];
            fd.append('attach_5',files);

            // AJAX request
            $.ajax({
                url: 'attach_5.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_5').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_6-->
<script>
    $(document).ready(function(){
        $('#btn_upload_6').click(function(){

            var fd = new FormData();
            var files = $('#attach_6')[0].files[0];
            fd.append('attach_6',files);

            // AJAX request
            $.ajax({
                url: 'attach_6.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_6').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_7-->
<script>
    $(document).ready(function(){
        $('#btn_upload_7').click(function(){

            var fd = new FormData();
            var files = $('#attach_7')[0].files[0];
            fd.append('attach_7',files);

            // AJAX request
            $.ajax({
                url: 'attach_7.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_7').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_8-->
<script>
    $(document).ready(function(){
        $('#btn_upload_8').click(function(){

            var fd = new FormData();
            var files = $('#attach_8')[0].files[0];
            fd.append('attach_8',files);

            // AJAX request
            $.ajax({
                url: 'attach_8.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_8').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_9-->
<script>
    $(document).ready(function(){
        $('#btn_upload_9').click(function(){

            var fd = new FormData();
            var files = $('#attach_9')[0].files[0];
            fd.append('attach_9',files);

            // AJAX request
            $.ajax({
                url: 'attach_9.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_9').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_10-->
<script>
    $(document).ready(function(){
        $('#btn_upload_10').click(function(){

            var fd = new FormData();
            var files = $('#attach_10')[0].files[0];
            fd.append('attach_10',files);

            // AJAX request
            $.ajax({
                url: 'attach_10.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_10').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_11-->
<script>
    $(document).ready(function(){
        $('#btn_upload_11').click(function(){

            var fd = new FormData();
            var files = $('#attach_11')[0].files[0];
            fd.append('attach_11',files);

            // AJAX request
            $.ajax({
                url: 'attach_11.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_11').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_12-->
<script>
    $(document).ready(function(){
        $('#btn_upload_12').click(function(){

            var fd = new FormData();
            var files = $('#attach_12')[0].files[0];
            fd.append('attach_12',files);

            // AJAX request
            $.ajax({
                url: 'attach_12.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_12').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_13-->
<script>
    $(document).ready(function(){
        $('#btn_upload_13').click(function(){

            var fd = new FormData();
            var files = $('#attach_13')[0].files[0];
            fd.append('attach_13',files);

            // AJAX request
            $.ajax({
                url: 'attach_13.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_13').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_14-->
<script>
    $(document).ready(function(){
        $('#btn_upload_14').click(function(){

            var fd = new FormData();
            var files = $('#attach_14')[0].files[0];
            fd.append('attach_14',files);

            // AJAX request
            $.ajax({
                url: 'attach_14.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_14').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_15-->
<script>
    $(document).ready(function(){
        $('#btn_upload_15').click(function(){

            var fd = new FormData();
            var files = $('#attach_15')[0].files[0];
            fd.append('attach_15',files);

            // AJAX request
            $.ajax({
                url: 'attach_15.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_15').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_16-->
<script>
    $(document).ready(function(){
        $('#btn_upload_16').click(function(){

            var fd = new FormData();
            var files = $('#attach_16')[0].files[0];
            fd.append('attach_16',files);

            // AJAX request
            $.ajax({
                url: 'attach_16.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_16').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_17-->
<script>
    $(document).ready(function(){
        $('#btn_upload_17').click(function(){

            var fd = new FormData();
            var files = $('#attach_17')[0].files[0];
            fd.append('attach_17',files);

            // AJAX request
            $.ajax({
                url: 'attach_17.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_17').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_18-->
<script>
    $(document).ready(function(){
        $('#btn_upload_18').click(function(){

            var fd = new FormData();
            var files = $('#attach_18')[0].files[0];
            fd.append('attach_18',files);

            // AJAX request
            $.ajax({
                url: 'attach_18.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_18').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_19-->
<script>
    $(document).ready(function(){
        $('#btn_upload_19').click(function(){

            var fd = new FormData();
            var files = $('#attach_19')[0].files[0];
            fd.append('attach_19',files);

            // AJAX request
            $.ajax({
                url: 'attach_19.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_19').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>
<!--attach_20-->
<script>
    $(document).ready(function(){
        $('#btn_upload_20').click(function(){

            var fd = new FormData();
            var files = $('#attach_20')[0].files[0];
            fd.append('attach_20',files);

            // AJAX request
            $.ajax({
                url: 'attach_20.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // Show image preview
                        $('#preview_20').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                    }else{
                        alert('file not uploaded');
                    }
                }
            });
        });
    });
</script>


<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/form.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="../js/site_js.min.js"></script>
<script src="../js/site.js"></script>
<footer class="text-center" style="margin-top: 50px">
    <div class="row">
        <div class="text-center">
            <p>Copyright © <a href="http://www.asrt.sci.eg/ar/"><strong>BSU-TICO</strong></a> All rights reserved</p>
        </div>
    </div>
</footer>


  </body>
</html>