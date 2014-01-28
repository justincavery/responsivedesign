<?php include 'parts/doctype.php';?>


						
  <!-- Global Variable -->
  <body class="articles">

<?php include 'parts/header.php';?>
<div class="mobile-nav">
 <a class="toggle-subnav" href="#"><span class="nav-bar clearfix"><span aria-hidden="true" data-icon="&#57349;" ></span>Subnav</span></a>
<a class="toggle-menu" href="#"><span class="nav-bar clearfix"><span aria-hidden="true" data-icon="&#9776;" ></span>Menu</span></a>

	</div>
		</header>			
        <!--- End Header -->
            <?php include 'parts/nav.php';?>


			    <a class="tablet toggle-subnav" href="#"><span class="nav-bar clearfix"><span aria-hidden="true" data-icon="&#57349;" ></span>Subnav</span></a>
			


   <ul class="breadcrumbs">
            <li><a href="/"><span aria-hidden="true" data-icon="&#8962;" ></span></a></li>
   
   
   
   
   
   <li><a href="http://responsivedesign.is">Responsive Web Design</a></li><li><a href="http://responsivedesign.is/articles">Articles</a></li>   
  </ul>
    
  </div>



<div class="content">


			

<!--endnoindex-->

		<div class="sub-navigation" role="navigation">

			<h3>Categories</h3>
<ul>
  <li><a href="#">Design</a></li>
  <li><a href="#">Development</a></li>
  <li><a href="#">Strategy</a></li>
  <li><a href="#">Interview</a></li>
  <li><a href="#">Opinion</a></li>
</ul>


  <h3>Tags</h3>
<ul>
  <li><a href="#">CSS</a></li>
  <li><a href="#">Frameworks</a></li>
  <li><a href="#">Javascript</a></li>
  <li><a href="#">Media Queries</a></li>
  <li><a href="#">Responsive Media</a></li>
  <li><a href="#">Typography</a></li>
  <li><a href="#">Testing</a></li>
</ul>
		</div><article class="article" role="main">
<h1>The &amp;lt;picture> vs srcset argument</h1>
<p class="lead">The responsive images argument has been going for over 12 months now and there's no sign of it ending soon. &nbsp;It's an issue that most of us face on a daily basis yet we're no closer to being given a suitable solution.</p><p>Unsurprisingly when you 10 chefs in a kitchen you end up with bickering, in fighting, and several solutions to prepare the meals when you only need one.</p><p>In these cases one group is sure to become despondent and upset with the other. &nbsp;That is the way of the kitchen, that is the way of the world.</p><p>If you take those few chefs and multiply it into the hundreds, remove them from the kitchen and into the wide world across multiple timezones and provide them several different ways to communicate with each other... then you've probably arrived at the &lt;picture&gt; vs srcset argument.</p><p>While I would love to explain in details what has happened, far more smarter people that I have already walked this ground so I will simply provide you access to what they have to say.&nbsp;</p><p><a href="http://html5doctor.com/html5-adaptive-images-end-of-round-one/">HTML5 Adaptive Images, end of round one</a>&nbsp;-&nbsp;In this post Bruce Lawson takes a look at the decision on HTML5 Doctor. &nbsp;While he was the person that came up with the &lt;picture&gt; element at the beginning (other's also came up with the same idea independently) it was good to see him happy that a decision was made and that the issue was being looked at in the first place.&nbsp;</p><p><a href="http://adactio.com/journal/5474/">Secret SRC</a>&nbsp;-&nbsp;Jeremey Keith takes the sting out of the debate by offering an informative overview of the scenarios that lead to the inclusion of the srcset over the picture element before going into details about exactly what the srcset actually does, how it does it and how that affects our implementations.&nbsp;</p><p><a href="http://timkadlec.com/2012/05/wtfwg/">WTFWG</a>&nbsp;- This has the award for the best blog post title. &nbsp;Tim Kadlec (awesome organiser of the BD Conference) is a little pissed off with how everything has gone down with regards to the decision. &nbsp;From this blog post it appears as though the community group followed everything that WHATWG asked of them before an Apple employee submitted a less favoured solution that was immediately added to the spec. &nbsp;I like Tim, but don't let it be the only article that you read as Bruce and Jeremey (articles below) provide yet another view on the situation. &nbsp;Remember it's not so much the decision that has annoyed Tim, but the way in which that decision was reached.</p><p><a href="http://www.alistapart.com/articles/responsive-images-and-web-standards-at-the-turning-point/">Responsive Images and Web Standards at the turning point</a>&nbsp;- Matt Wilcox, the creator of the W3C Responsive Image Community Group, goes into enormous detail about how he believes that the community has been ignored in favour of WHATWG and what is easier for browsers.</p><p>I encourage you to read all four of these articles above in detail to get an idea about what the situation is today. &nbsp;I also encourage you to join the mailing lists, IRC channels or community working groups and put your two cents in as developers and web authors. &nbsp;If you don't speak up, you will not be heard and will have no place to complain if the implementation you wanted is thrown out.</p><h2>Other articles&hellip;</h2><p>You guys are still all headliners to me, but I just can't put everyone up there. &nbsp;This is a list of replies, retorts, suggestions and other AMAZING ideas that the web community has come up with.</p> <p><a href="http://alwaystwisted.com/post.php?s=2012-05-16-screwing-the-srcset">Screwing the srcset</a>&nbsp;- Here Stu Robertson takes a look at the first pollyfill that has been created for the srcset attribute and some possible fixes to make it a little better and more future friendly.</p><p><a href="http://www.xanthir.com/blog/b4Hv0">Media Queries Can't Be Used for Resolution Negotiation</a>&nbsp;-&nbsp;an explanation about why media queries can not alone decide what media to use (kind of ironic). &nbsp;This looks at download speeds, latency, and all the issues that go along with the current solution.</p><p><a href="http://cssquirrel.com/blog/2012/05/15/the-egotistical-puppet-king-and-i/">The Egotistical Puppet King &amp; I</a>&nbsp;- If any good came out of this issue it's the fact that the CSS Squirrel is drawing again.</p><p><a href="http://nicolasgallagher.com/responsive-images-using-css3/">Responsive Images using CSS3</a>&nbsp;- Nicolas Gallagher is far to smart for his own good, and he's at it again with another brilliant suggestion. &nbsp;He takes a look at another possible solution that relies on CSS3 rather than the srcset solution. &nbsp;Nicolas also points out the flaws in his approach&hellip; what a nice chap!</p><p><a href="https://gist.github.com/2701939">Some early thoughts on img@srcset in the real world</a>&nbsp;- Scott Jehl says&hellip;. Syntax aside&hellip; if srcset was here to stay regardless of what we want, is there any way we could make it work in existing browsers without introducing unnecessary overhead or potentially buggy markup? At a glance, it looks shaky to me.</p>

<hr />

<section class="related-content"><h3>Related Articles</h3>
<ul>
<li><a href="http://responsivedesign.is/articles/getting-started-with-sass">Getting Started with Sass and Breakpoint Mixin</a></li><li><a href="http://responsivedesign.is/articles/24-ways-to-be-responsive">24 Ways to be Responsive</a></li><li><a href="http://responsivedesign.is/articles/responsive-review-starbucks">Responsive Review: Starbucks</a></li><li><a href="http://responsivedesign.is/articles/web-experience-toolkit-wet-canadian-government">Web Experience Toolkit (WET) - Canadian Government</a></li><li><a href="http://responsivedesign.is/articles/rebuilding-fffunction.co">Rebuilding fffunction.co</a></li>
</ul></section>
<section class="related-content"><h3>Related Resources</h3>
	<ul>
		<li><a href="/develop/css/css3-multiple-columns" title="Vist CSS3 Multiple Columns on ResponsiveDesign.is">CSS3 Multiple Columns</a></li><li><a href="/resources/tutorials/creating-a-mobile-first-responsive-design" title="Vist Creating a mobile-first responsive design on ResponsiveDesign.is">Creating a mobile-first responsive design</a></li><li><a href="/develop/html/am-i-responsive" title="Vist Am I Responsive? on ResponsiveDesign.is">Am I Responsive?</a></li><li><a href="/resources/images/jquery-picture" title="Vist jQuery Picture on ResponsiveDesign.is">jQuery Picture</a></li><li><a href="/resources/images/retina.js" title="Vist Retina.js on ResponsiveDesign.is">Retina.js</a></li>
	</ul></section>
</article>
<!--noindex-->

</div>

<?php include 'parts/footer.php'; ?>

  <?php include 'parts/javascript.php'; ?>
</body>
</html>