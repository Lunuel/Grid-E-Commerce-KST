        <script type="text/javascript">
		$(document).ready(function() {

			var imageHeight = $(".bundle-img-overflow img").height();
		    var bundleimageHeight = $(".bundle-img-overflow").height();
		    var marginImage = imageHeight / 3;
		    $("#gd-card-img-overflow .item").css('margin-top',imageHeight-bundleimageHeight);
		    $("#gd-card-img-overflow .bundle-img-overflow").css('min-height',imageHeight-marginImage);

		    var gridMaxSize = $('.gd-card-col.auto-fit').attr('data-maxwidth');
		    var gridMaxSizeCss = 'repeat(auto-fit,minmax(min-content,' + gridMaxSize +'px))';
		    $('.gd-card-col.auto-fit').css('grid-template-columns',gridMaxSizeCss);

		});
		$(window).resize(function() {

			var imageHeight = $(".bundle-img-overflow img").height();
		    var bundleimageHeight = $(".bundle-img-overflow").height();
		    var marginImage = imageHeight / 3;
		    $("#gd-card-img-overflow .item").css('margin-top',imageHeight-bundleimageHeight);
		    $("#gd-card-img-overflow .bundle-img-overflow").css('min-height',imageHeight-marginImage);

		});

		function toggleText(label,text1,text2) {
			if (label.text() === text1) {
				$(label).text(text2);
			}
			else {
				$(label).text(text1);
			}
			
		}

		 /*Grid with switch Activation*/
		$( "#btn-grid-switch").click(function() {
			var grid = $(".grid-switchable");
			grid.toggleClass("row-items col-items");
			grid.toggleClass("gd-1");
			var state = $("#state-grid-1");
			toggleText(state,'Column','Row')

		});

		$( "#btn-grid-end-row").click(function() {
			var row = $(".grid-switchable");
			row.toggleClass("sm-col-items");
			var state = $("#state-grid-2");
			toggleText(state,'End Column','End Row')
		});		

	</script>

</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script> new WOW().init();</script>



	</body>
</html>