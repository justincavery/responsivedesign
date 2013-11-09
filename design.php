<?php include 'parts/doctype.php';?>
<body class="articles">
	<div class="header">
		<?php include 'parts/header.php';?>

		<?php include 'parts/nav.php';?>
		 <a class="tablet toggle-subnav" href="#"><span class="nav-bar clearfix"><span aria-hidden="true" data-icon="&#57349;" ></span>Subnav</span></a>
		<ul class="breadcrumbs">
			<li><a href="/"><span aria-hidden="true" data-icon="&#8962;" ></span></a></li>
			<li><a href="#">Articles</a></li>
			<li>2nd navigation in rwd</li>
		</ul>
	</div>
	<div class="content">
		<div class="sub-navigation">

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
  <li><a href="#">Strategy</a></li>
  <li><a href="#">Design</a></li>
  <li><a href="#">Frontend Development</a></li>
  <li><a href="#">Content Strategy</a></li>
  <li><a href="#">Backend Development</a></li>
  <li><a href="#">User Experience</a></li>
  <li><a href="#">??????</a></li>
</ul>
		</div>
		<article class="article">
			<h1>Secondary navigation in responsive design</h1>
<p class="lead">I've previously written about how the design approach for this site was designing responsively desktop first. In that article we talk in detail about the best approach for designers being what they are most comfortable with, however it can lead to a few implementation issues down the road.</p>

<p>In this case we had a great desktop design with a single, two and three column layout depending on the content that you were looking at.  The single column was the home page, two columns was reserved for this article section and the three columns were for our site reviews and resources sections.</p>

<p>A little background before we go on.  I had originally wanted to include secondary navigation on the left hand side partly because that's how I had envisioned the IA and partly because I wanted to show techniques for including that pattern within a responsive site. I find that a lot of the big sites that are content rich and go past a 3 level Information Architecture all have the left hand navigation (sometimes multiple levels) and it's not always straight forward what you should do with it on smaller devices.</p>

<h2>Secondary Navigation Options</h2>

<p>So lets take a look at your options for including a secondary navigation within your responsive design, before we take a look at how we implemented our own.</p>

<h3>Hide</h3>

<p>This is the most <strong>il</strong>advised method of all, but a method none the less. </p>

<h3>Include in main menu</h3>

<p>The secondary navigation is a natural extension of your primary navigation, after all it will only appear once you've landed onto one of the primary menu pages. To make it easier to jump directly to one of your internal pages you could the full IA as part of the main menu.</p>

<p>This implementation is best used when the site is already using a drop down main menu, otherwise it could be confusing for users to be able to access the menu through the mobile viewport but not on desktop version.</p>


<h3>After Content</h3>

<p>The secondary navigation by definition is secondary content and in a linear version of your site it makes sense to include secondary information after your primary content.</p>

<h2>RWD.is secondary navigation</h2>

<p>For this site I decided to run with the off canvas implementation for the secondary content for a few reasons</p>
<ol>
	<li>It was most often tertiary to the main content</li>
	<li>When it was a higher priority it became part of the primary content (landing pages)</li>
	<li>More specific related content was already included below the primary content (related articles, related resources)</li>
</ol>

<p>To achieve this I mimic'd the <a href="http://www.zurb.com/playground/off-canvas-layouts">Zurb Foundation Off Canvas</a> patterns.</p>

<h3>The HTML</h3>
<p>The HTML for the content areas of this site are made up from the following,</p>
<pre  class="language-markup"><code>
&lt;div class="content">
 &lt;div class="sub-navigation">
 &lt;!-- Sub Navigation here -->
 &lt;/div>
 &lt;article class="article">
 &lt;!-- Primary Content here -->
  &lt;/article>
  &lt;div class="related-lists">
  &lt;section class="related-content">
  &lt;!-- Related Content here -->
  &lt;/section>
  &lt;section class="related-content">
  &lt;!-- Related Content here -->
  &lt;/section>
  &lt;section class="related-content">
  &lt;!-- Related Content here -->
  &lt;/section>
  &lt;/div>
&lt;/div>
</code></pre>

<h3>The CSS</h3>

<p>On the largest devices I maintained three columns until everything started to bunch up too much. At that point, just below the 1024px mark I think, I moved the <code>.related-lists</code> below the content by increasing the width to 100% and letting the document flow take care of the rest.</p>

<p>Once the content reached around the 47em width I wanted the content to be the full focus which was where the off canvas layout came into play. The example below is the off canvas as a default approach and changing the layout once the screen is a minimum of 47em.</p>

<pre class="language-css">
<code>
.content {		
  overflow: hidden;
}
.sub-navigation {
  float: left;
  margin-left: -100%;
  z-index:2;
  position: relative;
	}
.article {
  margin-left: 0;
  float: right;
  z-index: 1;
  position: relative;
  padding: 0 2%;
  width: 100%;
}
@media (min-width:47em){
.sub-navigation {
  float: left;
  width: 23.6607142857%;
  margin-right: 1.78571%;
}
.article {
  margin-right: 1.7857142857%;
  width: 57.5892857143%;
  float: left;
}
.mobile-nav {
  display:none;
}
}
@media (min-width: 0em) and (max-width:47em){
.mobile-nav {
  display:block;
}
</code>
</pre>

<p>That took care of the <code>.sub-navigation</code> and pushed it off canvas to the left, but now of course there was no way of displaying that content. I should point out that this is super best practice because I'm hiding something by default and relying on javascript to bring it back into view.  I took this into consideration and decided to flag this and come back to it post launch because</p>
	<ol>
		<li>Everyone that visits this site is likely to have js enabled</li>
		<li>The content isn't <code>display:none;</code> and can still be read by screen readers</li>
		<li>It was better to launch and fix retrospectively than delay</li>
	</ol>
<p>What I should do, and will do, is add no-js to the <code>&lt;html></code> tag and test with modernizr, and then add <code>.no-js .sub-navigation {// other styles}</code> to show the content if javascript has been disabled.</p>

<p>Okay so now we know what <strong>should</strong> happen lets look at how we can show that.</p>

<h3>The Javascript</h3>

<p>Because we want to make two changes to the CSS, push the <code>.article</code> out of the way and let the <code>.sub-navigation</code> come into full view, the best way is to add another style to a parent element and use a selector to target the styles.</p>

<p>Initially I applied this to the <code>.content</code> but I thought that there were some other areas that I might want to target later on so decided to apply it to the <code>&lt;body></code> instead.</p>

<p>As you saw in the CSS I was hiding and showing <code>.mobile-nav</code>, this is the button that will appear when the navigation disappears from view.</p>

<pre class="language-markup">
<code>
&lt;div class="mobile-nav">
  &lt;a class="toggle-subnav" href="#">&lt;span class="nav-bar clearfix">&lt;span aria-hidden="true" data-icon="">&lt;/span>Subnav&lt;/span>&lt;/a>
  &lt;a class="toggle-menu" href="#">&lt;span class="nav-bar clearfix">&lt;span aria-hidden="true" data-icon="☰">&lt;/span>Menu&lt;/span>&lt;/a>
</code>
</pre>

<p>The jQuery is fairly straight forward (I left some foundation naming conventions as way of attribution). You declare the <code>$subnav</code> as the button that should trigger the action, in this case <code>a.toggle-subnav</code> and set to toggle class to <code>subnav-active</code> to the <code>&lt;body></code> element.</p>
<pre class="language-javascript">
<code>			
var $subnav = $('a.toggle-subnav');
  events = 'click.fndtn';
if ($subnav.length > 0) {
  $('a.toggle-subnav').on(events, function (e) {
  e.preventDefault();
  $('body').toggleClass('subnav-active');
  });
}
		</code>
	</pre>
	
<p>Now that clicking on the button now adds/removes the class of <code>.subnav-active</code> to the <code>&lt;body></code> we need to add the CSS that targets those elements </p>

<h3>Bringing it together</h3>

<pre  class="language-css">
	<code>
.subnav-active .sub-navigation {
  margin-left: 0;
}
.subnav-active .article {
  margin-right: -80%;
}
	</code>
</pre>
		</article>
  <?php include 'parts/related-articles.php'; ?>  
	</div>
	<?php include 'parts/footer.php'; ?>

	<?php include 'parts/javascript.php'; ?>

</body>
</html>
