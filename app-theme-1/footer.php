        </main>
    </div>
</div>

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

<!-- Summernote JS - CDN Link -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<!-- Chosen JS -->
<script type="text/javascript" src="https://www.batoi.com/pub/js/chosen.jquery.min.js"></script>

<!-- Date -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    // Multi select dropdown
    $(document).ready(function() {
        $(".chosen").chosen();      
    });

    // Sidebar
	$(document).ready(function() {
        function updateSidebarToggleColor() {
            if ($(window).width() < 1200) { // Mobile view
                if ($("#sidebar").hasClass("toggled")) {
                    $(".sidebar-toggle i").removeClass("text-primary").addClass("text-secondary");
                } else {
                    $(".sidebar-toggle i").removeClass("text-secondary").addClass("text-primary");
                }
            } else { // Desktop view
                if ($("#sidebar").hasClass("toggled")) {
                    $(".sidebar-toggle i").removeClass("text-secondary").addClass("text-primary");
                } else {
                    $(".sidebar-toggle i").removeClass("text-primary").addClass("text-secondary");
                }
            }
        }
        $(".sidebar-toggle").click(function() {
            $("#sidebar").toggleClass("toggled");
            $("main").toggleClass("sidebar-on pointer-events-none");
            updateSidebarToggleColor();
        });
        updateSidebarToggleColor();
        $(window).resize(updateSidebarToggleColor);
    });

    // Bootstrap Table
    $(function(){
        $('#myTable').bootstrapTable();
    });

    
    // Summernote
    $(document).ready(function() {         
        $('#summernote').summernote({
            placeholder: '',
            height: 300
        });
        $('.dropdown-toggle').dropdown();
    });

    // Sidebar Arrow
    $(document).on('click', '.filter-accordion-btn', function() {
        var tag = $(this).find(".filter-accordion-icon").prop("tagName");
        if (tag == 'SPAN') {
            if ($(this).find(".filter-accordion-icon i").hasClass("bi-chevron-right")) {
                $(this).find(".filter-accordion-icon i").removeClass("bi-chevron-right").addClass("bi-chevron-down");
            } else {
                $(this).find(".filter-accordion-icon i").removeClass("bi-chevron-down").addClass("bi-chevron-right");
            }
        } else {
            if ($(this).find(".filter-accordion-icon").hasClass("bi-chevron-right")) {
                $(this).find(".filter-accordion-icon").removeClass("bi-chevron-right").addClass("bi-chevron-down");
            } else {
                $(this).find(".filter-accordion-icon").removeClass("bi-chevron-down").addClass("bi-chevron-right");
            }
        }
    });

    // File Upload
    $(document).on("click", ".attach-files", function(event) {
        $(".file-upload").click();
    });

    $("#addMoreSkills").click(function () {
        serviceCtgAdd =
            '<div id="row" class="row mt-3"><div class="col-lg-4 col-md-10"> <input type="text" name="d_skill_title[]" id="d_skill_title[]" class="form-control" required value=""></div> <div class="col-lg-2 col-md-2"> <button class="btn btn-lg btn-outline-danger mt-2 mt-md-0" id="removeField" type="button"><i class="bi bi-x-lg"></i></button> </div></div>';

        $('#addMoreField').append(serviceCtgAdd);
    });

    $("body").on("click", "#removeField", function () {
        $(this).parents("#row").remove();
    })

    // Add More Jobs
    function addMoreJobs()
    {
        $("#skill-sets").append(`
            <div class="row mt-3 removeSkill">
                <div class="col-lg-4">  
                    <input type="text" name="d_skill_title[]" id="d_skill_title[]" class="form-control" required value="">
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-lg btn-outline-danger" type="button" id=""><i class="bi bi-x-lg"></i></button>
                </div>
            </div>
        `)
    }
    $(document).on("click", ".removeSkill", function(event) {
        $(this).parent().remove();
    });

    // On click tooltip
    $(function() {
        $(".info-tooltip").tooltip();
    });

    // Date
    flatpickr("#date", {
        dateFormat: "M j, Y", // mm-dd-yyyy format
        onChange: function(selectedDates, dateStr, instance) {
            document.getElementById('formattedDate').textContent = `Selected date: ${dateStr}`;
        }
    });

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