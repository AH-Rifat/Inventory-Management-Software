<?php require_once '../lib/_header.php'; ?>

<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Add new product</h3>
            </div>
            <div class="module-body">
                <form class="form-horizontal row-fluid">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Barcode/QR-code</label>
                        <div class="controls">
                            <input type="text" id="basicinput" placeholder="Type Barcode/QR-code here..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Name</label>
                        <div class="controls">
                            <input type="text" placeholder="Type Product Name here..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Category</label>
                        <div class="controls">
                            <div class="dropdown">
                                <a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Select One <i class="icon-caret-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#">First Row</a></li>
                                    <li><a href="#">Second Row</a></li>
                                    <li><a href="#">Third Row</a></li>
                                    <li><a href="#">Fourth Row</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Upload Product Image</label>
                        <div class="controls">
                            <input type="file"  class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Quantity</label>
                        <div class="controls">
                            <input type="number" placeholder="Type Product Quantity here..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Price</label>
                        <div class="controls">
                            <input type="number" placeholder="Type Product Price here..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" value="Save" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once '../lib/_footer.php'; ?>