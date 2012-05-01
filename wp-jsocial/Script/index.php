<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jSocial - Share you website content</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="description" content="Make your websites social with jSocial." />
<meta name="keywords" content="jquery, javascript, jsocial" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="jsocial.js"></script>
<script type="text/javascript">
$().ready(function() { 

	$("#example1").jsocial({
		highlight: true,
		buttons: "nujij,linkedin,ekudos,digg,sphere,technorati,delicious,furl,netscape,yahoo,google,newsvine,reddit,blogmarks,magnolia,live,tailrank,facebook,twitter,stumbleupon,bligg,symbaloo,misterwong,mail", 
		icon_format: 'images/small/%s.gif',
		blanktarget: false
	});
							
	$("#example2").jsocial({
		highlight: true,
		buttons: "technorati,delicious,reddit,facebook", 
		icon_format: 'images/big/%s.png',
		blanktarget: true
	});
							
							
	$("#example3").jsocial({
		highlight: true,
		buttons: "technorati,delicious,reddit,facebook,twitter,linkedin,stumbleupon,digg", 
		icon_format: 'images/pop/%s_down.png',
		icon_hover_format: 'images/pop/%s.png',
		blanktarget: true
	});
													
	$("#example4").jsocial({
		highlight: true,
		buttons: "facebook_horizontal,twitter_horizontal,googleplus_horizontalmedium,linkedin_horizontal"
	});
	
});
</script>
</head>
<body>

<div id="example1"> </div>
<div id="example2"> </div>
<div id="example3"> </div>
<div id="example4"> </div>

</body>
</html>
