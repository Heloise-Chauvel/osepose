<!-- jQuery CDN -->
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- jQuery local fallback -->
<script>window.jQuery || document.write('<script src="dist/js/jquery-3.2.1.min.js"><\/script>')</script>

<!-- jQuery plugin for countdown needs cdn -->
<script type="text/javascript" src="dist/countdown/jquery.countdown.js"></script>

<!--Required package for bootstrap, need to have fallback -->
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>

<!-- Bootstrap JS CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<!-- Bootstrap JS local fallback -->
<script>if(typeof($.fn.modal) === 'undefined') {document.write('<script src="dist/bootstrap.min.js"><\/script>')}</script>

<!-- Bootstrap CSS local fallback -->
<div id="bootstrapCssTest" class="hidden"></div>

<script>
$(function() {
    if ($('#bootstrapCssTest').is(':visible')) {
        $("head").prepend('<link rel="stylesheet" href="dist/css/bootstrap.min.css">');
        <!--Rating plugin-->
        $("head").prepend('<link href="dist/rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />');
    }
    });
</script>

<script src="assets/js/inscription.js" type="text/javascript"></script>
<script src="assets/js/connexion.js" type="text/javascript"></script>
<script src="assets/js/script.js" type="text/javascript"></script>

