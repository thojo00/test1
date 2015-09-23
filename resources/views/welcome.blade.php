<!DOCTYPE html>
<html>
    <head>
        <title>jhgjhg</title><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="well">
                    <form action="" method="postProjj">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well" id="log">hej</div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="well">
                    <img src="http://i-smoke.dk/70-thickbox_default/billig-e-produkterne-vaeske.jpg" style="width:50%"/>
                </div>
            </div>

            <div class="col-md-6">
                <div class="well">
                    <img src="http://i-smoke.dk/70-thickbox_default/billig-e-produkterne-vaeske.jpg" style="width:50%"/>
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-md-3">
                <div class="well"><button class="btn btn-primary" type="submit">click</button></div>
            </div>

            <div class="col-md-3">
                <div class="well"><button class="btn btn-warning" type="submit">here</button></div>
            </div>

            <div class="col-md-3">
                <div class="well">
                    <button class="btn btn-info" type="submit">right</button>
                </div>
            </div>

            <div class="col-md-3">
                <div class="well">
                    <button class="btn btn-success" type="submit">now</button>
                </div>
            </div>

        </div>

    </div>




    </div>
<script>

    $( "button" ).on( "click", function( event ) {


        $("#log").html($(this).text());
    });

</script>

    </body>
</html>
