<!-- analytics -->
<script>
/* global ga */
window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments); }; ga.l = +(new Date());
ga('create', '{{ $page->site->analyticsId }}', 'auto');
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- end analytics -->
