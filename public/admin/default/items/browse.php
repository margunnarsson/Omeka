<?php foreach( $items as $key => $item ): ?>
	<?php  echo ($key+1+$offset);?>) <?php echo $item->title; ?><br/>
<?php endforeach; ?>