<?php



class Nooshin_a_social_Logo_Widget extends WP_Widget {
    /**
     * Widget For View  Social Logo With Links
     **/
    public function __construct() {
        $widget_options = array(
            'classname' => 'nooshin_a_social_Logo_widget',
            'description' => 'این ابزارک  آدرس های شبکه های اجتماعی نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_social_Logo_widget', 'نمایش لوگوی شبکه اجتماعی', $widget_options );
    }
    public function widget( $args, $instance ) {
        $defaults = array(
            "content"=>"محتوای مرتبط با لوگو را وارد کنید",
            'url'   	=> '#',
            'target'	=> '_self',
            'icon'=>'fab fa-telegram',
            'shake'=>'no'
        );

        $instance = wp_parse_args($instance,$defaults);

        $content = $instance['content'];
        $url =  $instance['url'];
        $target =  $instance['target'];
        $icon =  $instance['icon'];
        $shake = $instance['shake'];

        $result = "<li class=\"mr-2\">";

        if($shake=="yes"){
            $result = "<li class=\"mr-2 wow shake\"  data-wow-iteration=\"2\" data-wow-duration=\"2s\">";
        }

        echo $result ."<a data-toggle=\"tooltip\" target=\"{$target}\" title=\"{$content}\" href=\"{$url}\"><i class=\"{$icon}\"></i> </a> </li>";

    }
    public function form( $instance ) {
        $defaults = array(
            "content"=>"محتوای مرتبط با لوگو را وارد کنید",
            'url'   	=> '#',
            'target'	=> '_self',
            'icon'=>'fab fa-telegram',
            'shake'=>'no'
        );

        $instance = wp_parse_args($instance,$defaults);

        $content = apply_filters( 'widget_title', $instance[ 'content' ] );
        $url =  $instance['url'];
        $target =  $instance['target'];
        $icon =  $instance['icon'];
        $shake =  $instance['shake'];

        ?>


        <p>
            <label for="<?php echo $this->get_field_id( 'content' ); ?>"> متن: </label>
            <input  type="text"  id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" value="<?php echo esc_attr( $content ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'url' ); ?>"> لینک: </label>
            <input type="text" title="آدرس اینترنتی مورد نظر را وارد کنید" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" value="<?php echo esc_attr( $url ); ?>" />
        </p>


        <p>
            <label for="<?php echo $this->get_field_id( 'target' ); ?>">محل بازشدن صفحه:</label>
            <select id="<?php echo $this->get_field_id( 'target' ); ?>" name="<?php echo $this->get_field_name( 'target' ); ?>">

                <option value="_self" <?php  if(esc_attr( $target )=="_self"){ echo " selected=\"selected\" ";}?>>
                    صفحه جاری
                </option>

                <option value="_blank" <?php  if(esc_attr( $target )=="_blank"){ echo " selected=\"selected\" "; }?>>
                    صفحه جدید
                </option>


            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'icon' ); ?>">آیکون:</label>
            <select id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>">

                <option value="fa  fa-envelope" <?php  if(esc_attr( $icon )=="fa  fa-envelope"){ echo " selected=\"selected\" ";}?>>
                    ایمیل
                </option>

                <option value="fa  fa-phone" <?php  if(esc_attr( $icon )=="fa  fa-phone"){ echo " selected=\"selected\" "; }?>>
                    تلفن
                </option>
                <option value="fa  fa-fax" <?php  if(esc_attr( $icon )=="fa  fa-fax"){ echo " selected=\"selected\" "; }?>>
                    فکس
                </option>

                <option value="fab fa-twitter" <?php  if(esc_attr( $icon )=="fab fa-twitter"){ echo " selected=\"selected\" ";}?>>
                    توییتر
                </option>

                <option value="fab fa-facebook" <?php  if(esc_attr( $icon )=="fab fa-facebook"){ echo " selected=\"selected\" "; }?>>
                    فیسبوک
                </option>

                <option value="fab fa-instagram" <?php  if(esc_attr( $icon )=="fab fa-instagram"){ echo " selected=\"selected\" ";}?>>
                    اینستاگرام
                </option>

                <option value="fab fa-google-plus" <?php  if(esc_attr( $icon )=="fab fa-google-plus"){ echo " selected=\"selected\" "; }?>>
                    گوگل پلاس
                </option>

                <option value="fab fa-telegram" <?php  if(esc_attr( $icon )=="fab fa-telegram"){ echo " selected=\"selected\" ";}?>>
                    تلگرام
                </option>


            </select>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'shake' ); ?>">تکان خوردن لوگو:</label>
            <select id="<?php echo $this->get_field_id( 'shake' ); ?>" name="<?php echo $this->get_field_name( 'shake' ); ?>">

                <option value="no" <?php  if(esc_attr( $shake )=="no"){ echo " selected=\"selected\" ";}?>>
                    خیر
                </option>

                <option value="yes" <?php  if(esc_attr( $shake )=="yes"){ echo " selected=\"selected\" "; }?>>
                    بله
                </option>


            </select>
        </p>
        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'content' ] = strip_tags( $new_instance[ 'content' ] );
        $instance[ 'url' ] = strip_tags( $new_instance[ 'url' ] );
        $instance[ 'target' ] = strip_tags( $new_instance[ 'target' ] );
        $instance[ 'icon' ] = strip_tags( $new_instance[ 'icon' ] );
        $instance[ 'shake' ] = strip_tags( $new_instance[ 'shake' ] );
        return $instance;
    }


}

class Nooshin_a_Last_Archive_Widget extends WP_Widget {
    /**
     * Widget For View  Last Archive  with Awesome icons
     **/
    public function __construct() {
        $widget_options = array(
            'classname' => 'nooshin_a_last_archive_widget',
            'description' => 'این ابزارک آخرین آرشیو  مقالات را با آیکون مناسب نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_last_archive_widget', 'آرشیو  مقالات', $widget_options );
    }
    public function widget( $args, $instance ) {
        $defaults = array(
            "title"=>"آرشیو مقالات",
            "type"=>"monthly",
            "limit"=>"4"
        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $type =  $instance['type'];
        $limit =  $instance['limit'];
        global $nooshin_a_theme_default;


        $args = $nooshin_a_theme_default->get_widgets_default_html_css();
        echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title'];

        $args_archive = array(
            'type'            => $type,
            'limit'           => $limit,
            'format'          => 'html',
            'before'          => '<i class="fa fa-archive fa-1x mr-1"></i>',
            'after'           => '',
            'show_post_count' => false,
            'echo'            => 1,
            'order'           => 'DESC',
            'post_type'     => 'post'
        );
        wp_get_archives( $args_archive );

        echo $args['after_widget'];
    }
    public function form( $instance ) {
        $defaults = array(
            "title"=>"آرشیو مقالات",
            "type"=>"monthly",
            "limit"=>"4"
        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $type =  $instance['type'];
        $limit =  $instance['limit'];

        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">عنوان:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'type' ); ?>">دسته بندی زمان:</label>
            <select id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>">

                <option value="daily" <?php  if(esc_attr( $type )=="daily"){ echo " selected=\"selected\" ";}?>>
                    روزانه
                </option>

                <option value="weekly" <?php  if(esc_attr( $type )=="weekly"){ echo " selected=\"selected\" "; }?>>
                    هفتگی
                </option>

                <option value="monthly" <?php if(esc_attr( $type )=="monthly"){echo " selected=\"selected\" ";}?>>
                    ماهانه
                </option>

                <option value="yearly" <?php if(esc_attr( $type )=="yearly"){ echo " selected=\"selected\" ";  }?>>
                    سالانه
                </option>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'limit' ); ?>">تعداد ردیف نمایش:</label>
            <input type="number" step="1" id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>" value="<?php echo esc_attr( $limit ); ?>" />
        </p>
        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        $instance[ 'type' ] = strip_tags( $new_instance[ 'type' ] );
        $instance[ 'limit' ] = strip_tags( $new_instance[ 'limit' ] );
        return $instance;
    }


}

class Nooshin_a_Last_Comment_Widget extends WP_Widget {
    /**
     * Widget For View  Last Comments  with Awesome icons
     **/
    public function __construct() {
        $widget_options = array(
            'classname' => 'nooshin_a_last_comments_widget',
            'description' => 'این ابزارک آخرین نظرات را با آیکون مناسب نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_last_comments_widget', 'آخرین نظرات', $widget_options );
    }
    public function widget( $args, $instance ) {
        $defaults = array(
            "title"=>"آخرین نظرات",
            "number"=>"4"
        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $number =  $instance['number'];
        global $nooshin_a_theme_default;


        $args = $nooshin_a_theme_default->get_widgets_default_html_css();
        echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title'];

        $comments = get_comments('status=approve&number='.strip_tags($number));
        if ($comments) {
            foreach ($comments as $comment) {

                //Print Comment icon & Author Avatar
                echo '<li><i class="fa fa-comment fa-1x mr-1"></i>
        <a href="' . get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '" title="' . $comment->comment_author . ' | ' . get_the_title($comment->comment_post_ID) .'">'. get_avatar($comment->comment_author_email, 25)."::" ;

                $comment_string = $comment->comment_content;

                //Print 20 Max Character of Comments.Use mb_substr for utf-8
                $comment_excerpt = mb_substr($comment_string, 0, 20);
                echo $comment_excerpt;


                if (strlen($comment_excerpt) > 25) {
                    echo ' ...';
//                echo do_shortcode("[get_menu  menu=\"Main Menu\" [/get_menu]");
                }

                echo '</a></li>';
            }
        }
        echo $args['after_widget'];
    }
    public function form( $instance ) {
        $defaults = array(
            "title"=>"آخرین نظرات",
            "number"=>"4"
        );


        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $number =  $instance['number'];

        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">عنوان:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <label for="<?php echo $this->get_field_id( 'number' ); ?>">تعداد ردیف نمایش:</label>
        <input type="number" step="1" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo esc_attr( $number ); ?>" />
        </p>
        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        $instance[ 'number' ] = strip_tags( $new_instance[ 'number' ] );
        return $instance;
    }


}

class Nooshin_a_Last_Post_Widget extends WP_Widget {
    /**
     * Widget For View  Last Posts  with Awesome icons
     **/
    public function __construct() {
        $widget_options = array(
            'classname' => 'nooshin_a_last_post_widget',
            'description' => 'این ابزارک آخرین آرشیو  مقالات را با آیکون مناسب نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_last_post_widget', 'آخرین مقالات', $widget_options );
    }
    public function widget( $args, $instance ) {
        $defaults = array(
            "title"=>"آخرین مقالات",
            "numberposts"=>"4"
        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $numberposts =  $instance['numberposts'];

        global $nooshin_a_theme_default;
        $args = $nooshin_a_theme_default->get_widgets_default_html_css();


        echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title'];

        $args_recent_posts = array(
            'numberposts' => $numberposts,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true
        );
        $recent_posts = wp_get_recent_posts($args_recent_posts);
        foreach ($recent_posts as $recent  ){

            echo "<li><i class='fa fa-newspaper fa-1x mr-1'></i><a href='".get_permalink($recent["ID"])."'>";

            $post_title_excerpt = mb_substr($recent["post_title"], 0, 50);
            echo $post_title_excerpt;

            if (strlen($post_title_excerpt) > 55) {
                echo ' ...';
            }
            echo "  </a></li>";
        }
        echo $args['after_widget'];
    }
    public function form( $instance ) {
        $defaults = array(
            "title"=>"آخرین مقالات",
            "numberposts"=>"4"
        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $numberposts =  $instance['numberposts'];

        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">عنوان:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'numberposts' ); ?>">تعداد ردیف نمایش:</label>
            <input type="number" step="1" id="<?php echo $this->get_field_id( 'numberposts' ); ?>" name="<?php echo $this->get_field_name( 'numberposts' ); ?>" value="<?php echo esc_attr( $numberposts ); ?>" />
        </p>
        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        $instance[ 'numberposts' ] = strip_tags( $new_instance[ 'numberposts' ] );
        return $instance;
    }


}

class Nooshin_a_content_icon_Widget extends WP_Widget {
    /**
     * Widget For View  Content  with Awesome icons
     **/
    public function __construct() {
        $widget_options = array(
            'classname' => 'nooshin_a_content_icon_widget',
            'description' => 'این ابزارک متن را با آیکون مناسب نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_content_icon_widget', 'نمایش متن با آیکون', $widget_options );
    }
    public function widget( $args, $instance ) {
        $defaults = array(
            "content"=>"محتوای مورد نظر را وارد کنید",
            'url'   	=> '#',
            'target'	=> '_self',
            'icon'=>'fab fa-telegram',
        );

        $instance = wp_parse_args($instance,$defaults);

        $content = $instance['content'];
        $url =  $instance['url'];
        $target =  $instance['target'];
        $icon =  $instance['icon'];

        global $nooshin_a_theme_default;
        $args = $nooshin_a_theme_default->get_widgets_default_html_css();


        echo do_shortcode("[nooshin_a_text_icon url='".$url."' target='".$target."' icon='".$icon."']".$content."[/nooshin_a_text_icon]");


    }
    public function form( $instance ) {
        $defaults = array(
            "content"=>"متن جدید",
            'url'   	=> '#',
            'target'	=> '_self',
            'icon'=>'fab fa-telegram',
        );

        $instance = wp_parse_args($instance,$defaults);

        $content = apply_filters( 'widget_title', $instance[ 'content' ] );
        $url =  $instance['url'];
        $target =  $instance['target'];
        $icon =  $instance['icon'];

        ?>


        <p>
            <label for="<?php echo $this->get_field_id( 'content' ); ?>"> متن: </label>
            <input  type="text"  id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" value="<?php echo esc_attr( $content ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'url' ); ?>"> لینک: </label>
            <input type="text" title="آدرس اینترنتی مورد نظر را وارد کنید" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" value="<?php echo esc_attr( $url ); ?>" />
        </p>


        <p>
            <label for="<?php echo $this->get_field_id( 'target' ); ?>">محل بازشدن صفحه:</label>
            <select id="<?php echo $this->get_field_id( 'target' ); ?>" name="<?php echo $this->get_field_name( 'target' ); ?>">

                <option value="_self" <?php  if(esc_attr( $target )=="_self"){ echo " selected=\"selected\" ";}?>>
                    صفحه جاری
                </option>

                <option value="_blank" <?php  if(esc_attr( $target )=="_blank"){ echo " selected=\"selected\" "; }?>>
                    صفحه جدید
                </option>


            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'icon' ); ?>">آیکون:</label>
            <select id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>">

                <option value="fa  fa-envelope" <?php  if(esc_attr( $icon )=="fa  fa-envelope"){ echo " selected=\"selected\" ";}?>>
                    ایمیل
                </option>

                <option value="fa  fa-phone" <?php  if(esc_attr( $icon )=="fa  fa-phone"){ echo " selected=\"selected\" "; }?>>
                    تلفن
                </option>
                <option value="fa  fa-location-arrow" <?php  if(esc_attr( $icon )=="fa  fa-location-arrow"){ echo " selected=\"selected\" ";}?>>
                    فلش
                </option>

                <option value="fa fa-link" <?php  if(esc_attr( $icon )=="fa fa-link"){ echo " selected=\"selected\" "; }?>>
                    لینک
                </option>

                <option value="fab fa-twitter" <?php  if(esc_attr( $icon )=="fab fa-twitter"){ echo " selected=\"selected\" ";}?>>
                    توییتر
                </option>

                <option value="fab fa-facebook" <?php  if(esc_attr( $icon )=="fab fa-facebook"){ echo " selected=\"selected\" "; }?>>
                    فیسبوک
                </option>

                <option value="fab fa-instagram" <?php  if(esc_attr( $icon )=="fab fa-instagram"){ echo " selected=\"selected\" ";}?>>
                    اینستاگرام
                </option>

                <option value="fab fa-google-plus" <?php  if(esc_attr( $icon )=="fab fa-google-plus"){ echo " selected=\"selected\" "; }?>>
                    گوگل پلاس
                </option>

                <option value="fab fa-telegram" <?php  if(esc_attr( $icon )=="fab fa-telegram"){ echo " selected=\"selected\" ";}?>>
                    تلگرام
                </option>

                <option value="fas fa-file-pdf" <?php  if(esc_attr( $icon )=="fas fa-file-pdf"){ echo " selected=\"selected\" "; }?>>
                    فایل پی دی اف
                </option>
                <option value="fas fa-file-archive" <?php  if(esc_attr( $icon )=="fas fa-file-archive"){ echo " selected=\"selected\" "; }?>>
                    فایل فشرده
                </option>
                <option value="fas fa-film" <?php  if(esc_attr( $icon )=="fas fa-film"){ echo " selected=\"selected\" "; }?>>
                    فایل فیلم
                </option>
                <option value="fas fa-file-audio" <?php  if(esc_attr( $icon )=="fas fa-file-audio"){ echo " selected=\"selected\" "; }?>>
                    فایل صوتی
                </option>
                <option value="fas fa-images" <?php  if(esc_attr( $icon )=="fas fa-images"){ echo " selected=\"selected\" "; }?>>
                    گالری
                </option>
                <option value="far fa-file-powerpoint" <?php  if(esc_attr( $icon )=="far fa-file-powerpoint"){ echo " selected=\"selected\" "; }?>>
                    فایل پاورپوینت
                </option>
                <option value="far fa-file-word" <?php  if(esc_attr( $icon )=="far fa-file-word"){ echo " selected=\"selected\" "; }?>>
                    فایل وردآفیس
                </option>
            </select>
        </p>
        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'content' ] = strip_tags( $new_instance[ 'content' ] );
        $instance[ 'url' ] = strip_tags( $new_instance[ 'url' ] );
        $instance[ 'target' ] = strip_tags( $new_instance[ 'target' ] );
        $instance[ 'icon' ] = strip_tags( $new_instance[ 'icon' ] );
        return $instance;
    }


}

class Nooshin_a_title_Widget extends WP_Widget {
    /**
     * Widget For View  Content  with Awesome icons
     **/
    public function __construct() {
        $widget_options = array(
            'classname' => 'nooshin_a_title_widget',
            'description' => 'این ابزارک عنوان مناسب را نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_title_widget', 'نمایش عنوان مناسب', $widget_options );
    }
    public function widget( $args, $instance ) {
        $defaults = array(
            "title"=>"با ما تماس بگیرید",

        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );


        global $nooshin_a_theme_default;
        $args = $nooshin_a_theme_default->get_widgets_default_html_css();

        echo  $args['before_title'] . $title . $args['after_title'];



    }
    public function form( $instance ) {
        $defaults = array(
            "title"=>"با ما تماس بگیرید",
        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );

        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">عنوان:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
        </p>



        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        return $instance;
    }


}

class Nooshin_a_Logo_Widget extends WP_Widget {
    /**
     * Widget For Site Logo & Text
     **/
    public function __construct() {

        // Add Widget scripts
        add_action('admin_enqueue_scripts', array($this, 'scripts'));

        $widget_options = array(
            'classname' => 'nooshin_a_logo_widget',
            'description' => 'این ابزارک لوگوی مناسب را نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_logo_widget', 'نمایش لوگوی مناسب', $widget_options );
    }
    public function scripts()
    {
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_media();
        wp_enqueue_script('our_admin', get_template_directory_uri() . '/libs/our_admin.js', array('jquery'));
    }
    public function widget( $args, $instance ) {
        // Our variables from the widget settings
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ?  'نوشین تم وردپرس' : $instance['title'] );
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';

        ob_start();
        $result="";
        if ( ! empty( $instance['title'] ) ) {
            $result = "<li class=\"d-inline-block mr-md-2 \"><a data-toggle=\"tooltip\" title=\"با ما تماس بگیرید...\" class=\"btn-outline-light   text-black-50 p-1 rounded \" href=\"#\">" . $title ;
        }

        if($image){
            $result = $result. "<img src= $image class=\"mb-1  wow flip\"  data-wow-iteration=\"2000\" data-wow-duration=\"5s\" width=\"64px\" height=\"64px\" /></a> </li>";
        }else {
            $result = $result . "</a> </li>";
        }
        echo $result;
        ob_end_flush();
    }
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'تم وردپرسی نوشین', 'text_domain' );
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'عنوان:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'تصویر:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_url( $image ); ?>" />
            <button class="upload_image_button button button-primary">بارگذاری تصویر</button>
        </p>
        <?php

    }
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';

        return $instance;
    }


}

class Nooshin_a_CopyRight_Widget extends WP_Widget {
    /**
     * Widget For View  Content  with Awesome icons
     **/
    public function __construct() {
        $widget_options = array(
            'classname' => 'nooshin_a_copyright_widget',
            'description' => 'این ابزارک عبارت کپی رایت را نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_copyright_widget', 'نمایش کپی رایت', $widget_options );
    }
    public function widget( $args, $instance ) {
        $defaults = array(
            "title"=>"Copyright @2019 | طراحی شده توسط",
            "company"=>"txtzoom.com",
            "url"=>"txtzoom.com"

        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $company = $instance["company"];
        $url = $instance["url"];


        echo  "<p class=\"text-center\">$title <a href=\"$url\">$company</a></p>";



    }
    public function form( $instance ) {
        $defaults = array(
            "title"=>"Copyright @2019 | طراحی شده توسط",
            "company"=>"txtzoom.com",
            "url"=>"txtzoom.com"

        );

        $instance = wp_parse_args((array)$instance,$defaults);

        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $company = $instance["company"];
        $url = $instance["url"];

        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">متن اصلی:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'company' ); ?>">نام شرکت:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'company' ); ?>" name="<?php echo $this->get_field_name( 'company' ); ?>" value="<?php echo esc_attr( $company ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'url' ); ?>">لینک:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" value="<?php echo esc_attr( $url ); ?>" />
        </p>


        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        $instance[ 'company' ] = strip_tags( $new_instance[ 'company' ] );
        $instance[ 'url' ] = strip_tags( $new_instance[ 'url' ] );
        return $instance;
    }


}

class Nooshin_a_Advertise_Widget extends WP_Widget {
    /**
     * Widget For Advertise
     **/
    public function __construct() {

        // Add Widget scripts
        add_action('admin_enqueue_scripts', array($this, 'scripts'));

        $widget_options = array(
            'classname' => 'nooshin_a_advertise_widget',
            'description' => 'این ابزارک تبلیغات  را نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_advertise_widget', 'نمایش بخش  تبلیغات ', $widget_options );
    }
    public function scripts()
    {
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_media();
        wp_enqueue_script('our_admin', get_template_directory_uri() . '/libs/our_admin.js', array('jquery'));
    }
    public function widget( $args, $instance ) {
        // Our variables from the widget settings
        $width = ! empty( $instance['width'] ) ? $instance['width'] : 25;
        $height = ! empty( $instance['height'] ) ? $instance['height'] : 200;
        $link = ! empty( $instance['link'] ) ? $instance['link'] : '';
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';

        ob_start();
        $result="";
        if ( ! empty( $instance['image'] ) ) {
            $width = ($width * 12)/100;
            $result = "<li class=\"d-inline-block col-md-{$width}\"><a href=\"{$link}\">" ;


            $result = $result. "<div class=\"advertise  mb-3 m-md-1 jumbotron bg-info rounded justify-content-center text-white text-center\" style=\" max-height:{$height}px;height:{$height}px; background-image: url('{$image}');background-repeat: no-repeat;background-size: cover\"></div>";

            $result = $result . "</a> </li>";
        }
        echo $result;
        ob_end_flush();
    }
    public function form( $instance ) {
        $width = ! empty( $instance['width'] ) ? $instance['width'] : 25;
        $height = ! empty( $instance['height'] ) ? $instance['height'] : 200;
        $link = ! empty( $instance['link'] ) ? $instance['link'] : '';
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'لینک:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'تصویر:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_url( $image ); ?>" />
            <button class="upload_image_button button button-primary">بارگذاری تصویر</button>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'width' ); ?>"><?php _e( 'درصدازعرض صفحه:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'width' ); ?>" name="<?php echo $this->get_field_name( 'width' ); ?>" type="number" min="25" max="100" step="25" value="<?php echo esc_attr( $width); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'height' ); ?>"><?php _e( 'ارتفاع-پیکسل:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>" name="<?php echo $this->get_field_name( 'height' ); ?>" type="number" min="0" max="1000" step="1" value="<?php echo esc_attr( $height ); ?>">
        </p>
        <?php

    }
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? $new_instance['link'] : '';
        $instance['height'] = ( ! empty( $new_instance['height'] ) ) ? $new_instance['height'] : 200;
        $instance['width'] = ( ! empty( $new_instance['width'] ) ) ? $new_instance['width'] : 25;

        return $instance;
    }


}

class Nooshin_a_Slide_Widget extends WP_Widget {
    /**
     * Widget For Slide
     **/
    public function __construct() {

        // Add Widget scripts
        add_action('admin_enqueue_scripts', array($this, 'scripts'));

        $widget_options = array(
            'classname' => 'nooshin_a_slide_widget',
            'description' => 'این ابزارک اسلاید  را نمایش می دهد',
        );
        parent::__construct( 'nooshin_a_slide_widget', 'نمایش بخش  اسلاید ', $widget_options );
    }
    public function scripts()
    {
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_media();
        wp_enqueue_script('our_admin', get_template_directory_uri() . '/libs/our_admin.js', array('jquery'));
    }
    public function widget( $args, $instance ) {
        // Our variables from the widget settings
        $title = ! empty( $instance['title'] ) ? $instance['title'] : 'عنوان';
        $link = ! empty( $instance['link'] ) ? $instance['link'] : '#';
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';

        ob_start();
        $result="";
        if ( ! empty( $instance['image'] ) ) {

            $registered_widgets = wp_get_sidebars_widgets();
            if(count($registered_widgets["nooshin_a_header-row2-col2"])>=1 and $registered_widgets["nooshin_a_header-row2-col2"][0]== "nooshin_a_slide_widget-".$this->number){
                $result = "<div class=\"carousel-item active  \"> <a href=\"{$link}\"><img class=\"w-100\" src=\"{$image}\" alt=\"{$title}\"><span class=\"btn-dark rounded p-1 custom-carousel-item-text\">{$title}</span></a></div>" ;
            }
            else{
                $result = "<div class=\"carousel-item  \"> <a href=\"{$link}\"><img class=\"w-100\" src=\"{$image}\" alt=\"{$title}\"><span class=\"btn-dark rounded p-1 custom-carousel-item-text\">{$title}</span></a></div>" ;
            }



        }
        echo $result;
        ob_end_flush();
    }
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : 'عنوان';
        $link = ! empty( $instance['link'] ) ? $instance['link'] : '';
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'عنوان:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'لینک:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'تصویر:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_url( $image ); ?>" />
            <button class="upload_image_button button button-primary">بارگذاری تصویر</button>
        </p>



        <?php

    }
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? $new_instance['link'] : '';
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? $new_instance['title'] : '';

        return $instance;
    }


}

function nooshin_a_widgets_register() {
    register_widget( 'Nooshin_a_Last_Post_Widget' );
    register_widget( 'Nooshin_a_Last_Comment_Widget' );
    register_widget( 'Nooshin_a_Last_Archive_Widget' );
    register_widget( 'Nooshin_a_title_Widget' );
    register_widget( 'Nooshin_a_content_icon_Widget' );
    register_widget( 'Nooshin_a_social_Logo_Widget' );
    register_widget( 'Nooshin_a_Logo_Widget' );
    register_widget( 'Nooshin_a_CopyRight_Widget' );
    register_widget( 'nooshin_a_advertise_widget' );
    register_widget( 'nooshin_a_slide_widget' );


}
add_action( 'widgets_init', 'nooshin_a_widgets_register' );
