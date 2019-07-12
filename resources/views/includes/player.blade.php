<nav class="navbar">
	<div class="load"></div>
</nav>
<script type="text/javascript">
	function player(arquivo) {
		document.getElementsByClassName('load')[0].innerHTML = "<audio controls><source src='" + arquivo + "' type='audio/mp3'>Your browser does not support the audio element.</audio>";
	}
</script>