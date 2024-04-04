<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    All Rights Reserved by Matrix-admin. Designed and Developed by
    <a href="https://www.wrappixel.com">WrapPixel</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/dist/js/jquery.ui.touch-punch-improved.js"></script>
<script src="assets/dist/js/jquery-ui.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="assets/dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="assets/libs/moment/min/moment.min.js"></script>
<script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="assets/dist/js/pages/calendar/cal-init.js"></script>

<script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="assets/dist/js/pages/mask/mask.init.js"></script>
<script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="assets/libs/select2/dist/js/select2.min.js"></script>
<script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!--<script src=" assets/libs/quill/dist/quill.min.js"></script>-->

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.4/dist/quill.js"></script>

<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr("data-control") || "hue",
            position: $(this).attr("data-position") || "bottom left",

            change: function (value, opacity) {
                if (!value) return;
                if (opacity) value += ", " + opacity;
                if (typeof console === "object") {
                    console.log(value);
                }
            },
            theme: "bootstrap"
        });
    });
    /*datwpicker*/
    jQuery(".mydatepicker").datepicker();
    jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true
    });
    let quill = new Quill("#editor", {
        theme: "snow"
    });
    quill.on('text-change', function (delta) {
        const playground = document.querySelector('#playground');


        console.log(quill.editor.root);
        const contents = quill.getContents();
        let html = `<h3>contents</h3>${formatDelta(contents)}`
        if (delta) {
            html = `${html}<h3>change</h3>${formatDelta(delta)}`;
        }
        playground.innerHTML = html;
    });

    function formatDelta(delta) {
        console.log(JSON.stringify(delta.ops, null, 2));
        return `<div>${JSON.stringify(delta.ops, null, 2)}</div>`;
    }

    
</script>
</body>
</html>