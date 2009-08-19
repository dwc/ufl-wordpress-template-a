<?php
function uf_page_list() {
    global $post;

    $parents = _uf_get_parent_pages();

    foreach($parents as $parent) {

        // If the current page is a child of a parent page
        if($parent->ID == $post->post_parent) {
?>
            <li id="activeSec"><a href="<?php echo get_page_link($parent->ID); ?>"><?php echo $parent->post_title; ?></a>
                <ul id="secNav">
<?php
            uf_child_page_list($parent, $post);
?>
                </ul>
            </li>
<?php
	}

        // If the current page is a parent page
        elseif($parent->ID == $post->ID) {
?>
            <li id="active"><?php echo $parent->post_title; ?>
                <ul id="secNav">
<?php
	   uf_child_page_list($parent);
?>
                </ul>
            </li>
<?php
        }

        // If it's a news post or category and not a page
	// This isn't showing up right for popsts
        elseif((is_category() || is_single()) && $parent->post_title == "News") {
?>
            <li id="activeSec"><a href="<?php echo get_page_link($parent->ID); ?>"><?php echo $parent->post_title; ?></a>
                <ul id="secNav">
<?php
            uf_child_page_list($parent, $post);
?>
                </ul>
            </li>
<?php
        }

        // Default for non-selected pages
        else {
?>
            <li><a href="<?php echo get_page_link($parent->ID); ?>"><?php echo $parent->post_title; ?></a></li>
<?php
	}
    }
}

function uf_child_page_list($parent = -1, $post = -1) {
    $children = _uf_get_child_pages($parent->ID);

        // List child pages
        foreach($children as $child) {
	    if($child->ID == $post->ID) {
?>
 	        <li id="secActive"><?php echo $child->post_title; ?></li>
<?php
	    }
	    else {
?>
               <li><a href="<?php echo get_page_link($child->ID); ?>"><?php echo $child->post_title; ?></a></li>
<?php
	    }
	}

	// List child posts for news template pages only
	if(is_category() || is_single() || _parent_is_news_page()) {
	       $categories = get_categories('type=post');

               if(is_category()) {
                   foreach($categories as $category) {
		     if(in_category($category->cat_ID)) {
?>
		   <li id="secActive"><?php echo $category->cat_name; ?></li>
<?php
		     }
		     else {
?>
		   <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?></a></li>
<?php
		     }
		   }
	       }

               elseif(is_single()) {
                   foreach($categories as $category) {
		     if(in_category($category->cat_ID, $post->ID)) {
?>
		       <li id="secActive"><?php echo $category->cat_name; ?></li>
<?php
		     }
		     else {
?>
		   <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?></a></li>
<?php
		     }
		   }               
	       }

               elseif(_parent_is_news_page()) {
                   foreach($categories as $category) {
?>
		   <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?></a></li>
<?php
		   }               
	       }
	}
}

function _uf_get_parent_pages() {
    $result = null;

    $result = get_pages('sort_column=menu_order&parent=0');

    return $result;
}

function _uf_get_child_pages($parent_ID) {
    $result = null;

    $result = get_pages('sort_column=menu_order&child_of=' . $parent_ID);

    return $result;
}

function _parent_is_news_page() {
    $result = false;

    $result = is_page_template('news.php');

    return $result;
}

?>