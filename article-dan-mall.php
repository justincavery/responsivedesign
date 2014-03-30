<?php include 'parts/doctype.php';?>
<body class="articles">
	<div class="header">
		<?php include 'parts/header.php';?>
		<?php include 'parts/nav.php';?>
		<a class="tablet toggle-subnav" href="#"><span class="nav-bar clearfix"><span aria-hidden="true" data-icon="&#57349;" ></span>Subnav</span></a>
		<ul class="breadcrumbs">
			<li><a href="/"><span aria-hidden="true" data-icon="&#8962;" ></span></a></li>
			<li><a href="articles.php">Articles</a></li>
			<li>Interview with Dan Mall</li>
		</ul>
	</div>
	<div class="content">


						


<!--endnoindex-->

		<article class="article" role="main">
<header>
<h1>Interview with Eitan Konigsburg — New York Times</h1>

<p></p><figure><img src="http://responsivedesign.is/__data/assets/image/0011/4160/NYT.jpg" alt="New York Times RWD">&nbsp;
<figcaption>New York Times have gone responsive, and we're lucky enough to hear from one of their Front End Devs working on the project.</figcaption></figure><p></p><hr><p class="lead">Eitan Konisburg is a Frontend Software Architect for the New York Times and was recently involved in the responsive redevelopment project. Eitan was kind enough to answer a few questions and share his experience with us all.</p>

</header>
<aside class="article-metadata">
	<h1>Details</h1>
<ul>
  <li><span>Author:</span> Justin Avery</li>
  <li><span>Published:</span> 21 Mar 2014</li>
  <li><span>Tags:</span>Implementation; Workflow; Performance; Progressive Enhancement; Content; CSS; UX</li>
 <li><span>Category:</span> <a href="/search?collection=responsive-design-live&amp;query=Interview&amp;collection=responsive-design-live&amp;scope=-css-tricks.com%2C-mobile.smashingmagazine.com&amp;f.Section|Section=article">Interview</a></li>
</ul>

<!-- add social icons -->

<ul class="socialcount socialcount-small like js grade-a activate-on-hover" data-url="http://responsivedesign.is/articles/interview-with-eitan-konigsburg-new-york-times" data-share-text="Eitan Konisburg is a Frontend Software Architect for the New York Times and was recently involved in the responsive redevelopment project.">
	<li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=http://responsivedesign.is/articles/interview-with-eitan-konigsburg-new-york-times" title="Share on Facebook"><span class="count">Like</span></a></li>
	<li class="twitter"><a href="https://twitter.com/intent/tweet?text=http://responsivedesign.is/articles/interview-with-eitan-konigsburg-new-york-times" title="Share on Twitter"><span class="count">Tweet</span></a></li>
	<li class="googleplus"><a href="https://plus.google.com/share?url=http://responsivedesign.is/articles/interview-with-eitan-konigsburg-new-york-times" title="Share on Google Plus"><span class="count">+1</span></a></li>
</ul>

</aside>

<h3>You've been at the NYT for a few years now, can you tell us about your background before the NYT and how your role has changed over the years and what your main role is now?</h3><p>Before The New York Times, I was studying Computer Science at Columbia University. I joined The Times as an entry-level employee in 2006 as a server-side application developer. After a couple of years of writing applications in a proprietary programming language, I discovered that configuring middleware and working on the backend wasn't for me. So I made the jump over to client-side web development. Today, I'm a Frontend Software Architect where I focus on keeping&nbsp;<a href="http://nytimes.com">nytimes.com</a>&nbsp;functional, fast, and future-ready.</p><h3>Were there any lessons that you learned from your server side application development that have helped you be a better fronted architect?</h3><p>I was fortunate to get started on the server-side at a time when backend performance was a major focus and I learned a lot about architecting systems to be reliable and fast. So when Steve Souders comes along and demonstrates to us that the frontend has become the major performance bottleneck, that message really resonated with me. I also admired people who would encourage frontend developers to learn how the browser really worked in order to discover techniques to help speed up our sites.&nbsp;</p><p>I've found that my familiarity with server-side systems helped me better understand the browser, which has become more of a platform every day. As browsers gain functionality that traditionally is provided by an Operating System, I think that server-side experience will start to become very handy when working client-side.</p><h3><strong>You've recently undergone a fundamental redesign at the New York Times. How long was that in the pipeline for?</strong></h3><p>This was a huge project for us, not just in terms of the UI changes that everyone can see, but also in the technology stack that powers it behind the scenes. As you may imagine, starting over with new systems and code for a site of our size isn't an easy or short process. The intent of our work on the redesign was to build a solid foundation for projects going forward so this is just the beginning and an ongoing process.&nbsp;</p><h3>Was it always intended to be a full stack overhaul, UI/UX/Design as well as the backend technology? Or did one beget the other?</h3><p>I think it became pretty clear early on that both would have to happen together. While the earliest interest in redesigning came first, we were granted the amazing opportunity to redo the technology stack soon after. We wanted to get to a place where we could make further iterations to the site in less time and we couldn't do that with our old stack.&nbsp;</p><h3>You've gone big and content focussed on the site, while still allowing for comments, related stories, huge images and such... did you set yourselves a performance budget when undertaking the project? What are the things you've done to ensure it's still performant across various devices?</h3><p>While we had set a performance goal for the project, there wasn't a specific budget for various features. The technology overhaul allowed us to make some big performance improvements by simply adhering to fundamental techniques such as combining files and deferring script execution. The goal was to get to the "page ready" event to fire as soon as possible and load everything else after that.</p><p>Our new technology stack allows us to tweak our pages as a whole and with less delay, so as the performance profile changes, we will be able to adjust accordingly. For various reasons, we weren't able to do that before. We keep a close eye on our page performance and now that the barriers to making changes have been lowered and the big-ticket items are in place, we can focus on more targeted optimizations to make further improvements.</p><h3>I hear a lot of people ask what the "Performance Budget" should be. 500kb, 900kb, 1Mb, 1.5.... what did your team decide on? Was there any reasoning behind this?</h3><p>In our specific case, we weren't really able to set an exact budge that we wanted to aim for. This technology overhaul was such a dramatic change from what came before that we weren't really sure what kind of constraints to set. Instead, we took a relative goal of trying to be faster than our previous design by a certain percentage. While I'm happy with the performance profile of where we ended up, we now have a baseline against which we can set some goals.&nbsp;</p><h3>It sounds like you made a tonne of performance improvements. Could you share a few key updates you made that you would recommend? Either for large scale sites such as this or standard improvements for even a simple site?</h3><p>The biggest improvement for us was figuring out a way to take our advertisements out of the page-load flow and load them asynchronously. (I recently wrote about our ad optimizations on our&nbsp;<a href="http://open.blogs.nytimes.com/2014/03/07/stopping-ads-from-slowing-down-nytimes-com">Open blog</a>.)&nbsp;</p><p>This allowed us to serve our primary content first followed by everything else. We've also implemented a lot of the features in JavaScript, so having an asynchronous script loader helps keep blocking to a minimum. We also found that reducing the number of resources that page had to download led to bigger performance gains than reducing the size of those resources.</p><h3>Could you share how you worked, things that worked well and things that you might change if you could go back</h3><p>The team used the Scrum methodology to manage the development of the project, and I think it was the first project of this magnitude at The New York Times to do so.&nbsp;</p><p>I think it was really important for everyone to be on the same page with regard to overall status, and it was super helpful to have the sprints to help us figure out when to set our milestones. However, I think this may end up being a unique situation that might not get repeated as we've focused on allowing more iterative improvements instead of developing everything all at once.&nbsp;</p><p>The project management and development teams did an excellent job and we hit all our internal milestones which led to a very smooth launch day. This project also included integrations by other departments and I think we did pretty well at coordinating and accommodating all interested parties.</p><h3>If you could pick one aspect of the front end implementation that your most proud of, what would it be?</h3><p>I'm incredibly thrilled that our "page manager" turned out to be extremely helpful.&nbsp;</p><p>We needed an object that would handle page-level functionality (such as reading meta tags, query string and/or hash parameters, event handlers such as scroll or resize, etc) and one that also served as the hub through which all modules can communicate with each other. We wanted to avoid modules registering the same event handlers or accessing the DOM to get the same information.&nbsp;</p><p>We also wanted to allow modules to stay loosely-coupled and emit events that other modules can listen for and react accordingly. For the first time, our JS modules could work together and be aware of each other instead of sitting in isolation. This is a really handy thing to have on our pages.</p><hr><p>A huge thank you to New York Times and in particular Eitan for sharing his experiences with us.</p>

<hr>
<!-- Insert Disqus Comments -->

    <div id="disqus_thread"><iframe id="dsq-2" data-disqus-uid="2" allowtransparency="true" frameborder="0" tabindex="0" title="Disqus" width="100%" src="http://disqus.com/embed/comments/?base=default&amp;disqus_version=9fd2841e&amp;f=responsivedesignis&amp;t_i=4156&amp;t_u=http%3A%2F%2Fresponsivedesign.is%2Farticles%2Finterview-with-eitan-konigsburg-new-york-times&amp;t_e=Interview%20with%20Eitan%20Konigsburg%20%E2%80%94%20New%20York%20Times&amp;t_d=Interview%20with%20Eitan%20Konigsburg%20%E2%80%94%20New%20York%20Times&amp;t_t=Interview%20with%20Eitan%20Konigsburg%20%E2%80%94%20New%20York%20Times&amp;s_o=default#2" scrolling="no" horizontalscrolling="no" verticalscrolling="no" style="width: 100% !important; border: none !important; overflow: hidden !important; height: 321px !important;"></iframe></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'responsivedesignis'; // required: replace example with your forum shortname
    var disqus_identifier = '4156';
    var disqus_title = 'Interview with Eitan Konigsburg — New York Times';
    var disqus_url = 'http://responsivedesign.is/articles/interview-with-eitan-konigsburg-new-york-times';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the &lt;a href="http://disqus.com/?ref_noscript"&gt;comments powered by Disqus.&lt;/a&gt;</noscript>
    


<!-- End Disqus Comments -->

<hr>

<section class="related-content"><h3>Related Articles</h3>
<ul>
<li><a href="http://responsivedesign.is/articles/getting-started-with-sass">Getting Started with Sass and Breakpoint Mixin</a></li><li><a href="http://responsivedesign.is/articles/rebuilding-fffunction.co">Rebuilding fffunction.co</a></li><li><a href="http://responsivedesign.is/articles/rwd-build-review-bed-supper-club">RWD Build Review: Bed Supper Club</a></li><li><a href="http://responsivedesign.is/articles/rwd-weekly-92">RWD Weekly #92</a></li><li><a href="http://responsivedesign.is/articles/a-responsive-interview-with-ethan-marcotte">A Responsive Interview with Ethan Marcotte</a></li>
</ul></section>
<section class="related-content"><h3>Related Resources</h3>
	<ul>
		<li><a href="/resources/videos/atomic-design" title="Vist Atomic Design on ResponsiveDesign.is">Atomic Design</a></li><li><a href="/resources/software/codekit" title="Vist Codekit on ResponsiveDesign.is">Codekit</a></li><li><a href="/resources/tutorials/build-a-responsive-site-in-a-week-images-and-video-part-3" title="Vist Build a responsive site in a week: images and video (part 3) on ResponsiveDesign.is">Build a responsive site in a week: images and video (part 3)</a></li><li><a href="/resources/books/adaptive-web-design" title="Vist Adaptive Web Design on ResponsiveDesign.is">Adaptive Web Design</a></li><li><a href="/develop/css/css3-multiple-columns" title="Vist CSS3 Multiple Columns on ResponsiveDesign.is">CSS3 Multiple Columns</a></li>
	</ul></section>
</article>
<!--noindex-->



</div>
		<?php include 'parts/footer.php'; ?>

	<?php include 'parts/javascript.php'; ?>
</body>
</html>
