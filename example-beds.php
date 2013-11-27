<?php include 'parts/doctype.php';?>
<body class="resources">
  <div class="header">
    <?php include 'parts/header.php';?>
    <?php include 'parts/nav.php';?>

    <a class="tablet toggle-subnav" href="#"><span class="nav-bar clearfix"><span aria-hidden="true" data-icon="&#57349;" ></span>Subnav</span></a>
    <ul class="breadcrumbs">
      <li><a href="/"><span aria-hidden="true" data-icon="&#8962;" ></span></a></li>
      <li><a href="resources.php">resources</a></li>
      <li><a href="frameworks.php">frameworks</a></li>
      <li>Amazium</li>
    </ul>
  </div>
  <div class="content">
    <div class="sub-navigation">
  <h3>Resources</h3>
<ul>
  <li><a href="framworks.php">Books</a></li>
  <li><a href="framworks.php">Testing</a></li>
  <li><a href="frameworks.php">Frameworks</a>
      <ul>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/960-grid-system">960 Grid System</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/gridpak">Gridpak</a></li>
         <li class="active"><a href="http://alpha.responsivedesign.is/resources/frameworks/amazium">Amazium</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/fluid-baseline-grid">Fluid Baseline Grid</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/zurb-foundation-framework">Zurb Foundation Framework</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/gridless">Gridless</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/responsive-grid-system">Responsive Grid System</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/less-framework">Less Framework</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/inuitcss">inuitcss</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/simplegrid">SimpleGrid</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/skeleton">Skeleton</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/1140-grid">1140 Grid</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/twitter-bootstrap">Twitter Bootstrap</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/golden-grid-system">Golden Grid System</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/the-semantic-grid-system">The Semantic Grid System</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/responsive-grids-for-compass">Responsive Grids for Compass</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/aura">Aura</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/responsify.it">Responsify.it</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/bourbon-neat">Bourbon Neat</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/profound-grid">Profound Grid</a></li>
         <li><a href="http://alpha.responsivedesign.is/resources/frameworks/centurion">Centurion</a></li>
               </ul></li>
  <li><a href="framworks.php">JS &amp; Jquery</a></li>
  <li><a href="video.php">Tutorials</a></li>
   <li><a href="framworks.php">Images</a></li>
  <li><a href="framworks.php">Typography</a></li>
  <li><a href="framworks.php">Layouts</a></li>
  <li><a href="framworks.php">Boilerplates</a></li>
  <li><a href="framworks.php">Email</a></li>
  <li><a href="framworks.php">RESS</a></li>
</ul>
    </div>
<article class="resource">
<h1>Bedfordshire, University of</h1>
<figure>
  <img src="images/website-screenshot.png" alt="Screen shots of Bedfordshire, University of" />
  <figcaption>Screenshot of Bedfordshire University's website across 4 devices</figcaption>
</figure>

<p>Bedfordshire University is a very resource heavy site when it comes to responsive design. One hundred and twelve https requests including:</p>


<ul><li>6 CSS files&nbsp;</li>
  <li>23 Javascript files&nbsp;</li>
  <li>80 image requests&nbsp;</li>
  <li>2 font requests</li>
</ul>

<p>They've also included a fallback for older versions of IE</p>

<pre class="language-markup"><code>
&lt;script type="text/javascript"&gt;
jQuery(document).ready(function(){
    jQuery(window).bind("resize", resizeWindow);
    function resizeWindow(e){
        var newWindowWidth = jQuery(window).width();

if(newWindowWidth &lt; 960){ 
   $("link#ie_responsive").attr({href : "http://www.beds.ac.uk/_designs/beds/css/responsive-design/ie900home.css"});
}

else if(newWindowWidth &gt; 960){
   $("link#ie_responsive").attr({href : "http://www.beds.ac.uk/_designs/beds/css/home_main.css"});
}

if(newWindowWidth &lt; 716){ 
   $("link#ie_responsive").attr({href : "http://www.beds.ac.uk/_designs/beds/css/responsive-design/ie700home.css"});
}
if(newWindowWidth &lt; 596){ 
   $("link#ie_responsive").attr({href : "http://www.beds.ac.uk/_designs/beds/css/responsive-design/ie500home.css"});
}
      
    }
});
&lt;/script&gt;</code></pre>

<p>Sadly there is no use of any frameworks or JS resources on the site, not even modernizr or any responisve image polyfills.</p>

<p><a href="http://www.beds.ac.uk/" class="button dark full-width">Visit site</a></p>

<h2>Bedfordshire, University of technical details</h2>

<h3>Meta Viewport</h3>
<pre class="language-markup"><code>&lt;meta name="viewport" content="width=device-width" /&gt;</code></pre>

<h3>media-queries</h3>
<pre class="language-css"><code>
  /* iPads (portrait) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {}

/* iPhone (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {}

/*handles gap between desktop and responsive design*/
@media only screen and (max-width:985px) {}

@media only screen and (max-width:960px) {}

@media only screen and (max-width:798px) {}

@media only screen and (max-width:765px) {}

@media only screen and (max-width:762px) {}

@media only screen and (max-width:715px) {}

@media only screen and (max-width:595px) {}</code></pre>

<section class="related-content">
<h3>Frameworks</h3><p>These guys are too cool for school and don&#39;t use a framework. &nbsp;If you like them then why don&#39;t you check out this list of <a href="http://responsivedesign.is/resources/frameworks">responsive design frameworks</a>.</p>
</section>
<section class="related-content">
<h3>Javascript</h3><p>Doesn&#39;t look like they used any (or we forgot to put them in)</p>
</section>
</article>
<div class="related-lists">
<aside class="related-content"><h3>Similar Sites</h3>
<ul>
		<li><a href="http://responsivedesign.is/examples/events/an-event-apart">An Event Apart</a></li>
    <li><a href="http://responsivedesign.is/examples/e-commerce/skinny-ties">Skinny Ties</a></li>
    <li><a href="http://responsivedesign.is/examples/blogs/the-great-discontent">The Great Discontent</a></li><li><a href="http://responsivedesign.is/examples/higher-education/british-columbia,-student-aid">British Columbia, Student Aid</a></li><li><a href="http://responsivedesign.is/examples/web-developer-designer-agency/deloitte-digital">Deloitte Digital</a></li><li><a href="http://responsivedesign.is/examples/web-developer-designer-agency/stuff-and-nonesense">Stuff &amp; Nonsense</a></li><li><a href="http://responsivedesign.is/examples/higher-education/delaware-valley-college">Delaware Valley College</a></li><li><a href="http://responsivedesign.is/examples/publishers/the-magazine-of-world-vision">The Magazine of World Vision</a></li><li><a href="http://responsivedesign.is/examples/web-developer-designer-agency/create-the-web-adobe">Create the Web Adobe</a></li><li><a href="http://responsivedesign.is/examples/web-developer-designer-agency/supereight-studio">Supereight Studio</a></li>
				</ul>
</aside>
</div>
<!--noindex-->

    </div>
    <!-- container -->


  <?php include 'parts/footer.php'; ?>

  <?php include 'parts/javascript.php'; ?>
</body>
</html>