<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<nav>
	<ul >
		<li><a id = "link1" href="file.php?cat=politics">Քաղաքականություն</a></li>
		<li><a id = "link2" href="">Իրավունք</a></li>
		<li><a id = "link3" href="">Տնտեսություն</a></li>
		<li><a id = "link4" href="">Սպորտ</a></li>
		<li><a id = "link5" href="">Մամուլի տեսություն</a></li>
		<li><a id = "link6" href="">Իրադարձային</a></li>
		<li><a id = "link7" href="">Life</a>	</li>
	</ul>
</nav>

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

        }
      });

    });
});
</script>