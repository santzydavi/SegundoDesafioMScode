<nav class="navbar navbar-default top-navbar" role="navigation">
			<div class="navbar-header">
				
				<a class="navbar-brand waves-effect waves-dark"  href="http://localhost/mscode/challengetwo/views/admin/dashboard.php"><i class="large material-icons">track_changes</i> <strong>target</strong></a>

				<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
			</div>

			<ul class="nav navbar-top-links navbar-right">
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b><?=$_SESSION['admin']['nome'] ?></b> <i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
		</nav>
		<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="http://localhost/mscode/challengetwo/views/admin/password/alterarSenha.php?i=<?= base64_encode($_SESSION['admin']['id'])?>"><i class="fas fa-unlock"></i> Alterar Senha </a>
			</li>
			<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
			</li>
		</ul>