<?php


//add/adapt tables for stories, forum, following etc.
function add_tables(){

//create stories table, link to post id, and use that to find story, and link all related?
//or always search by story?
//which means : foreign key: post_id, story_id, position. at very least. 

}

//hook for creating the tables when theme is changed.
add_action("after_switch_theme", "add_tables");
?>