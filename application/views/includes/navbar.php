<!-- Navigation -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light py-0">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/logo.png");?>" alt="WiShoes" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href='<?php echo base_url("index.php"); ?>'>Home</a>
            </li>
            <?php
                if(empty($this->session->userdata('email'))){
                    echo "<li class='nav-item'>";
                        echo "<a class='nav-link' href='".site_url('signup')."'>Sign Up</a>";
                    echo "</li>";
                }
                else{
                    echo "<li class='nav-item'>";
                        echo "<a class='nav-link' href='".site_url('cart')."'>My Cart</a>";
                    echo "</li>";

                    echo "<li class='nav-item'>";
                        echo "<a class='nav-link text-danger' href='".site_url('signout')."'>Sign Out</a>";
                    echo "</li>";
                }
            ?>
        </ul>
        <form class="form-inline mr-2 my-2" action="<?php echo site_url('frontend/browse'); ?>" method="POST">
            <div class="input-group no-focus-outline">
              <input class="form-control py-2 border-left-0 border" id="input-search" type="search" name="search" placeholder="Search..." />
              <span class="input-group-append">
                <button class="btn btn-outline-secondary border-left-0 border bg-white" id="btn-search" type="submit" name="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
    </div>
</nav>