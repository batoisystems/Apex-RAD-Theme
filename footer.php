

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

<!-- Include the latest jstree JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/jstree.min.js"></script>

<!-- Include the Jscolor -->
<script src="https://jscolor.com/release/2.4.6/jscolor.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    // Multi select dropdown
    $(document).ready(function() {
        $(".chosen").chosen();      
    });

    // Sidebar
	$(document).ready(function() {
        $(".sidebar-toggle").click(function() {
            $("#sidebar").toggleClass("toggled");
            $("main").toggleClass("sidebar-on pointer-events-none");
        });
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

    // Testimonial
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
    
    var track_loadnews = 0;
    function loadMore()
    {
        var loading  = false;
        $('#loadicon').html('<i class="fad fa-sync fa-spin me-1"></i>');
        $.getJSON('https://batoihub.radhostbox.com/index.php?ID=30',{'group_no': track_loadnews, 'loadLayoutOne':'y', 'txtSearch':'', 'livestatus':'1', 'endVal':'6'}, 
        function(data)
        {
            $("#listview").append(data.eventreslist);
            if(data.displayLoadMore == 'N')
            {
                $("#loadMoreData").addClass('collapse');
            }
            else
            {
                $("#loadMoreData").removeClass('collapse');
            }
            $('#loadicon').html('<i class="fad fa-arrow-circle-down me-1 "></i>');
            track_loadnews++;
            loading = false; 
        }).fail(function(xhr, ajaxOptions, thrownError)
        {
            $('#loadicon').html('<i class="fad fa-arrow-circle-down me-1 "></i>');
            loading = false;
        });
    }

    // Counter
    function visible(partial) {
        var $t = partial,
            $w = jQuery(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return (
            compareBottom <= viewBottom && compareTop >= viewTop && $t.is(":visible")
        );
    }

    $(window).scroll(function () {
        if (visible($(".purecounter"))) {
            if ($(".purecounter").hasClass("counter-loaded")) return;
            $(".purecounter").addClass("counter-loaded");

            $(".purecounter").each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate(
                { Counter: $this.text() },
                {
                duration: 500,
                easing: "swing",
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
                }
            );
            });
        }
    });
    // End Counter

    $(document).ready(function() {
        var categoriesStructure = [
            {
                "text": "Steel and Minerals",
                "id": "steel-and-minerals",
                "children": [
                    {
                        "text": "Steel Manufacturing",
                        "id": "steel-manufacturing",
                        "children": [
                            { "text": "Integrated Steel Plants", "id": "integrated-steel-plants" },
                            { "text": "Mini Mills", "id": "mini-mills" },
                            { "text": "Foundries", "id": "foundries" },
                            { "text": "Fabrication Plants", "id": "fabrication-plants" }
                        ]
                    },
                    {
                        "text": "Mining and Extraction",
                        "id": "mining-and-extraction",
                        "children": [
                            { "text": "Surface Mining", "id": "surface-mining" },
                            { "text": "Underground Mining", "id": "underground-mining" },
                            { "text": "Quarrying", "id": "quarrying" },
                            { "text": "Ore Processing", "id": "ore-processing" }
                        ]
                    },
                    {
                        "text": "Mineral Processing",
                        "id": "mineral-processing",
                        "children": [
                            { "text": "Beneficiation Plants", "id": "beneficiation-plants" },
                            { "text": "Smelting", "id": "smelting" },
                            { "text": "Refining Facilities", "id": "refining-facilities" }
                        ]
                    }
                ]
            },
            {
                "text": "Metal Fabrication",
                "id": "metal-fabrication",
                "children": [
                    { "text": "Workshops", "id": "workshops" },
                    { "text": "Fabrication Shops", "id": "fabrication-shops" },
                    { "text": "Assembly Lines", "id": "assembly-lines" }
                ]
            },
            {
                "text": "Power Infrastructure",
                "id": "power-infrastructure",
                "children": [
                    {
                        "text": "Electricity Generation",
                        "id": "electricity-generation",
                        "children": [
                            { "text": "Power Plants", "id": "power-plants" },
                            { "text": "Renewable Energy Installations", "id": "renewable-energy-installations" },
                            { "text": "Generators", "id": "generators" }
                        ]
                    },
                    {
                        "text": "Renewable Energy Solutions",
                        "id": "renewable-energy-solutions",
                        "children": [
                            { "text": "Solar Energy Projects", "id": "solar-energy-projects" },
                            { "text": "Wind Energy Projects", "id": "wind-energy-projects" },
                            { "text": "Hydroelectric Projects", "id": "hydroelectric-projects" },
                            { "text": "Biomass Energy Projects", "id": "biomass-energy-projects" }
                        ]
                    },
                    {
                        "text": "Transmission and Distribution",
                        "id": "transmission-and-distribution",
                        "children": [
                            { "text": "High-Voltage Transmission Lines", "id": "high-voltage-transmission-lines" },
                            { "text": "Substations", "id": "substations" },
                            { "text": "Distribution Grids", "id": "distribution-grids" }
                        ]
                    },
                    {
                        "text": "Energy Storage Technologies",
                        "id": "energy-storage-technologies",
                        "children": [
                            { "text": "Battery Storage Systems", "id": "battery-storage-systems" },
                            { "text": "Pumped Hydro Storage", "id": "pumped-hydro-storage" },
                            { "text": "Thermal Storage Solutions", "id": "thermal-storage-solutions" }
                        ]
                    }
                ]
            },
            {
                "text": "Retail",
                "id": "retail",
                "children": [
                    { "text": "Department Stores", "id": "department-stores" },
                    { "text": "Grocery Stores", "id": "grocery-stores" },
                    { "text": "Specialty Stores", "id": "specialty-stores" },
                    { "text": "E-commerce", "id": "e-commerce" },
                    { "text": "Fashion Retail", "id": "fashion-retail" },
                    { "text": "Electronics Retail", "id": "electronics-retail" },
                    { "text": "Furniture Retail", "id": "furniture-retail" }
                ]
            },
            {
                "text": "Food Products",
                "id": "food-products",
                "children": [
                    {
                        "text": "Food Processing",
                        "id": "food-processing",
                        "children": [
                            { 
                                "text": "Nestlé", 
                                "id": "nestle",
                                "children": [
                                    {"text": "Dairy Ingredients", "id": "dairy-ingredients"},
                                    {"text": "Cocoa Processing", "id": "cocoa-processing"}
                                ]
                            },
                            { 
                                "text": "Tyson Foods",
                                    "id": "tyson-foods",
                                "children": [
                                    {"text": "Ready-to-Eat Meals", "id": "ready-to-eat"},
                                    {"text": "Nutritional Products", "id": "nutritional-products"}
                                ]
                                },
                            { "text": "JBS", "id": "jbs" }
                        ]
                    },
                    {
                        "text": "Packaged Foods",
                        "id": "packaged-foods",
                        "children": [
                            { "text": "General Mills", "id": "general-mills" },
                            { "text": "Kraft Heinz", "id": "kraft-heinz" },
                            { "text": "Mondelez International", "id": "mondelez-international" }
                        ]
                    },
                    {
                        "text": "Beverages",
                        "id": "beverages",
                        "children": [
                            { "text": "Coca-Cola Company", "id": "coca-cola-company" },
                            { "text": "PepsiCo", "id": "pepsico" },
                            { "text": "Anheuser-Busch InBev", "id": "anheuser-busch-inbev" }
                        ]
                    },
                    {
                        "text": "Dairy Products",
                        "id": "dairy-products",
                        "children": [
                            { "text": "Danone", "id": "danone" },
                            { "text": "Dairy Farmers of America", "id": "dairy-farmers-of-america" },
                            { "text": "Arla Foods", "id": "arla-foods" }
                        ]
                    }
                ]
            },
            {
                "text": "Plastic and Polyethylene",
                "id": "plastic-and-polyethylene",
                "children": [
                    { "text": "Plastic Manufacturing", "id": "plastic-manufacturing" },
                    { "text": "Polyethylene Production", "id": "polyethylene-production" },
                    { "text": "Recycling and Waste Management", "id": "recycling-and-waste-management" },
                    { "text": "Biodegradable Plastics", "id": "biodegradable-plastics" }
                ]
            }
        ];

        $('#categoriesTreeView').jstree({
            'core': {
                'data': categoriesStructure,
                'themes': {
                    'icons': false // This will remove the folder icons
                }
            },
        }).on('loaded.jstree', function () {
            
            $('#categoriesTreeView').jstree('open_all');

        })
    });
</script>
</body>
</html>