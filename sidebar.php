<div class="logo"></div>
<div class="sidebar-nav">
	<ul class="nav nav-list">
		<?php $categories = get_categories();
 			foreach($categories as $category) { 
			echo '<li>
					<a href="' .get_category_link($category->term_id ). '">
						<div>' .$category->name. '
							<span class="badge">' 
								.$category->count.'
							</span>
						</div>
					</a>
				</li>';
 		} ?>
	</ul>
</div>
