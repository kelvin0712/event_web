 <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark  ">

     <!--Logo-->
      <a class="navbar-brand" href="#">
          <img src="assets/image/Total-logo-earth.png" height="50" alt="Event"/>
      </a>

     <!--Button for mobile-->
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

    <div class="collapse navbar-collapse txt1" id="navbarSupportedContent">
        <ul class="navbar-nav mr-4 ">
              <li class="nav-item ">
                  <a class="nav-link base-nav trans-0-1" href="<?= base_url() ?>">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link base-nav trans-0-1" href="<?= base_url('registration') ?>">Registration</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link base-nav trans-0-1" href="<?= base_url('login') ?>">Login</a>
              </li>

          
        </ul>
    </div>
 </nav>