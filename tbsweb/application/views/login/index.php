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
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Daftar</a></li>
        <li class="tab"><a href="#login">Masuk</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Pendaftaran</h1>
          
          <form method="post" action="http://localhost/tbsweb/login/daftar">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nama Depan<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='namaa'/>
            </div>
        
            <div class="field-wrap">
              <label>
                Nama Belakang<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='namab'/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Alamat Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Kata Sandi<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='pass'/>
          </div>
          
          <button type="submit" class="button button-block" id="tomboldaftar"/>Daftar</button>
          
          </form>

        </div>
        
        <div id="login"> 
          <h1>Selamat Datang</h1>
          
          <form action="http://localhost/tbsweb/login/signin" id="masuk" method="post">
          
            <div class="field-wrap">
            <label>
              Alamat Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Kata Sandi<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pass"/>
          </div>
          
          <p class="forgot"><a href="#">Lupa Kata Sandi?</a></p>
          
          <button type="submit" class="button button-block" id="_login"/>Masuk</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</body>

</html>
