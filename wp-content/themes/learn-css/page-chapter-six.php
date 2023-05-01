
<?php get_header();?>



<h2>Example of flex</h2>



<div class="flex-container">
<div class="box3">This is box 1</div>
<div class="box3">This is box 1</div>


<div class="box4">This is box 2</div>
<div class="box4">This is box 2</div>

</div>
<h2>Another Example of flex</h2>

<div class="flex-container-below">
<div class="box5">This is box 1</div>
<div class="box5">This is box 1</div>


<div class="box6">This is box 2</div>
<div class="box6">This is box 2</div>

</div>

<h2>Another Example of flex</h2>

<div class="flex-nav">
    <img src="<?php echo get_theme_file_uri('/build/licensed-image.jpeg')?>" width="30px" height="30px"/>
    <ul>
    <li>Home</li>
    <li>About</li>
    <li>Contact</li>
    <li>FAQ</li>
    </ul>
</div>

<div class="flex-gallery">
<img src="<?php echo get_theme_file_uri('/build/dogfield.jpg')?>" width="200px" height="200px"/>
<img src="<?php echo get_theme_file_uri('/build/download.jpeg')?>" width="200px" height="200px"/>
<img src="<?php echo get_theme_file_uri('/build/everest.jpg')?>" width="200px" height="200px"/>


</div>



<?php get_footer();?>