    <!-- JavaScript Files -->
	<script type="text/javascript" src="https://www.batoi.com/pub/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.batoi.com/pub/js/ace.min.js"></script>

    <div id="content">
        <h1 class="h4 mb-4">Editor</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body shadow-none">
                    <div class="mb-5">
                        <h2 class="h5">Summernote</h2>
                        <textarea class="form-control" name="summernote" id="summernote" rows="15" placeholder="" required="true"></textarea>
                    </div>

                    <div class="mb-5">
                        <h2 class="h5">Html Editor</h2>
                        <div id="html-editor"></div>
                        <textarea name="" id="" class="form-control d-none" rows="5"></textarea>
                    </div>

                    <div class="">
                        <h2 class="h5">Markdown</h2>
                        <div class="form-group card border-0">
                            <div class="card-header border-0 d-flex align-items-center">
                                <div class="d-block me-2"> 
                                    <i class="bi bi-question-circle text-info" style="cursor:pointer;" data-toggle="tooltip" data-placement="top" title="This is a text block (supports Markdown)"></i>
                                </div>
                                <a href="javascript:void(0);" id="btnCheatSheet" class="text-info ms-auto"><i class="bi bi-info-circle"></i> Help</a>
                            </div>
                            <div class="card-body p-0">
                                <textarea class="form-control input-block" name="d_content'+iBlockCnt+'" id="d_content'+iBlockCnt+'" rows="15"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
//Html Editor
$(document).ready(function() {
    var editor = ace.edit('html-editor', {
        wrap: true,
        showPrintMargin: false
    });
});

// Markdown Cheat Sheet
$("#btnCheatSheet").click(function(){
	$('#modal-head').html('<h4 class="modal-title">Markdown Cheat sheet</h4>');  
	$('#modal-body').html('<code><p>## Basic Syntax</p><p>These are the elements outlined in the original design document. All Markdown applications support these elements.</p><p>## Basic Syntax</p><div class="row"><div class="col-sm-6 border-right">### Heading<br /># H1<br />## H2<br />### H3</p><p>### Bold<br />**bold text**</p><p>### Italic<br />*italicized text*</p><p>### Blockquote<br />>blockquote</p><p>### Ordered List<br />1.First item<br />2.Second item</p><p>### Unordered List<br />- First item<br />- Second item</p><p>### Strikethrough<br />~~The world is flat.~~</p><p>### Heading ID<br />### My Great Heading {#custom-id}</p></div><div class="col-sm-6"><p>### Code<br />`code`</p><p>### Horizontal Rule<br />---</p><p>### Link<br />[title](https://www.example.com)</p><p>### Image<br />![alt text](image.jpg)</p><p>### Footnote<br />[^1]: This is the footnote.</p><p>### Task List<br />- [x] Write the press release<br />- [ ] Update the website<br />- [ ] Contact the media</p><p>### Table<br />| Syntax | Description |<br />| ----------- | ----------- |<br />| Header | Title |<br />| Paragraph | Text |</p></div></div></code>'); 
	$('#modal-footer').html('<button type="button" class="btn btn-primary" id="ok-btn"><i class="bi bi-arrow-right-circle me-1"></i> Ok</button>');  
	$('#custom-modal').modal('show');
	$('#ok-btn').on('click', function() 
	{ 
		$('#custom-modal').modal('toggle');
	});
});

// Tooltip
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})
</script>
<!-- modal-dialog -->  
<div class="modal fade" tabindex="-1" role="dialog" id="custom-modal">  
	<div class="modal-dialog modal-md" role="document">  
		<div class="modal-content">  
			<!-- modal-header -->  
			<div class="modal-header" id="modal-head"></div>  
			<!-- modal-body -->  
			<div class="modal-body" id="modal-body"></div>  
			<!-- modal-footer -->  
			<div class="modal-footer" id="modal-footer"></div>  
		</div>  
	</div>  
</div> 


