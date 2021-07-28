<!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- Global Vendor -->
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/vendors/jquery.migrate.min.js"></script>
<script src="assets/vendors/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>

<!-- Components Vendor  -->
<script src="assets/vendors/jquery.parallax.js"></script>
<script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/shuffle/jquery.shuffle.min.js"></script>
<script src="assets/vendors/typedjs/typed.min.js"></script>
<script src="assets/vendors/slick-carousel/slick.min.js"></script>
<script src="assets/vendors/counters/waypoint.min.js"></script>
<script src="assets/vendors/counters/counterup.min.js"></script>

<!-- Theme Settings and Calls -->
<script src="assets/js/global.js"></script>


<!-- Theme Components and Settings -->
<script src="assets/js/vendors/parallax.js"></script>
<script src="assets/js/vendors/carousel.js"></script>
<script src="assets/js/vendors/counters.js"></script>
<script src="assets/js/vendors/magnific-popup.js"></script>
<script src="assets/js/vendors/shuffle.js"></script>
<!-- END JAVASCRIPTS -->

<script src="assets/fade_plugin/fade.js"></script>

<script src="assets/js/toastr.min.js"></script>

<script>
window.fbAsyncInit = function() {
FB.init({
xfbml: true,
version: 'v9.0'
});
};

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s);
js.id = id;
js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>