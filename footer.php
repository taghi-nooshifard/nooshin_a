<!--footer starts from here-->
<footer class="footer border-top">
    <div class="container bottom_border">

<!--        Archive & Comments Link-->
        <div class="row wow fadeInUp"  data-wow-offset="220" data-wow-delay="200ms">
            <div class=" col-12 col-md-4   col">
                <!--                 Last Posts Widget-->
                <?php
                if(is_active_sidebar('nooshin_a_footer-row1-col1')){
                    dynamic_sidebar('nooshin_a_footer-row1-col1');
                }
                else{
                ?>
                <h5 class="headin5_amrc col_white_amrc pt2 btn-info p-1 rounded ">آخرین مقالات</h5>
                <ul class="footer_ul_amrc">
                    <li><i class='fa fa-newspaper fa-1x mr-1'></i><a href="#">مقاله بعنوان نمونه 1...</a></li>
                    <li><i class='fa fa-newspaper fa-1x mr-1'></i><a href="#">مقاله بعنوان نمونه 2...</a></li>
                    <li><i class='fa fa-newspaper fa-1x mr-1'></i><a href="#">مقاله بعنوان نمونه 3...</a></li>
                    <li><i class='fa fa-newspaper fa-1x mr-1'></i><a href="#">مقاله بعنوان نمونه 4...</a></li>
                 </ul>

                 <?php
                 }
                 ?>

            </div>
            <div class=" col-12 col-md-4   col">
                <!--                 Last Comments Widget-->
                <?php
                if(is_active_sidebar('nooshin_a_footer-row1-col2')){
                    dynamic_sidebar('nooshin_a_footer-row1-col2');
                }
                else{
                    ?>
                <h5 class="headin5_amrc col_white_amrc pt2 btn-info p-1 rounded ">آخرین نظرات</h5>
                <ul class="footer_ul_amrc">
                    <li><i class="fa fa-comment fa-1x mr-1"></i><a href="#"> دیدگاه شماره1...</a> </li>
                    <li><i class="fa fa-comment fa-1x mr-1"></i><a href="#"> دیدگاه شماره2...</a> </li>
                    <li><i class="fa fa-comment fa-1x mr-1"></i><a href="#"> دیدگاه شماره3...</a> </li>
                    <li><i class="fa fa-comment fa-1x mr-1"></i><a href="#"> دیدگاه شماره4...</a> </li>

                </ul>
                <?php
                }
                ?>



            </div>
            <div class=" col-12 col-md-4   col">


<!--                 Last Archive Widget-->
                <?php
                if(is_active_sidebar('nooshin_a_footer-row1-col3')){
                    dynamic_sidebar('nooshin_a_footer-row1-col3');
                }
                else{
                ?>
                <h5 class="headin5_amrc col_white_amrc pt2 btn-info p-1 rounded ">آرشیو مقالات</h5>
                <ul class="footer_ul_amrc">
                    <li><i class="fa fa-archive fa-1x mr-1"></i><a href="#"> اکتبر 2019 </a> </li>
                    <li><i class="fa fa-archive fa-1x mr-1"></i><a href="#"> ژانویه 2019 </a> </li>
                    <li><i class="fa fa-archive fa-1x mr-1"></i><a href="#"> ژوئن 2019 </a> </li>
                    <li><i class="fa fa-archive fa-1x mr-1"></i><a href="#"> نوامبر 2019 </a> </li>
                </ul>

               <?php
                }
                ?>


            </div>



        </div>
<!--        Social Links-->
        <div class="row wow fadeInDown"  data-wow-offset="220" data-wow-delay="200ms">
            <div class=" col-12 col-md-4  col">
                <?php
                if(is_active_sidebar('nooshin_a_footer-row2-col1')){
                    dynamic_sidebar('nooshin_a_footer-row2-col1');
                }
                else{
                ?>
                <h5 class="headin5_amrc col_white_amrc pt2 btn-info p-1 rounded">ما را بیابید</h5>
                <!--headin5_amrc-->
                <p class="mb10">توسط امکانات ارتباطی زیر می توانید با ما تماس بگیرید...</p>
                <p><i class="fa fa-location-arrow"></i> @nooshin </p>
                <p><i class="fa fa-phone"></i>  +98-9120216334  </p>
                <p><i class="fa  fa-envelope"></i> info@nooshin.com  </p>
                <?php
                }
                ?>


            </div>
            <div class=" col-12 col-md-4   col">
                <?php
                if(is_active_sidebar('nooshin_a_footer-row2-col2')){
                    dynamic_sidebar('nooshin_a_footer-row2-col2');
                }
                else{
                ?>
                <h5 class="headin5_amrc col_white_amrc pt2 btn-info p-1 rounded">لینک های سریع</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><i class="fa fa-link fa-1x mr-1"></i><a href="http://7learn.com">حذف تصویرزمینه...</a></li>
                    <li><i class="fa fa-link fa-1x mr-1"></i><a href="http://7learn.com">بازتاب آیینه...</a></li>
                    <li><i class="fa fa-link fa-1x mr-1"></i><a href="http://7learn.com">طراحی لوگو...</a></li>
                    <li><i class="fa fa-link fa-1x mr-1"></i><a href="http://7learn.com">مجازی سازی...</a></li>
                </ul>
                <?php
                }
                ?>

            </div>
            <div class="  col-md-4  col-12 col">
                <?php
                if(is_active_sidebar('nooshin_a_footer-row2-col3')){
                    dynamic_sidebar('nooshin_a_footer-row2-col3');
                }
                else{
                ?>
                <h5 class="headin5_amrc col_white_amrc pt2 btn-info p-1 rounded">ما را دنبال کنید</h5>
                <!--headin5_amrc ends here-->

                <ul class="footer_ul2_amrc ">
                    <li><p><a href="#"><i class="fab fa-twitter text-dark  padding-right"></i> </a>طراحی صفحات وب توسط تیم طراحی ما صورت خواهد پذیرفت...<a class="text-dark" href="#">https://www.7Learn.com/</a></p></li>
                    <li><p><a href="#"><i class="fab fa-twitter text-dark padding-right"></i> </a>طراحی صفحات وب توسط تیم طراحی ما صورت خواهد پذیرفت...<a class="text-dark" href="#">https://www.7Learn.com/</a></p></li>
                    <li><p><a href="#"><i class="fab fa-twitter text-dark padding-right"></i> </a>طراحی صفحات وب توسط تیم طراحی ما صورت خواهد پذیرفت...<a class="text-dark" href="#">https://www.7Learn.com/</a></p></li>
                </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

<!--    Menu & CopyRight & Menu-->
    <div class="container ">
        <!--Page Navigation-->
        <ul class="foote_bottom_ul_amrc ">
            <li class="" ><a class="btn-info p-1 rounded " href="#">خانه</a></li>
            <li><a class="btn-info p-1 rounded d-none d-md-inline-block" href="#">گالری</a></li>
            <li><a class="btn-info p-1 rounded" href="#">مقالات</a></li>
            <li><a class="btn-info p-1 rounded d-none d-md-inline-block" href="#">درباره ما</a></li>
            <li><a class="btn-info p-1 rounded" href="#">تماس با ما</a></li>

        </ul>
        <!--foote_bottom_ul_amrc ends here-->
        <?php
        if(is_active_sidebar('nooshin_a_copy_right_ul')){
            dynamic_sidebar('nooshin_a_copy_right_ul');
        }
        else {
        ?>
        <p class="text-center">Copyright @2019 | طراحی شده توسط <a href="#">نام شرکت شما</a></p>

        <?php
        }
        ?>
        <ul class="social_footer_ul">
            <?php
            if(is_active_sidebar('nooshin_a_social_footer_ul')){
                dynamic_sidebar('nooshin_a_social_footer_ul');
            }
            else {
                ?>
                <li class="mr-2"><a href="#" data-toggle="tooltip" title="telegram"><i class="fab fa-telegram"></i> </a>
                </li>
                <li class="mr-0"><a href="#" data-toggle="tooltip" title="google+"><i class="fab fa-google-plus"></i>
                    </a></li>
                <li class="mr-0"><a href="#" data-toggle="tooltip" title="twitter"><i class="fab fa-twitter"></i> </a>
                </li>
                <li class="mr-0"><a data-toggle="tooltip" title="instagram" href="#"><i class=" fab fa-instagram"></i>
                    </a></li>
                <li class="mr-0"><a data-toggle="tooltip" title="faceboook" href="#"><i class="fab fa-facebook"></i>
                    </a></li>
                <li class="mr-0"><a data-toggle="tooltip" title="09120216334" href="#"><i
                                class="fa fa-phone text-info"></i> </a></li>
                <li class="mr-0"><a data-toggle="tooltip" title="info@nooshin.com" href="#"><i
                                class="fa fa-envelope text-info"></i> </a></li>
                <?php
            }
            ?>




        </ul>
        <!--social_footer_ul ends here-->

    </div>

</footer>
<!--footer end-->

<!--Nooshin-A Script-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/script.js" type="text/javascript"></script>

<?php wp_footer(); ?>
</body>
</html>