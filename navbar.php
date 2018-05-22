<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs" href="#">Fitmart</a>
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="index.php">Home</a></li>
					<li ><a href="berita.php">Berita</a></li>
					<li ><a href="kelola.php">Kelola Berita</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				<!-- jika belum login -->
				<?php if (isset($_SESSION['berita'])): ?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="member.php">Member</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				<?php endif ?>
				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>