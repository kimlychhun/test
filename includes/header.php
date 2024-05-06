<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">SE Shop<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li <?=($page=="home.php"?" class='nav-item active'":"")?>>
							<a class="nav-link"  href="index.php">Home</a>
						</li>
						<li <?=($page=="shop.php"?" class='nav-item active'":"")?>>
							<a class="nav-link" href="index.php?p=shop">Shop</a></li>
						<li <?=($page=="about.php"?" class='nav-item active'":"")?>>
							<a class="nav-link" href="index.php?p=contact">Contact us</a></li>
					</ul>
 
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>