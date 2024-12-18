    <div id="content">
        <h1 class="h4 mb-4">Form Control</h1>
        <div class="row"> 
            <div class="col-md-12">
                <div class="card card-body shadow-none">
                    <div class="mb-3">
                        <label for="name">Name </label>
                        <input class="form-control" id="name" type="text">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email address </label>
                        <input class="form-control" id="email" type="email">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password </label>
                        <input class="form-control" id="password" type="password">
                    </div>
                    <div class="mb-3">
                        <label for="textarea">Textarea </label>
                        <textarea class="form-control" id="textarea" rows="3"> </textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="" class="form-control search-bar px-4" required="">
                        <button type="submit" class="btn btn-primary m-0">Search</button>
                    </div>

                    <div class="search-box">
                        <form method="GET" action="">
                            <div class="input-group">
                                <input class="form-control" type="text" name="" id="">
                                <button type="button" class="btn btn-gray position-absolute top-50 translate-middle-y rounded" style="right: 3px;z-index:10;" id="">
                                    <span><i class="bi bi-search"></i></span>
                                </button>
                            </div>  
                        </form>
                    </div>
                </div>
                <div class="card card-body shadow-none mt-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-block bi bi-eyedropper text-white" data-jscolor="{valueElement:'#colorValue'}"></button>
                        <input id="colorValue" class="text-center mx-3" value="0E68B0">
                        <button type="button" class="btn btn-outline-primary" onclick="copyColor()">
                            <i class="bi bi-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyColor() {
            const colorHex = document.getElementById('colorValue').value; 
            navigator.clipboard.writeText(colorHex); 
        }
    </script>
    

