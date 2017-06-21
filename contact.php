<?php
/* Template Name: İletişim */
get_header();
?>
	<div class="site-content">
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
<?php if (have_posts()) : ?>
<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-xs-12">
<?php if (get_option('panel_xkor')!='') { ?>
<?php $xkor = get_option('panel_xkor'); $ykor = get_option('panel_ykor'); ?>
							<div class="kapla">
								<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyCHOxqTSk9rBhL3i_yhJcwH62fDvwSdpjc"></script>
								<script>
									function initialize() {
									  var myLatlng = new google.maps.LatLng(<?php echo $xkor; ?>, <?php echo $ykor; ?>); var mapOptions = { mapTypeId: google.maps.MapTypeId.ROADMAP, zoom: 16,
									  zoomControl: true,
									  scaleControl: false,
									  scrollwheel: false,
									  disableDoubleClickZoom: false,
									  center: myLatlng };
									  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
									  var contentString = '<?php bloginfo('name'); ?>';
									  var infowindow = new google.maps.InfoWindow({
									      content: contentString,
									  });
									  var marker = new google.maps.Marker({
									      position: myLatlng,
									      map: map,
									      title: '<?php bloginfo('name'); ?>'
									  });
									  google.maps.event.addListener(marker, 'click', function() {
									    infowindow.open(map,marker);
									  });
									}
									google.maps.event.addDomListener(window, 'load', initialize);
									</script>
								<div id="map-canvas" style="float:left;width: 100%; height: 250px; overflow:hidden; padding:0px; margin:0px; border:0px;"></div>
							</div>
<?php } ?>
						</div>
						<div class="col-xs-12">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div><!-- main-content -->
	</div><!-- site-content -->
<?php get_footer(); ?>