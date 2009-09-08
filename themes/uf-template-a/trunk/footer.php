<div id="footer">
    <div id="siteInformation">
    <h3>Frequently Used Sites</h3>
        <ul>
	    <li><a href="http://news.ufl.edu/">News</a></li>
	    <li><a href="http://calendar.ufl.edu/">Calendar</a></li>
	    <li><a href="http://phonebook.ufl.edu/">Directory</a></li>
	    <li><a href="https://my.ufl.edu/ps/signon.html">MyUFL</a></li>
	    <li><a href="http://www.isis.ufl.edu/">ISIS</a></li>
	    <li><a href="http://www.ufl.edu/websites/">Web Site Listing</a></li>
	    <li><a href="http://campusmap.ufl.edu/">Campus Map</a></li>
	    <li><a href="http://webmail.ufl.edu/">WebMail</a></li>
	    <li><a href="http://www.questions.ufl.edu/">Ask UF</a></li>
	</ul>
<?php if (class_exists('UfGoogleAnalyticsPlugin')): ?>
	<p>This page uses <a href="http://www.google.com/analytics/">Google Analytics</a> (<a href="http://www.google.com/intl/en_ALL/privacypolicy.html">Google Privacy Policy</a>)</p>
<?php endif; ?>
	<h3>General Site Information</h3>
	<ul>
	    <li><a href="http://www.ufl.edu/disability/">Disability Services</a></li>
	    <li><a href="http://www.privacy.ufl.edu/privacystatement.html">Privacy Policy</a></li>
	    <li><a href="http://search.ufl.edu">Search</a></li>
	</ul>
 
   </div>
	<p>&copy; <a href="http://www.ufl.edu/" id="footerHome" title="University of Florida">University of Florida<span></span></a>, Gainesville, FL 32611; (352) 392-3261.</p>
	<p>This page was last updated <?php the_modified_date(); ?>.</p>
</div>



</div><!-- #mainContainer -->
<?php wp_footer(); ?>
</body>
</html>
<!-- <?php echo $wpdb->num_queries; ?> queries. <?php timer_stop(1); ?> seconds. -->
