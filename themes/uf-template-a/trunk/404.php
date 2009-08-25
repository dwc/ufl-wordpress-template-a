<?php get_header(); ?>

	<div id="content">
		<div id="secHeader" title="Not Found"><span></span><h2>Not Found</h2></div>
<?php if (is_search()): ?>
		<h3>Your search - <code><?php the_search_query(); ?></code> - did not match any articles.</h3>

		<h3>Suggestions:</h3>
		<ul>
			<li>Make sure all words are spelled correctly.</li>
			<li>Try different keywords.</li>
			<li>Try more general keywords.</li>
<?php     if (function_exists('uf_search_uri') and strpos(get_search_query(), '"') !== false): ?>
			<li><a href="<?php echo htmlspecialchars(uf_search_uri(str_replace('"', '', get_search_query()))); ?>">Repeat your search</a> without the quotes.</li>
<?php     endif; ?>
		</ul>
<?php else: ?>
                <h3>Not Found</h3>
		<p>Unfortunately, the page you were trying to retrieve was not found. Please try one of the following.</p>
<?php endif; ?>

		<h3>Try the Home Page</h3>
		<p>If you are looking for recent news or information about our organization, try the <a href="<?php bloginfo('url'); ?>">home page</a>. Otherwise, start at the <a href="http://www.ufl.edu/">UF Home Page</a>.</p>

<!--
		<h3>Browse the Archives</h3>
		<p>If you are looking for articles on a specific topic or from a specific time period, try browsing the archives.</p>
-->
		<h3>Search</h3>
		<p>Use the search box near the top of the page to locate the information you want. Tips for searching:</p>
		<ul>
			<li>Enter just a few descriptive words for your initial search and refine by adding terms, if necessary.</li>
			<li>If you are searching for news articles, try searching by subject area. For example, <code>medical research</code>.</li>
		</ul>

	</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
