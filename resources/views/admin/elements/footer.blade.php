
<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
        <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
    </p>

</footer>


<!-- start: JavaScript-->

<script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>
<script src="{{asset('admin/js/modernizr.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.cookie.js')}}"></script>
<script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/excanvas.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.noty.js')}}"></script>
<script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>
<script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>
<script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>
<script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/js/counter.js')}}"></script>
<script src="{{asset('admin/js/retina.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>
<!-- end: JavaScript-->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.3.2/bootbox.min.js')}}"></script>
<script>
    $(document).on("click","#delete",function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you want to delete!", function(confirmed){
            if(confirmed){
                window.location.href = link;
            };
        });
    });
</script>
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
