<style>
#canvas{
    height: 200px;
    width: 400px;
}
.gaugeColor{
    width: 50px;
    height: 20px;
    border:.5px black solid;
    margin-top:5px;
}

.triangle-down {
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 15px solid black;
    position: absolute;
    left: 482px;
}
</style>
<div id="content">
    <h1 class="h4 mb-4"> Status Indicator</h1>
        <div class="row"> 
            <div class="col-md-12">
                <div class="card card-body shadow-none">
                    <div class="mx-auto"><canvas id="canvas"> </canvas></div>
                    <div class="row">
                        <div class="col-md-12 col-lg-8 mx-auto">
                            <div class="row mt-4">
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#e60000;"></p> 
                                    <span class="align-item-center">Non Starter</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#ff4d4d;"></p> 
                                    <span class="align-item-center">Status 2</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#ff8080;"></p> 
                                    <span class="align-item-center">Status 3</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#ffb200;"></p> 
                                    <span class="align-item-center">Status 4</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#ffff1a;"></p> 
                                    <span class="align-item-center">Work in progress</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#ffffb3;"></p> 
                                    <span class="align-item-center">Status 6</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#d5ffa1;"></p> 
                                    <span class="align-item-center">Status 7</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#80ff80;"></p> 
                                    <span class="align-item-center">Status 8</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#00e600;"></p> 
                                    <span class="align-item-center">Status 9</span>
                                </div>
                                <div class="col-md-3 d-flex mb-2">
                                    <p class="gaugeColor me-2 mb-0" style="background-color:#00b300;"></p> 
                                    <span class="align-item-center">Completed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-body shadow-none mt-4">
                    <div class="row px-4 py-3">
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#ff0000;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#ff5c5c;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#ffac8c;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <div class="statusColor"></div>
                            <p class="text-center mb-0" style="background-color:#ffb200;"> Status 4</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#fede4a;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#ffff1a;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#ffffb3;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#d5ffa1;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#80ff80;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#00e600;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#00b300;"> Status</p>
                        </div>
                        <div class="col-md-1 px-0">
                            <p class="text-center mb-0" style="background-color:#007200;"> Status</p>
                        </div>
                    </div>
                    <div class="triangle-down"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gauge.js/1.3.6/gauge.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var cont = $('#canvas');
    var gauge = new Gauge(cont.get(0));
    
    var opts = {
        angle: 0.0,
        lineWidth: 0.5,
        // radiusScale: 1,
        pointer: {
        length: 0.45,
        strokeWidth: 0.03,
        color: '#000'
        },
        // staticLabels:{
        // font:"10px segoe ui",
        // labels:[0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
        // fractionDigits:0
        // },
        staticZones: [
            {strokeStyle: "#e60000", min: 0, max: 10}, 
            {strokeStyle: "#ff4d4d", min: 10, max: 20}, 
            {strokeStyle: "#ff8080", min: 20, max: 30}, 
            {strokeStyle: "#ffb200", min: 30, max: 40}, 
            {strokeStyle: "#ffff1a", min: 40, max: 50}, 
            {strokeStyle: "#ffffb3", min: 50, max: 60}, 
            {strokeStyle: "#d5ffa1", min: 60, max: 70},  
            {strokeStyle: "#80ff80", min: 70, max: 80}, 
            {strokeStyle: "#00e600", min: 80, max: 90},
            {strokeStyle: "#00b300", min: 90, max: 100}, 
        ]
    };
    gauge.setOptions(opts);
    gauge.maxValue = 100;
    gauge.animationSpeed = 32;
    gauge.set(75);
</script>