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

<!-- <form action="file.php" method="post">
	<input type="submit" name="politics" value="Քաղաքականություն" id="link1"> 
	<input type="submit" name="law" value="Իրավունք" id="link2"> 
	<input type="submit" name="business" value="Տնտեսություն" id="link3"> 
	<input type="submit" name="Sports" value="Սպորտ" id="link4"> 
	<input type="submit" name="press-digest" value="Մամուլի տեսություն" id="link5"> 
	<input type="submit" name="event" value="Իրադարձային" id="link6"> 
	<input type="submit" name="culture" value="Մշակույթ" id="link7"> 
</form>
 -->
<?php 
// session_start();
// echo $_SESSION['res'];
 ?>

 <nav>
	<ul>
		<li id = "politics" >Քաղաքականություն</li>
		<li id = "law" >Իրավունք</li>
		<li id = "business" >Տնտեսություն</li>
		<li id = "Sports">Սպորտ</li>
		<li id = "press-digest" >Մամուլի տեսություն</li>
		<li id = "event">Իրադարձային</li>
		<li id = "culture" >Մշակույթ</li>
	</ul>
</nav>
<div id="res">
	
</div>
<script>
	$(function() {
    $('li').click(function(){

      let cut = $(this).attr("id");
      $.ajax({
        url:'file.php',
        type: 'post',
        data: {cut},
        success: function(data) {
        	$('#res').html(data);

        }
      });

    });
});
</script>