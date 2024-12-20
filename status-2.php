<div id="content">
    <h1 class="h4 mb-4"> Status</h1>
        <div class="row"> 
            <div class="col-md-12">
                <div class="card card-body shadow-none">
                    <div class="mx-auto py-4">
                        <div class="gauge four rischio3">
                            <div class="slice-colors">
                                <div class="st slice-item"></div>
                                <div class="st slice-item"></div>
                                <div class="st slice-item"></div>
                                <div class="st slice-item"></div>
                            </div>
                                <div class="needle"></div>
                                <div class="gauge-center">
                                    <div class="label">
                                        RISK
                                    </div>
                                <div class="number">HIGH</div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.gauge {
    /* background: #e7e7e7; */
    /* box-shadow: 0 -3px 6px 2px rgba(0, 0, 0, 0.50); */
    width: 200px;
    height: 100px;
    border-radius: 100px 100px 0 0!important;
    position: relative;
    overflow: hidden;
}
.gauge.min-scaled {
    transform: scale(0.5);
}

.gauge-center {
    content: '';
    color: #fff;
    width: 60%;
    height: 60%;
    background: white;
    border-radius: 100px 100px 0 0!important;
    position: absolute;
    /* box-shadow: 0 -13px 15px -10px rgba(0, 0, 0, 0.28); */
    right: 20%;
    bottom: 0;
    color: #fff;
    z-index:1;
}

.gauge-center .label, .gauge-center .number {display:block; width: 100%; text-align: center; border:0!important;}
.gauge-center .label {font-size:0.75em; opacity:0.6; margin:1.1em 0 0.3em 0;}
.gauge-center .number {font-size:1.2em;}

.needle {
    width: 80px;
    height: 7px;
    background: black;
    border-bottom-left-radius: 100%!important;
    border-bottom-right-radius: 5px!important;
    border-top-left-radius: 100%!important;
    border-top-right-radius: 5px!important;
    position: absolute;
    bottom: -2px;
    left: 20px;
    transform-origin: 100% 4px;
    transform: rotate(0deg);
    /* box-shadow: 0 2px 2px 1px rgba(0, 0, 0, 0.38); */
    display:none;
    z-index:2;
}

.four.rischio1 .needle {animation: fourspeed1 2s 1 both; animation-delay: 1s; display:block;}
.four.rischio2 .needle {animation: fourspeed2 2s 1 both; animation-delay: 1s; display:block;}
.four.rischio3 .needle {animation: fourspeed3 2s 1 both; animation-delay: 1s; display:block;}
.four.rischio4 .needle {animation: fourspeed4 2s 1 both; animation-delay: 1s; display:block;}

.slice-colors {height:100%;}

.slice-colors .st {
    position: absolute;
    bottom: 0;
    width: 0;
    height: 0;
    border: 50px solid transparent;  
}


.four .slice-colors .st.slice-item:nth-child(2) {
    border-top: 50px yellow solid;
    border-right: 50px yellow solid;
    background-color:#00B696;
}

.four .slice-colors .st.slice-item:nth-child(4) {
    left:50%;
    border-bottom: 50px blue solid;
    border-right: 50px blue solid;
    background-color:#ff0000;
}


@-webkit-keyframes fourspeed1 {
	0% {transform: rotate(0);}
  100% {transform: rotate(16deg);}
}

@-webkit-keyframes fourspeed2 {
	0% {transform: rotate(0);}
  100% {transform: rotate(65deg);}
}

@-webkit-keyframes fourspeed3 {
	0% {transform: rotate(0);}
  100% {transform: rotate(115deg);}
}

@-webkit-keyframes fourspeed4 {
	0% {transform: rotate(0);}
  100% {transform: rotate(140deg);}
}

@-webkit-keyframes fourspeed5 {
	0% {transform: rotate(0);}
  100% {transform: rotate(164deg);}
}
</style>