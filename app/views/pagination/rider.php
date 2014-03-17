<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
	<div class="templatemo_paging">
		<ul>
			<?php echo $presenter->render(); ?>
		</ul>
		<div class="clear"></div>
	</div>
<?php endif; ?>