<?php get_header(); ?>
<div id="container2" class="bdr bdr-top">

<div class="content left two-thirds">
 

 <?php if (have_posts()) :?>
  <?php while (have_posts()) : the_post();?> 

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
               
               
              <div class="entry-content"><!--//post-->
                <?php the_content();?>
              </div><!--//.entry-content-->
               
              <div class="push"></div>
            </article>
<?php endwhile; ?>
<?php else : ?>
       <h2 class="center">Not Found</h2>
       <p class="center">Sorry, but you are looking for something that isn't here.</p>
       <?php get_search_form(); ?>
<?php endif; ?>



<article class="post right half">
<h2 class=""><a href="#">Really Long Article Title Name The More Text The Better Cause You Never Know</a></h2>
<p class="entry-meta">by Author Name for <a href="#">Column Type</a></p>

<div class="entry-content"><!--//post-->
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque sagittis metus. In euismod tellus id ante.</p>  


</div><!--//.entry-content-->
<p class="left"><a class="more" href="#">Read more &raquo;</a></p>
<p class="right"><a class="comments" href="#">850</a></p>
<div class="push"></div>
</article>

<article class="post left half">
<h2 class=""><a href="#">Really Long Article Title Name The More Text The Better Cause You Never Know</a></h2>
<p class="entry-meta">by Author Name for <a href="#">Column Type</a></p>

<div class="entry-content"><!--//post-->
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque sagittis metus. In euismod tellus id ante.</p>  

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque sagittis metus. In euismod tellus id ante.</p> 


</div><!--//.entry-content-->
<p class="left"><a class="more" href="#">Read more &raquo;</a></p>
<p class="right"><a class="comments" href="#">850</a></p>
<div class="push"></div>
</article>

<div class="push"></div>
</div><!--content-->


<?php get_sidebar(); ?>


<div class="push"></div>

</div><!--//#container2-->



</div><!--//#container-->
<div id="across">
<?php get_footer(); ?>