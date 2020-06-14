<nav class="navbar navbar-inverse">
	<div class="container">

	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				<?php echo lang( '__BRAND' ); ?>
			</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<a href="#">
						<?php echo lang( '__CATEGORIES' ); ?>
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false">
						<?php echo lang( '__USER' ); ?> 
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">
								<?php echo lang( '__ENDIT_PROFILE' ); ?>
							</a>
						</li>
						<li>
							<a href="#">
								<?php echo lang( '__SETTINGS' ); ?>
							</a>
						</li>
						<li role="separator" class="divider"></li>
						<li>
							<a href="#">
								<?php echo lang( '__LOGOUT' ); ?>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>