<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<?php if (!isset($_SESSION['user_id'])) {
?>
  <script>
    window.location.href = "/";
  </script>
<?php
} ?>

<?php

if (isset($_POST['upload_product'])) {
  extract($_POST);
  $submit = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cartzilla | Add New Product</title>
  <?php include('links-page/links-page.php'); ?>
  <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
</head>

<body class="toolbar-enabled">
  <?php include('main-page/header-page.php'); ?>
  <?php include('main-page/sell-page.php'); ?>
  <div class="container mb-5 pb-3">
    <div class="bg-light box--lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <?php include('main-page/aside-page.php'); ?>
        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
            <!-- Title-->
            <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
              <h2 class="h3 py-2 mr-2 text-center text-sm-left">Add New Product</h2>
              <div class="py-2">
                <select class="custom-select mr-2" id="unp-category">
                  <option>Select category</option>
                  <option>Photos</option>
                  <option>Graphics</option>
                  <option>UI Design</option>
                  <option>Web Themes</option>
                  <option>Fonts</option>
                  <option>Add-Ons</option>
                </select>
              </div>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="uploadPro" class="needs-validation pb-2" method="post" novalidate>

              <div class="row">
                <div class="col-md-6 form-group pb-2 ">
                  <label class="font-weight-medium" for="unp-product-name font-weight-bold">Category<span class="text-danger">*</span></label>
                  <select class="multiple-select col-md-12" name="multiple_select" multiple="multiple" title="Select your category">

                  <ul class="select2-selection__rendered">
                  <span class="select2-selection__clear" title="Remove all items" data-select2-id="145">×</span>
                    <option value="1">Templates</option>
                    <option value="2">UI Kits</option>
                    <option value="3">Icons</option>
                    <option value="4">Illustrations</option>
                    <option value="5">Themes</option>
                    <option value="6">Fonts</option>
                    <option value="7">Mockups</option>
                    <option value="8">Logos</option>
                    <option value="9">Flyers</option>
                    <option value="10">Resumes</option>
                    <option value="11">Social Media Posts</option>
                    <option value="12">Presentations</option>
                    <option value="13">Email Templates</option>
                    <option value="14">Certificates</option>
                    <option value="15">Business Cards</option>
                    </ul>
                  </select>
                </div>
                <div class="col-md-6 form-group  pb-2">
                  <label class="font-weight-medium" for="unp-product-name font-weight-bold">Industry<span class="text-danger">*</span></label>
                  <select class=" col-md-12 multiple-select" name="multiple_select2" multiple="multiple" title="Select your industry"placeholder="Select your industry">
                    <option value="19">iOS UI Kits</option>
                    <option value="18">Web UI Kits</option>
                    <option value="20">Android UI Kits</option>
                    <option value="21">Other UI Kits</option>
                  </select>
                </div>
              </div>
              <div class="form-group pb-2">
                <label class="font-weight-medium" for="unp-product-name">Product Title<span class="text-danger">*</span></label>
                <input class="form-control " type="text" id="unp-product-name" name="product_title" placeholder="Your product title" required><small class="form-text text-muted">Maximum 100 characters. No HTML or emoji allowed.</small>
                <div class="invalid-feedback">Please wirte your message!</div>
              </div>
              <div class="cz-file-drop-area form-group">
                <div class="cz-file-drop-icon czi-cloud-upload"></div><span class="cz-file-drop-message">Drag and drop here to upload product screenshot<span class="text-danger">*</span></span>
                <input class="cz-file-drop-input" type="file" name="product_file">
                <button class="cz-file-drop-btn btn btn-primary btn-sm mb-2 btn-shadow" type="button">Or select file</button><small class="form-text text-muted">1000 x 800px ideal size for hi-res displays</small>
              </div>
              <div class="form-group py-2">
                <label class="font-weight-medium" for="unp-product-description">Product description<span class="text-danger">*</span></label>

                <!-- <textarea class="form-control" rows="6" id="unp-product-description"></textarea> -->
                <textarea class="form-control" name="editor" id="editor" cols="30" rows="10 " name="product_description"></textarea>

                <div class="bg-secondary p-3 font-size-ms rounded-bottom"><span class="d-inline-block font-weight-medium mr-2 my-1">Markdown supported:</span><em class="d-inline-block border-right pr-2 mr-2 my-1">*Italic*</em><strong class="d-inline-block border-right pr-2 mr-2 my-1">**Bold**</strong><span class="d-inline-block border-right pr-2 mr-2 my-1">- List item</span><span class="d-inline-block border-right pr-2 mr-2 my-1">##Heading##</span><span class="d-inline-block">--- Horizontal rule</span></div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <label class="font-weight-medium" for="unp-standard-price">Standard license price<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="czi-dollar"></i></span></div>
                    <input class="form-control" type="text" id="unp-standard-price" value="15"name="product_price1">
                  </div><small class="form-text text-muted">Average marketplace price for this category is $15.</small>
                </div>
                <div class="col-sm-6 form-group">
                  <label class="font-weight-medium" for="unp-extended-price">Extended license price<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="czi-dollar"></i></span></div>
                    <input class="form-control" type="text" id="unp-extended-price" value="150" name="product_price2">
                  </div><small class="form-text text-muted">Typically 10x of the Standard license price</small>
                </div>
              </div>
              <div class="form-group py-2">
                <label class="font-weight-medium" for="unp-product-name">Product tags<span class="text-danger">*</span></label>
                <textarea class="form-control" rows="1" id="unp-product-name" name="product_tags" placeholder="Write your tags"></textarea><small class="form-text text-muted">Up to 10 keywords that describe your item. Tags should all be in lowercase and separated by commas.</small>
                <div class="invalid-feedback">Please wirte your message!</div>
              </div>
              <div class="form-group pb-2">
                <label class="font-weight-medium" for="unp-product-files">Product files for sale<span class="text-danger">*</span></label>
                <div class="custom-file">
                  <input class="custom-file-input" type="file" id="unp-product-files" name="product_file2">
                  <label class="custom-file-label" for="unp-product-files">Upload .zip</label>
                </div><small class="form-text text-muted">Maximum file size is 150 MB</small>
              </div>
              <div class="row">
                <div class="col-md-6 form-group pb-2 ">
                  <label class="font-weight-medium" for="unp-product-name font-weight-bold">Work with<span class="text-danger">*</span></label>
                  <select class="multiple-select-2 col-md-12" name="product_work" multiple="multiple" title="Select your category">
                    <option value="1">3DS Max, photoshop, illustrator</option>
                    <option value="0">Affinity Designer</option>
                    <option value="2">After Effects</option>
                    <option value="3">Affinity Photo</option>
                    <option value="4">Illustrations</option>
                    <option value="5">Android Studio</option>
                    <option value="6">AngularJs</option>
                    <option value="7">Angular Material</option>
                    <option value="8">Axure RP</option>
                    <option value="9">Balsamiq</option>
                    <option value="10">Blender</option>
                    <option value="11">Bootstrap</option>
                    <option value="12">Cinema 4d</option>
                    <option value="13">D3.js</option>
                    <option value="14">Figma</option>
                    <option value="15">Fireworks</option>
                    <option value="16">Flinto</option>
                    <option value="17">Framer</option>
                    <option value="18">GIMP</option>
                    <option value="19">Gravit Designer</option>
                    <option value="20">HTML</option>
                    <option value="21">Illustrator</option>
                    <option value="22">InDesign</option>
                    <option value="23">Inkscape</option>
                    <option value="24">InVision Studio</option>
                    <option value="25">Ionic</option>
                    <option value="26">Java</option>
                    <option value="27">JavaScript</option>
                    <option value="28">Joomla</option>
                    <option value="29">jQuery</option>
                    <option value="30">Keynote</option>
                    <option value="30">Kotlin</option>
                    <option value="31">Less</option>
                    <option value="32">Marvel</option>
                    <option value="33">Materialize</option>
                    <option value="34">Material UI</option>
                    <option value="35">Origami</option>
                    <option value="36">Photoshop</option>
                    <option value="37">PHP</option>
                    <option value="38">Pixate</option>
                    <option value="39">PowerPoint</option>
                    <option value="40">PrestaShop</option>
                    <option value="41">Principle</option>
                    <option value="42">React</option>
                    <option value="43">React Native</option>
                    <option value="44">Sass</option>
                    <option value="45">SCSS</option>
                    <option value="46">Shopify</option>
                    <option value="47">Sketch</option>
                    <option value="48">Wordpress</option>
                    <option value="50">Adobe XD</option>
                  </select>
                </div>
                <div class="col-md-6 form-group  pb-2">
                  <label class="font-weight-medium" for="unp-product-name font-weight-bold">File type<span class="text-danger">*</span></label>
                  <select class=" col-md-12 multiple-select-2" name="product_type" multiple="multiple" title="Select your industry">
                    <option>AI</option>
                    <option>EPS</option>
                    <option>PSD</option>
                    <option>JPG,JPEG</option>
                    <option>PNG</option>
                    <option>GIF</option>
                  </select>
                </div>
              </div>
              <div class="form-group pb-2">
                <label class="font-weight-medium" for="unp-product-name">Demo URL<span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="unp-product-name" name="product_url"placeholder="Your Youtube URL, Facebook URL and more"><small class="form-text text-muted">Youtube, Facebook, Instagrm, Twitter, Linkdin and More</small>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" name="upload_product" id="uploadPro" type="submit"><i class="czi-cloud-upload font-size-lg mr-2"></i>Upload Product</button>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
  <?php include('main-page/footer-page.php'); ?>
  <?php include('main-page/phone-devices.php'); ?>

  <!-- Vendor scrits: js libraries and plugins-->

  <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="vendor/select2/dist/js/select2.min.js"></script>
  <script src="js/theme.min.js"></script>
  <!-- Main theme script-->

  <script>
    CKEDITOR.replace("editor");
  </script>

  <script>
    $(".multiple-select").select2({
      maximumSelectionLength: 1

    });
  </script>
  <script>
    $(".multiple-select-2").select2({
      maximumSelectionLength: 2

    });
  </script>
  <script>
    jQuery('#uploadPro').submit(function() {
      event.preventDefault();
      window.location.href = "#";
    });
  </script>
</body>

</html>