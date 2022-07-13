<?php
$content = [
	"title" => "Add new campaign | Redirect Campaign Tool",
	"description" => "add new campaign for public use",
];
?>
<?php include("header.php"); ?>
<main class="login">
	<div class="container">
		<div class="row align-items-center bg-white vh-100">
			<div class="col-6 m-auto card px-5 py-2">
				<h1 class="fs-2 mt-3">Add New Campaign</h1>
				<p>This campaign will be used for promotion</p>
				<form action="">
					<div class="mb-3 mt-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					</div>
					<div class="mb-3">
						<label for="pwd" class="form-label">Password:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
					</div>
					<div class="form-check mb-3">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="remember"> Remember me
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</main>
<?php include("footer.php"); ?>