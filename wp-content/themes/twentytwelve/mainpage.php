<?php
/*
Template Name: Anshul Jain
*/
?>
<?php get_header();?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=232619106858988";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script language="javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/jquery.tweet.js" type="text/javascript"></script>

    	
<?php //if ( function_exists( 'get_wp_parallax_content_slider' ) ) { get_wp_parallax_content_slider(); }?>

		<!------------page-content-wrapper--------------->
    <div class="page-content-wrapper">

<div>


<div class="showcase" style="display:none">

    <div class="oreilly slide1 slide-main">
        <a href="#" class="arrow-left"></a>
        <a href="#" class="arrow-right"></a>
        <div class="container">
            <div class="logo"></div>
            <div class="message">
                <a class="orange-button" href="about-inopen/" style="display:none">Know More</a>
            </div>
            <div class="platforms"></div>
        </div>
    </div>

    

    <div class="slide3 slide-main slide-main teach">
        <a href="#" class="arrow-left"></a>
        <a href="#" class="arrow-right"></a>
        <div class="container">
            <div class="message">
                <a class="orange-button" href="about-computermsati/#aboutCM" style="display:none">Know More</a>
            </div>
        </div>
    </div>


    <div class="slide4 slide-main textbook">
        <a href="#" class="arrow-left"></a>
        <a href="#" class="arrow-right"></a>
        <div class="container">
            <div class="message">
                <a class="orange-button" href="about-computermsati/#features" style="display:none">Know More</a>
            </div>
            <div class="platforms"></div>
        </div>
    </div>


     <div class="slide2 slide-main travel">
        <a href="#" class="arrow-left"></a>
        <a href="#" class="arrow-right"></a>
        <div class="container">
            <div class="message">
                <a class="orange-button" href="culture/" style="display:none">Know More</a>
            </div>
        </div>
    </div>

</div>





</div>



      <div class="page-content">

        <!------content----->
			

        <div class="io-banner" style="">
          <img class="io-banner-image" src="http://inopen.in/wp-content/uploads/2012/09/Vision-Image.png" alt="banner-students"/>
          <div class="io-banner-text">
            <h3 class="io-banner-title bm_pink">Simplifying and Strengthening Knowledge</h3>
            <div class="io-banner-content">
              <p>At InOpen Technologies we create world class content which focuses on developing life skills that empower the audience to solve complex problems confidently.  We build content that is simple, engaging and fun. We aim to strive continuously in order to add simplicity and sense to the otherwise complex problem of education.</p>
            </div>
            <div class="io-banner-links">
              <a href="http://inopen.tumblr.com/" class="bm_orange" target="_blank">Read Blog</a><span class="sep">/</span>
              <a href="http://inopen.in/the-team/executive-team/" class="bm_orange">Meet Our Team</a><span class="sep">/</span>
              <a href="http://inopen.in/about-computermsati/" class="bm_orange">Visit Our Portfolio</a>
            </div>
          </div>
        </div>

        
        <div class="io-pitch">
          <p>
            <span class="bm_blue">InOpen</span> Technologies is an IIT Bombay based educational startup that focuses on building the best quality content   through intense and extensive research. InOpen offers products and services to government and private schools. We are currently serving more than 4 lakh students directly.
            with our products.
          </p>
          <div class="io-circles-stats">
            <ul>
             
              <li class="io-cm 02"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/cm_subjects.png"/>2 Subjects</li>
              <li class="io-cm 03"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/cm_teachers.png"/>2000+ Teachers Trained</li>
 <li class="io-cm 01"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/cm_students.png"/>4,00,000 Students</li>
              <li class="io-cm 04"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/cm_countries.png"/>Downloaded in 120+ Countries</li>
              <li class="io-cm 05"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/cm_languages.png"/>10 Languages</li>
            </ul>
          </div>
        </div>

       

        <div id="io-belief">
          <div class="io-belief-text">
            <div class="io-belief-title">
              we believe in
            </div>
            <div class="io-belief-caption">
              <p>Computer Masti </p>
              <p>and Small Science </p>
            </div>
          </div>
          <div class="io-seperator"></div>
	 
          <div class="io-belief-elements">
            <ul>
              <a href="http://www.computermasti.in" target="_blank"><li id="io-belief-cm"></li></a>
              <a href="http://coglab.hbcse.tifr.res.in//" target="_blank"><li id="io-belief-ss"></li></a>
            </ul>
          </div>
        </div>
<div style="overflow:hidden">
	<div class="cm-grid" style="min-height:325px">
		<div class="pane-content">
		<h3>Latest Updates</h3>
		<div class="cm-p-rss" id="tab_content_5"><?php RSSImport(
    $display = 5, $feedurl = 'http://inopen.tumblr.com/rss', 
    $before_desc = '', $displaydescriptions = false, $after_desc = '', $html = true, $truncatedescchar = 100, $truncatedescstring = ' ... ', $start_items = '<ul class="content">', $end_items = '</ul>', 
$before_creator = ' <p>', $creator = false, $after_creator = '</p>',
    $start_item = '<li>', $end_item = '</li>' ,
    $truncatetitlechar = '', $truncatetitlestring = ' ... '
)?><a style="float:right; color:#DB3D8A;font-weight:bold;border: none !Important;" target = "_blank" href="http://blog.inopen.in/archive">More Updates</a></div>
		</div>
	</div>
	<div class="cm-grid" style="min-height:325px">
		<div class="pane-content">
		<h3>Events</h3><div class="cm-p-rss" id="tab_content_4"><ul class="content">
<?php
 
$args = array( 'numberposts' => 15, 'category' =>11 , 'post_type' => 'post' ,'order' => 'DESC',);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<li><p><a href="<?php the_permalink(); ?>" target="_blank"><?php echo the_title(); ?></a></p></li>
<?php
endforeach; 
wp_reset_query(); 
?>

</ul><div class="page_navigation"></div>
		
		
		</div>		</div>
	</div>
	<div class="cm-grid tabed-box" style="min-height:325px">
		<div class="pane-content">
		<ul class="tabs">
		    <li id="content_1" class="tab active">Case Studies</li>		
		    <li id="content_2" class="tab ">Research Papers</li>		
		    <li id="content_3" class="tab">Teaching Resources</li>		
		</ul>
 		<div id="tab_content_1" class="cm-p-tab">
	<ul class="content">
	<li><p><a href="http://inopen.in/jamnabai-narsee-school/" target="_blank">Jamnabai Narsee School</a></p></li>
	<li><p><a href="http://inopen.in/raje-shivaji-a-slum-school-in-city-suburbs/" target="_blank">Springfield High School</a></p></li>
	<li><p><a href="http://inopen.in/sri-sri-ravi-shankar-vidya-mandir-urban-school/" target="_blank">SSRVM</a></p></li>
	<li><p><a href="http://inopen.in/vivekananda-trust/" target="_blank" >Vivekananda Trust</a></p></li>
		</ul>
		<div class="page_navigation"></div>
        	</div>
		<div id="tab_content_2" class="cm-p-tab">
	<ul class="content">
	<li><p><a href="wp-content/uploads/2012/10/CognitiveLevel-EPISTEME.pdf.pdf" target="_blank">CognitiveLevel-EPISTEME</a></p></li>
	<li><p><a href="wp-content/uploads/2012/10/FinalCMResearch.pdf.pdf" target="_blank">Final CM Research.</a></p></li>
	<li><p><a href="wp-content/uploads/2012/10/scratch_at_mit_iitb2010.pdf.pdf" target="_blank">Scratch at MIT</a></p></li>
		</ul>
		<div class="page_navigation"></div>
        	</div>
		<div id="tab_content_3" class="cm-p-tab">
	<ul class="content">
	<li><p><a href="http://teachers.net/" target="_blank">Lesson Plans and Classroom Projects</a></p></li>
	<li><p><a href="http://scratch.mit.edu/" target="_blank">Scratch Programming</a></p></li>
	<li><p><a href="http://zunal.com/webquest.php?w=152677" target="_blank">Taxonomy of Learning and Evaluation</a></p></li>
	<li><p><a href="http://moodle.org/" target="_blank">Webquest</a></p></li>
	<li><p><a href="http://www.khanacademy.org" target="_blank">Educational Videos</a></p></li>
	<li><p><a href="http://www.theteachersguide.com/classroommanagement.htm" target="_blank">Classroom Management</a></p></li>
	<li><p><a href="http://education.nationalgeographic.com/education/teaching-resources/?ar_a=1 " target="_blank">Student Activities</a></p></li>
	<li><p><a href="http://www.bie.org/tools/freebies?gclid=CJX-xbn6r7ICFVEk6wodFi8AuA" target="_blank">Project Based Learning</a></p></li>
	</ul>
	<div class="page_navigation"></div>
	</div>
		</div>
	</div>
</div>
	<!--<div class="io-blogs io-x-info-box">
          <div class="io-pink-module">latest news</div>
          <div class="io-module-content">Computer OS comming Soon!</div>
        </div>-->
	<div class="io-testimonial-info-box hide-on-phone" style="margin-top:20px;">
          <div class="io-blue-module">Testimonials</div>
          <div class="io-testimonial-module-content">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-img-testimonial') ) : ?>

<?php endif; ?>
</div>
        </div>

        <div class="io-tweets io-x-info-box hide-on-phone">

         <div class="io-pink-module">tweets</div>
          <div class="io-module-content" style="padding:0 0 0 8px;">
	<div class="tweets-container" style="border: 1px solid #969696; height: 156px; padding: 10px 0 10px 8px; margin: 38px 0 0; background:white;">
      <?php     echo do_shortcode(' [twitter-feed username="computermasti" mode="public" num="1"]') ?>
	</div>
      </div>
          </div>

        <div class="io-facebook io-x-info-box hide-on-phone">
          <div class="io-pink-module">facebook</div>
          <div class="io-module-content" style="padding:0 0 0 8px; height:220px;"><div class="fb-like-box" data-href="http://www.facebook.com/computermasti" data-width="400" data-height="180" data-show-faces="true" data-stream="false" data-header="false" style="margin-top:-10px; position:relative; background:white;"></div></div></div>
        </div>
  
        <!------content-end----->

      </div>
    </div>
