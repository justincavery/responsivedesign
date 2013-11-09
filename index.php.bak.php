<?php include 'parts/doctype.php';?>
<body class="home">
	<div class="header">
		<?php include 'parts/header.php';?>
		<?php include 'parts/nav.php';?>

	</div>
	<div class="section">
		<section class="home-slider">
			<ul>
				<li>
					<article class="feature-story">
						<!--  Maybe add this as the new story on the golive of the new site.
						<h1><span>Introduction</span> to responsive web design</h1>
						<p>...the combination of flexible grids, flexible imags and media queries. It allows you to write once, publish every-any-where.</p>-->
						<h1>Secondary Navigation in Responsive Design</h1>
						<p>In this case we had a great desktop design with a single, two and three column layout depending on the content that you were looking at. The single column was the home page, two columns was reserved for this article section and the three columns were for our site reviews and resources sections.</p>
					</article>
				</li>
			</ul>
		</section>
		<section class="news-listing">
			<h2>Latest in RWD's</h2>
			<ul>
				<li><div class="news-item"><h3><a href="#">What content marketers need to know about responsive design</a></h3><date>28/10/2012</date></div></li>
				<li><div class="news-item"><h3><a href="#">What content marketers need to know about responsive design</a></h3><date>28/10/2012</date></div></li>
				<li><div class="news-item"><h3><a href="#">What content marketers need to know about responsive design</a></h3><date>28/10/2012</date></div></li>
			</ul>
			<a href="studios.html" class="button light">Read More</a>
		</section>
	</div>
	<div class="content">
		<section class="home-cta">
		<!-- Not really feeling this section any more,
		<a href="#" ><h2>Responsive Design.is</h2></a>
		-->
		<span>Responsive design is the combination of flexible grids, flexible imags and media queries. It allows you to write once, publish every-any-where.</span>
		</section>
		<!-- Am thinking about revmoving the sections here
		because they are also linked in the main navigation.
		Instead this could be the decision tree to find more information.
	End the decision tree/4 options that already appear in the
	main navigation
-->
		<section class="rwd-sections">
			<p class="large-introduction">If you know the area of responsive design you need more information about then choose from the <a href="design.php">design</a>, <a href="video.php">development</a>, <a href="strategy.php">strategy</a> and <a href="resources.php">resources</a> below. For those that are getting started... we've got some <a href="#introrwd">introductory lessons for you too</a>.</p>
			<div class="row">
			<div class="section-box light">
				<h2>Design</h2>
				<p>A completely different approach is required when tackling a responsive design. Goodbye fixed width canvas of photoshop, hello to a new responsive process.</p>
				<a href="#" class="button light">Learn More</a>
			</div>
			<div class="section-box light">
				<h2>Develop</h2>
				<p>Design is prevelant in the title, but what about the build side of the solution. There are are a lot of development elements to be aware of while building your responsive design website.</p>
				<a href="#" class="button light">Learn More</a>
			</div>
			<div class="section-box light">
				<h2>Strategy</h2>
				<p>Finding support for responsive web design and providing your boss with the stragic benefits of this new shiny way of working is made easier with our list of responsive strategies.</p>
				<a href="#" class="button light">Learn More</a>
			</div>
			<div class="section-box light">
				<h2>Resources</h2>
				<p>Testing tools, bookmarklets, polyfills… find all the tools and resources that you need to help you adapt to all devices with your responsive design website.</p>
				<a href="resources.html" class="button light">Learn More</a>
			</div>
		</div>
		</section>
	<section id="introrwd" class="starting-rwd">
		<p class="large-introduction">Do you hear “RWD” and think Rear Wheel Drive? Maybe you're telling potential clients it's the answer but don't really have a firm grasp on what you've just promised them? Take a look through these 3 introductory areas and get up to speed with the future of the web.</p>
		<div class="row">
			<div class="section-box">
				<h2>What <span>is repsonsive design?</span></h2>
				<p>Responsive design allows your website to adapt to the device your users are viewing it on. It provides you with the capability to write once publish everywhere, meaning less work for you.</p>
				<a href="#" class="button dark">Learn More</a>
			</div>
			<div class="section-box">
				<h2>Why <span>choose repsonsive design?</span></h2>
				<p>The reasons you should move across to responsive design continues to grow. It saves you time, it saves you money, and best of all enables your user to access your content the way they love.</p>
				<a href="#" class="button dark">Learn More</a>
			</div>
			<div class="section-box">
				<h2>How <span>do I implement repsonsive design?</span></h2>
				<p>Responsive design can be achieved in three simple steps. A flexible grid based layout, enable flexible media, and finally the addition of media queries. Lets get started with some detailed instructions.</p>
				<a href="#" class="button dark">Learn More</a>
			</div>
		</div>

		<section class="rwd-sections">
			<p class="large-introduction"><strong>Still not sure what you're looking for?</strong> Then let us help find out...</p>
			<div class="decision-tree">
			</div>
			<!--<blockquote class="homepage-quote">This site gave me the basic understanding of responsive design and started me building my own sites this way,
				now I just come back here to find any tips, tricks or resources that help me when I get stuck.</blockquote>
		  Removed for now until some cool famous web people say nice things.  Are you cool and famous? Are you on the web? Do you have nice things to say? Then get in touch so we can add you here.-->
		</section>

	</div>
	<?php include 'parts/footer.php'; ?>

	<?php include 'parts/javascript.php'; ?>

</body>
</html>
