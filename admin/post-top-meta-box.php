<?php



//Add MetaBox checkbox for top post
add_action('add_meta_boxes_post','nooshin_a_checkbox_top_post');
function nooshin_a_checkbox_top_post($post){
    add_meta_box(
        "nooshin_checkbox_top_post",
        "مقاله برتر",
        "nooshin_checkbox_top_post_handler",
        'post',
        'normal',
        'default');
}
function nooshin_checkbox_top_post_handler($post){
    $nooshin_checkbox_top_post = get_post_meta(
        $post->ID,
        "nooshin_checkbox_top_post",
        true);

echo "
<label for=\"checkbox_top_post\">مقاله برتر را انتخاب کنید</label>
<input type=\"checkbox\" name=\"checkbox_top_post\" 
id=\"checkbox_top_post\" value='yes' ";
if($nooshin_checkbox_top_post=="yes"){
    echo " checked ";
}
echo "  />";


}
add_action('save_post','nooshin_checkbox_top_post_save');
function nooshin_checkbox_top_post_save($post_id){

    if(isset($_POST["checkbox_top_post"]) and $_POST["checkbox_top_post"]=="yes")
        update_post_meta($post_id,'nooshin_checkbox_top_post',$_POST["checkbox_top_post"]);


}