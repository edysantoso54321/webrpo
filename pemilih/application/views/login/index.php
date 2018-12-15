<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="login/css/style.css">
  <script src='login/js/jquery.min.js'></script>
  <script type="text/javascript" class="init">
    
    $(document).ready(function(){
      <?php 
        if ($this->session->flashdata('message'))
          echo "alert('".$this->session->flashdata('message')."');";
       ?>
          $('.form').find('input, textarea').on('keyup blur focus', function (e) {
            
            var $this = $(this),
                label = $this.prev('label');

              if (e.type === 'keyup') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                  } else {
                    label.addClass('active highlight');
                  }
              } else if (e.type === 'blur') {
                if( $this.val() === '' ) {
                  label.removeClass('active highlight'); 
                } else {
                  label.removeClass('highlight');   
                }   
              } else if (e.type === 'focus') {
                
                if( $this.val() === '' ) {
                  label.removeClass('highlight'); 
                } 
                else if( $this.val() !== '' ) {
                  label.addClass('highlight');
                }
              }

          });



          $('.tab a').on('click', function (e) {
            
            e.preventDefault();
            
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
            
            target = $(this).attr('href');

            $('.tab-content > div').not(target).hide();
            
            $(target).fadeIn(600);
            
          });
    });

  </script>
</head>

<body>
  <div class="form">
      
     <div id="login"> 
          <h1>Selamat Datang</h1>
          
          <form action="http://localhost/pemilih/main/login" id="masuk" method="post">
          
            <div class="field-wrap">
            <label>
              NO KTP<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="noktp"/>
          </div>
          
          <div class="field-wrap">
            <label>
              NAMA<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="nama"/>
          </div>
          
          <p class="forgot"><a href="#"></a></p>
          
          <button type="submit" class="button button-block" id="_login"/>Masuk</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</body>

</html>
