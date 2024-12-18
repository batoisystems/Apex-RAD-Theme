</main>
<!-- Back to top -->
<div> <a href="#" class="back-top btn btn-primary float-end d-none"><i class="bi bi-arrow-up"></i></a> </div>
<footer class="bar-footer pt-5 pb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4">
                <h6 class="fw-bold text-uppercase bar-footer-pagelinks-parent">Navigations</h6>
                <ul class="list-unstyled mt-3">
                    <li><a href="#" class="hvr-underline-from-left">About</a></li>
                    <li><a href="#" class="hvr-underline-from-left">Jobs</a></li>
                    <li><a href="#" class="hvr-underline-from-left">Events</a></li>
                    <li><a href="#" class="hvr-underline-from-left">Blog</a></li>
                </ui>
            </div>
            <div class="col-6 col-md-4">
                <h6 class="fw-bold text-uppercase bar-footer-pagelinks-parent">Websites</h6>
                <ul class="list-unstyled mt-3">
                    <li><a href="https://www.batoi.com/" target="_blank" class="hvr-underline-from-left">Batoi</a></li>
                    <li><a href="https://bcubeanalytics.com/" target="_blank" class="hvr-underline-from-left">BCube Analytics</a></li>
                    <li><a href="https://timecaptis.com/" target="_blank" class="hvr-underline-from-left">Time Captis</a></li>
                    <li><a href="https://adiipl.com/" target="_blank" class="hvr-underline-from-left">ADII</a></li>
                </ui>
            </div>
            <div class="col-12 col-md-4 text-center">
                <a href="contact" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-right-circle me-1"></i> Contact Us
                </a>
                <div class="my-4">
                    <a href="http://www.facebook.com/batoisystems" target="_blank" class="text-dark ms-0"><i class="bi bi-facebook"></i></a>
                    <a href="https://twitter.com/batoisystems" target="_blank" class="text-dark ms-3"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.instagram.com/batoiinc/" target="_blank" class="text-dark ms-3"><i class="bi bi-instagram"></i></a>
                    <a href="http://www.linkedin.com/company/batoi" target="_blank" class="text-dark ms-3"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="border-bottom pb-2 d-flex align-items-center justify-content-center"></div>
    <div class="mt-4 text-center">
        <div>
            <a href="https://www.batoi.com"><img src="../../cloudspace/pub/image/batoi-logo.png" alt="Logo" class="mb-2 web-logo"></a>
        </div>
        <span>
            Copyright &copy; 2024 Batoi
        </span>
        <span class="mx-2">-</span>
        <span>
            <a href="https://www.batoi.com/about/legal" class="hvr-underline-from-left">Terms & Privacy</a>
        </span>
    </div>
</footer>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Table -->
<script src="https://unpkg.com/jquery-resizable-columns@0.2.3/dist/jquery.resizableColumns.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.20.2/dist/extensions/resizable/bootstrap-table-resizable.min.js"></script>

<!-- <script src="https://www.ashwinirath.com/pub/js/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    // Bootstrap Table
    $(function(){
        $('#myTable').bootstrapTable();
    });

    $(document).ready(function(){
        $("#remove").click(function(){
            $("#apex-header-top").hide();
        });
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
        $('#apex-newClass').addClass('header-sticky');
        } else {
        $('#apex-newClass').removeClass('header-sticky');
        }

        if ($(this).scrollTop() > 50) {
        $('.back-top').addClass('btn-show');
        } else {
        $('.back-top').removeClass('btn-show');
        }
    });

    // Sidebar Arrow
    $(document).on('click', '.custom-dropdown-btn', function() {
        var tag = $(this).find(".custom-dropdown-icon").prop("tagName");
        if (tag == 'SPAN') {
            if ($(this).find(".custom-dropdown-icon i").hasClass("bi-chevron-right")) {
                $(this).find(".custom-dropdown-icon i").removeClass("bi-chevron-right").addClass("bi-chevron-down");
            } else {
                $(this).find(".custom-dropdown-icon i").removeClass("bi-chevron-down").addClass("bi-chevron-right");
            }
        } else {
            if ($(this).find(".custom-dropdown-icon").hasClass("bi-chevron-right")) {
                $(this).find(".custom-dropdown-icon").removeClass("bi-chevron-right").addClass("bi-chevron-down");
            } else {
                $(this).find(".custom-dropdown-icon").removeClass("bi-chevron-down").addClass("bi-chevron-right");
            }
        }
    });

    // Tiny slider
    var sliders = document.querySelectorAll('.apex-testimonial');
    sliders.forEach(function(slider) {
        tns({
            container: slider,
            items: 2,
            gutter: 1,
            slideBy: 1,
            controlsPosition: "bottom",
            navPosition: "bottom",
            mouseDrag: true,
            autoplay: true,
            autoplayButtonOutput: false,
            controlsContainer: "#apex-testimonial-paddles",
            responsive: {
                0: {
                items: 1,
                nav: false
                },
                1200: {
                items: 2
                }
            }
        });
    });

    var slider = tns({
        container: ".apex-slider",
        items: 3,
        gutter: 20,
        slideBy: 1,
        controlsPosition: "bottom",
        navPosition: "bottom",
        mouseDrag: true,
        autoplay: true,
        autoplayButtonOutput: false,
        controlsContainer: "#apex-slider-paddles",
        responsive: {
            0: {
            items: 1,
            nav: false
            },
            768: {
            items: 2,
            nav: true
            },
            1200: {
            items: 3
            }
        }
    });

    // Search
    function openSearch() {
        $(".open-search-bar-btn").addClass("d-none");
        $(".close-search-bar-btn").removeClass("d-none");
        $(".search-box").removeClass("d-none");
    }
    function closeSearch() {
        $(".open-search-bar-btn").removeClass("d-none");
        $(".close-search-bar-btn").addClass("d-none");
        $(".search-box").addClass("d-none");
    }
</script>
</body>
</html>