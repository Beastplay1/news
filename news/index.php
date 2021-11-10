<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<!-- <nav>
	<ul>
		<li><a id = "link1" href="file.php?cut=politics">Քաղաքականություն</a></li>
		<li><a id = "link2" href="file.php?cut=law">Իրավունք</a></li>
		<li><a id = "link3" href="file.php?cut=business">Տնտեսություն</a></li>
		<li><a id = "link4" href="file.php?cut=Sports">Սպորտ</a></li>
		<li><a id = "link5" href="file.php?cut=press-digest">Մամուլի տեսություն</a></li>
		<li><a id = "link6" href="file.php?cut=event">Իրադարձային</a></li>
		<li><a id = "link7" href="file.php?cut=culture">Մշակույթ</a></li>
	</ul>
</nav> -->

<form action="file.php">
	<input type="submit" value="Քաղաքականություն" id="link1"> 
	<input type="submit" value="Իրավունք" id="link2"> 

</form>

<script>
	$(function() {
    $('a').click(function(){
    	let link1 = $('#link1').val();
    	let link2 = $('#link2').val();
    	let link3 = $('#link3').val();
    	let link4 = $('#link4').val();
    	let link5 = $('#link5').val();
    	let link6 = $('#link6').val();
    	let link7 = $('#link7').val();
      	
      $.ajax({
        url:'file.php',
        type: 'post',
        data: {},
        success: function() {
        	link1.window.location = "file.php?cut=politics";
        	link2.window.location = "file.php?cut=law";

        }
      });

    });
});
</script>