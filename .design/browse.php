
<!DOCTYPE html>
<html>
<head>
<title>SimpleTut - Browse tutorials</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?combine=0" rel="stylesheet">
<link href="projectAssets/css/default.min.css" rel="stylesheet" type="text/css" />

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="projectAssets/js/handlebars-v4.0.10.js"></script>
<script type="text/javascript" src="projectAssets/js/scripts.min.js" defer></script>
</head>

<body>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
google_ad_client: "ca-pub-6387725970957053",
enable_page_level_ads: true
});
</script>

<header>

<div class="logo">
<a href="https://simpletut.com/">
<img src="./projectAssets/graphics/logo.png">
</a>
</div>

<div class="actions">

<nav>
<ul>
<li class="first">
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JH32E9Y3DCFME" target="_blank">
Donate
</a>
</li>
<li class="shortlist">
<div id="watchLater_wrap">
<div class="overlay"></div>
<div class="headline">
Watch later <span class="count">(0)</span>
</div>
<div class="toggle" style="display: none;">
<div class="title">
Saved videos
</div>
<ul>

</ul>
</div>


</div>
</li>
<li class="last mobile">
<span class="menu">

</span>
</li>
</ul>
</nav>

</div>

</header>
<div class="container-fluid">

<aside id="side_col_left">

<div class="main_nav">

<nav>

<ul>
<li class="first">
<a href="https://simpletut.com/"
class="non_active">
Home
</a>
</li>
<li>
<a href="https://simpletut.com//browse.php"
class="active">
Browse tutorials
</a>
</li>
<li class="last">
<a href="https://simpletut.com//contact.php"
class="non_active">
Contact
</a>
</li>
</ul>

</nav>

</div>

<div class="social">
<nav>
<ul>
<li class="first">
<a href="https://www.facebook.com/SimpleTut/" target="_blank" class="fb">
Facebook
</a>
</li>
<li>
<a href="https://twitter.com/simpletut" target="_blank" class="tw">
Twitter
</a>
</li>
<li class="last">
<a href="https://www.youtube.com/user/SimpleTutsOnline" target="_blank" class="yt">
Youtube
</a>
</li>
</ul>
</nav>
</div>

</aside>
<section id="main">

<div class="content">

<div class="google_leaderboard">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SimpleTutv3 Responsive -->
<ins class="adsbygoogle"
style="display:block"
data-ad-client="ca-pub-6387725970957053"
data-ad-slot="5123223580"
data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div class="search">

<div class="wrap">

<div class="form_input">
<input type="text" name="keyword" id="keyword" placeholder="Keyword search">
</div>

<div class="form_button">
<input type="submit" name="search_button" id="search_button">
</div>

</div>

</div>

<div id="videoResults">

<div class="searchControls">

<h1>
<span class="headline">
Browse tutorials
</span>
</h1>

<div class="controls">
<nav>
<ul>
<li>
<a class="prev">Previous</a>
</li>
<li>
<a class="next">Next</a>
</li>
</ul>
</nav>
</div>

</div>

<div class="browseAll_videos" id="html"></div>

</div>

</div>

<footer>

&copy; 2017 SimpleTut. All Rights Reserved.

</footer>

</section>

</div>

<script id="videosTemplate" type="text/x-handlebars-template">

{{#each items }}

<div class="col-md-3">

<div class="videoWrap">

<div class="thumb">
<a href="watch.php?videoID={{id.videoId}}">
<img src="http://img.youtube.com/vi/{{id.videoId}}/maxresdefault.jpg">
</a>
</div>

<a href="watch.php?videoID={{id.videoId}}" class="title">
{{snippet.title}}
</a>

</div>

</div>

{{/each}}

</script>

</body>

</html>