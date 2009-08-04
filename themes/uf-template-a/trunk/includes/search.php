<?php if (class_exists('UfSearchPlugin')): ?>
	<form action="<?php echo htmlspecialchars(uf_plugin_framework_uri()); ?>" method="get" name="search" id="search">
<?php     uf_plugin_framework_form_fields('uf-search', 'search', "\t\t"); ?>
		<label for="source">
			<select id="source" name="source" onchange="document.getElementById('searchbox').focus()">
<?php     foreach ($sources = uf_search_sources() as $key => $source): ?>
				<option value="<?php echo htmlspecialchars($key); ?>"<?php echo ($key == get_option('uf_search_default_source_name') ? ' selected="selected"' : ''); ?>><?php echo htmlspecialchars($source->name); ?></option>
<?php     endforeach; ?>
			</select>
		</label>
		<label for="searchbox">
			<input name="query" id="searchbox" type="text" size="20" value="<?php echo (uf_search_query() ? htmlspecialchars(uf_search_query()) : 'Search'); ?>" alt="Search" onfocus="select();" />
		</label>
		<input name="image" id="image" type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/searchEnter.gif" alt="Go" />
	</form>
<?php endif; ?>
