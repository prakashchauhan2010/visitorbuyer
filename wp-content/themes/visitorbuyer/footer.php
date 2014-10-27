<div id="Counter">NUMBER OF VISITORS DELIVERED SO FAR:
  <div id="Count"></div>
</div>
<div id="Btm">
	<a href="#">HOME</a>
	<a href="#">BUY WEBSITE TRAFFIC</a>
	<a href="#">ABOUT US</a>
	<a href="#">FAQ</a>
	<a href="#">BLOG</a>
	<a href="#">CONTACT US</a>
</div>
<script type="text/javascript">
var START_DATE = new Date("Oct 11, 2013 13:00:00"); // put in the starting date here
var INTERVAL = 1; // in seconds
var INCREMENT = 9; // increase per tick
var START_VALUE = 9001; // initial value when it's the start date
var count = 0;

window.onload = function()
{
 var msInterval = INTERVAL * 1000;
 var now = new Date();
 count = parseInt((now - START_DATE)/msInterval) * INCREMENT + START_VALUE;
 document.getElementById('Count').innerHTML = count;
 setInterval("count += INCREMENT; document.getElementById('Count').innerHTML = count;", msInterval);
}
</script>
</body>
</html>