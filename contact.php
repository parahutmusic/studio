<!DOCTYPE HTML>

<html>
	<head>
		<?php include "wg/head.php" ?>
	</head>

	<body>

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<?php include "wg/menu.php" ?>

				<!-- Main -->
					<div id="main">

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>ติดต่อ</h2>
								</header>
								<form action="#" method="post">
									<div>
										<div class="row">
											<div class="6u 12u$(mobile)">
												<input type="text" name="name" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(mobile)">
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="12u$">
												<input type="text" name="subject" placeholder="Subject" />
											</div>
											<div class="12u$">
												<textarea name="message" placeholder="Message" rows="8"></textarea>
											</div>
											<div class="12u$">
												<input type="submit" value="Send Message" />
											</div>
										</div>
									</div>
								</form>
							</article>
					</div>

				

				<!-- Footer -->
					<?php include "wg/footer.php" ?>

			</div>

		<!-- Scripts -->
			<?php include "wg/script.php" ?>

	</body>
</html>