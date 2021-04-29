<?php
$titlePage = 'Connexion';
$pageFileName = basename(__FILE__);
require_once 'includes/top.php';
?>
<section class="container">
	<div class="panel panel-primary">
		<div class="panel-heading"><?= $titlePage ?></div>
		<div class="custom-content login-container center-block">
			<div class="text-center text-muted"><strong>Connectez-vous</strong></div>
			<div class="login-form center-block">
				<form method="post" action="login_submit.php">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="username">Nom d'utilisateur<span class="text-warning">*</span></label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur Snapchat" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="password">Mot de passe<span class="text-warning">*</span></label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe Snapchat" required />
							</div>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-md-offset-2 col-md-10">
							<div class="checkbox">
								<label><input type="checkbox" name="remember" /> Se souvenir de moi</label>
							</div>
						</div>
					</div> -->
					<div class="row">
						<div class="col-md-12">
							<input type="submit" class="btn btn-primary btn-block" value="Connexion &raquo;" />
						</div>
					</div>
				</form>
			</div>
			<div class="alert alert-info no-margin-bottom">Exemple <strong>blabla</strong> blabla</div>
		</div>
	</div>
</section>
<?php require_once 'includes/bottom.php'; ?>