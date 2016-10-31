<!DOCTYPE html>
<html lang="no">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CLNDR-Idle Calendar</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="moment/moment.js"></script>
    <script src="moment/moment-with-locales.js"></script>

    <link rel="stylesheet" href="CLNDR-master/demo/css/clndr.css">
    <script src="CLNDR-master/src/clndr.js"></script>
    <script src="CLNDR-master/src/clndr.js"></script>

    <script src="CLNDR-master/demo/events-list.js"></script>
    <script src="CLNDR-master/demo/demo.js"></script>

    <style>
      .modal-title {
        background-color: blue;
      }

    </style>
  </head>

  <body>
    <!-- Application info -->
    <div class="">
      <div class="">
        <label>Web calendar events with CLNDR library and Idle Beat Ajax access</label>
      </div>
    </div>

    <!-- Calendar -->
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">
                <label class="caption-label"></label>
              </div>
            </div>
          </div>
        </div>

        <div class="cal1"></div>


      </div>
    </div>

    <script>
      $(".close").click(function(){
        $(".caption-label").empty();
      });
    </script>
  </body>
</html>
