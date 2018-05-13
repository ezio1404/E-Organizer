<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/fonts/web-fonts-with-css/css/fontawesome-all.min.css">
    <style>
    .media {
    display: inline-block;
    position: relative;
    vertical-align: top;
}

.media__image { display: block; }

.media__body {
  background: rgba(41, 128, 185, 0.7);
  bottom: 0;
  color: white;
  font-size: 1em;
  left: 0;
  opacity: 0;
  overflow: hidden;
  padding: 3.75em 3em;
  position: absolute;
  text-align: center;
  top: 0;
  right: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.media__body:hover { opacity: 1; }

.media__body:after,
.media__body:before {
  border: 1px solid rgba(255, 255, 255, 0.7);
  bottom: 1em;
  content: '';
  left: 1em;
  opacity: 0;
  position: absolute;
  right: 1em;
  top: 1em;
  -webkit-transform: scale(1.5);
  -ms-transform: scale(1.5);
  transform: scale(1.5);
  -webkit-transition: 0.6s 0.2s;
  transition: 0.6s 0.2s;
}

.media__body:before {
  border-bottom: none;
  border-top: none;
  left: 2em;
  right: 2em;
}

.media__body:after {
  border-left: none;
  border-right: none;
  bottom: 2em;
  top: 2em;
}

.media__body:hover:after,
.media__body:hover:before {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  opacity: 1;
}

.media__body h2 { margin-top: 0; }

.media__body p { margin-bottom: 1.5em; }
    </style>
</head>
<body>
<h1>MR Cube</h1>
<div class="media"></div>
<div class="media"><button type="button"  data-toggle="modal" data-target="#exampleModal">

<img alt="" class="media__image" src="http://www.webwinkelsucces.nl/wp-content/uploads/2015/05/1112625-les-outils-de-test-et-d-integration-continue-open-source.jpg" />
<div class="media__body">
<h1>Lees meer</h1>
</div>

</button>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <script src="view/assets/js/jquery.js"></script>
    <script src="view/assets/js/bootstrap.min.js"></script>
</body>
</html>