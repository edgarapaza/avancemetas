<?php
session_start();
//if(isset($_SESSION["administrator"]))
//{
include "header.php";
?>
<div class="col-xs-12 col-sm-9 content">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Title</h3>
    </div>
    <div class="panel-body">
    
      <!-- Jumbotron
      ================================================== -->
      <div class="content-row">
        <h2 class="content-row-title">Jumbotron</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="jumbotron">
              <div class="jumbotron-photo">
                <img src="dist/img/Jumbotron.jpg" />
              </div>
              <div class="jumbotron-contents">
                <h1>Implementing the HTML and CSS into your user interface project</h1>
                <h2>HTML Structure</h2>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <h2>CSS Structure</h2>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="jumbotron">
              <div id="carousel-content-row-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-content-row-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-content-row-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-content-row-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="dist/img/slider1.jpg">
                  </div>
                  <div class="item">
                    <img src="dist/img/slider2.jpg">
                  </div>
                  <div class="item">
                    <img src="dist/img/slider3.jpg">
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-content-row-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-content-row-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
              <div class="jumbotron-contents">
                <h1>Implementing the HTML and CSS into your user interface project</h1>
                <h2>HTML Structure</h2>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <h2>CSS Structure</h2>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Thumbnails
      ================================================== -->
      <div class="content-row">
        <h2 class="content-row-title">Thumbnails</h2>
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img class="img-rounded" src="dist/img/thumbnail-1.jpg">
              <div class="caption text-center">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                <p><a href="#" class="btn btn-warning" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img class="img-rounded" src="dist/img/thumbnail-2.jpg">
            <div class="caption text-center">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
              <p><a href="#" class="btn btn-warning" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img class="img-rounded" src="dist/img/thumbnail-3.jpg">
          <div class="caption text-center">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
            <p><a href="#" class="btn btn-warning" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
          </p>
        </div>
      </div>

      
    </div>

    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-rounded" src="dist/img/thumbnail-4.jpg">
        <div class="caption text-center">
          <h3>Thumbnail label</h3>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
          <p><a href="#" class="btn btn-warning" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</div><!-- panel body -->
</div>
</div><!-- content -->
<?php include "footer.php"; ?>