<div class="sidebar">
	<div id="categories-section">
		<h3 style="padding: 20px;background: black;color: white;"><?php _e('Categories'); ?></h3>
		<ul style="padding: 10px;"><?php wp_list_cats('sort_column=name&optioncount=1&hierachical=0'); ?></ul>
	</div>
	<div id="archives-section">
		<h3 style="padding: 20px;background: black;color: white;"><?php _e('Archives'); ?></h3>
		<ul style="padding: 10px;"><?php wp_get_archives('type=monthly'); ?></ul>
	</div>
</div>