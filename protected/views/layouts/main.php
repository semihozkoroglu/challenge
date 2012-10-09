<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
<title>Promoqube Challenger</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<meta name="author" content="www.promoqube.com"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/validation.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput-1.3.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.uniform.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
<script>
window.fbAsyncInit = function() {
  FB.Event.subscribe('edge.create', function(response) {
       location.reload();
  });
};
</script>
</head>
<body>
	<!-- FB HTML5 -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/tr_TR/all.js#xfbml=1&appId=438883099491250";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
	<!-- #FB HTML5 -->
<div class="overlay"></div>
<div class="loader"><img src="images/loader.gif" alt=""></div>
<!-- Pop-Up Page -->
<div class="popupexternal dnone">
	<div class="popupcontnet">
		<div class="close">
			<img src="images/close.png" alt="">
		</div>
		<div class="popupimage">
			<img src="" alt="">
		</div>
		<div class="popuptext">
			<span>İsim</span>
		</div>
	</div>
</div>

<!-- Katılım Koşulları -->
<div class="popup" id="privacyPopup">
    <a id="close" class="closeText">Kapat</a>
    <h3>"CHALLENGER"<br /> KATILIM KOŞULLARI</h3>
    <div class="termsList">
        <p><span class="number">1.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est. </p>
        <p><span class="number">2.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">3.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est. </p>
        <p><span class="number">4.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">5.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">6.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">7.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">8.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">9.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">10.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">11.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">12.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">13.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">14.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
    </div>
</div>

<div class="wrapper">
	<div class="logo"></div>
	<div class="clear"></div>
	<div class="container">
		<div class="content">

		<?php echo $content; ?>

		</div>
	</div>
	<!-- Footer -->

	<div class="footer">
		<div class="share">
			<a href=""><img src="images/share.png" alt=""></a>
 			<span id="privacyclick"><img src="images/rule.png" alt=""></span>
		</div>
		<div class="pq">
			<a href="http://www.promoqube.com" target="_blank" alt="promoqube"><img src="images/pqlogo.png" alt=""></a>
		</div>
	</div>
</div>
</body>
</html>
