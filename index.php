<?php include 'content/common/header.php'; ?>

<div id="content-container" class="container">
	<div class="row">

		<?php include 'content/contact-modal.php'; ?>
		<?php include 'content/slider.php'; ?>
		<?php include 'content/info.php'; ?>
		<?php include_once('gallery/resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('gallery/gallery-images'); ?>

	</div><!--.row-->
</div><!--#content-container-->

<?php include 'content/common/footer.php'; ?>