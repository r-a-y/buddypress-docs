<?php $folders = bp_docs_get_folders( 'display=flat' ); ?>
<?php $walker = new BP_Docs_Folder_Manage_Walker(); ?>

<?php $f = $walker->walk( $folders, 10, array( 'foo' => 'bar' ) ); ?>

<ul class="docs-folder-manage">
	<?php echo $f ?>
</ul>