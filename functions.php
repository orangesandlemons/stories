<?php


//add/adapt tables for stories, forum, following etc.
function modify_database_on_start(){
//add story id column to wp_posts. 
//add stories int to wp_users this will be incremented every time they create a story
//so that no duplicates. int should be more than fine

}

//hook for creating the tables when theme is changed.
add_action("after_switch_theme", "modify_database_on_start");

//////////////////////////////////////
///////////////AJAX CALLS/////////////
//////////////////////////////////////


///////Public//////

//get a chapter.

//get more 

///////Protected/////
?>
