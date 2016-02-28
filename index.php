<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEO Moz Checker</title>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,700' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .moz-checker-body {
            padding-top: 20px;
            padding-bottom: 20px;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .moz-checker-body .title {
            font-size: 40px;
            font-weight: 300;
            color: #483D8B;
        }

        .moz-checker-body .domain {
            font-size: 20px;
            margin-bottom: 25px;
        }

        .moz-checker-body .jumbotron {
            background: #483D8B !important;
            border-radius: 0px;
            padding: 100px;
        }

        .moz-checker-body .header,
        .moz-checker-body .moz-report,
        .moz-checker-body .footer {
            padding-right: 15px;
            padding-left: 15px;
        }

        .moz-checker-body .header {
            padding-bottom: 20px;
            border-bottom: 1px solid #e5e5e5;
        }

        .moz-checker-body .header h3 {
            margin-top: 0;
            margin-bottom: 0;
            line-height: 40px;
        }

        .moz-checker-body .footer {
            padding-top: 19px;
            color: #777;
            border-top: 1px solid #e5e5e5;
        }

        .moz-checker-body .form-control {
            border: 0px;
            background: none;
            border-bottom: 2px solid #FFF;
            border-radius: 0px;
            box-shadow: none;
            color: #FFF;
            font-size: 16px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
        }

        .moz-checker-body .form-control:hover,
        .moz-checker-body .form-control:focus,
        .moz-checker-body .form-control:active,
        .moz-checker-body .form-control:visited,
        {
            box-shadow: none !important;
            border: none !important;
        }

        .moz-checker-body .btn-circle {
            background: none;
            border: 2px solid #FFF;
            color: #FFF;
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 18px;
        }

        .moz-checker-body .panel,
        .moz-checker-body .alert {
            border-radius: 0px;
        }

        .moz-checker-body .panel .panel-heading {
            border-radius: 0px;
            padding: 15px;
            font-size: 12px;
        }

        .moz-checker-body .panel-title {
            text-transform: uppercase;
            font-size: 13px;
        }

        @media (min-width: 768px) {
            .moz-checker-body .container {
                max-width: 730px;
            }
        }

        .moz-checker-body .container-narrow > hr {
            margin: 30px 0;
        }

        .moz-checker-body .jumbotron {
            text-align: center;
            border-bottom: 1px solid #e5e5e5;
        }

        .moz-checker-body .jumbotron .btn {
            padding: 14px 24px;
            font-size: 21px;
        }

        .moz-checker-body .moz-report {
            margin: 40px 0;
        }

        .moz-checker-body .moz-report p + h4 {
            margin-top: 28px;
        }

        @media screen and (min-width: 768px) {
            .moz-checker-body .header,
            .moz-checker-body .moz-report,
            .moz-checker-body .footer {
                padding-right: 0;
                padding-left: 0;
            }

            .moz-checker-body .header {
                margin-bottom: 30px;
            }

            .moz-checker-body .jumbotron {
                border-bottom: 0;
            }
        }
    </style>
</head>

<body class="moz-checker-body">
<div class="container">
    <div class="header clearfix">
        <h2 class="title">SEO Moz Checker</h2>
    </div>

    <div id="message"></div>
    <div class="jumbotron">
        <div class="form-group">
            <input name="url" type="text" id="url" class="form-control" placeholder="Website url">
        </div>
        <br/>
        <button id="checkBtn" class="btn-circle btn-circle-white">Check</button>
    </div>

    <div class="row moz-report" style="display: none;">
        <h2 class="domain">Domain: <span id="uu"></span></h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="panel-title">PAGE AUTHORITY (PA)</h3></div>
                    <div class="panel-body"><span id="upa"></span></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3 class="panel-title">DOMAIN AUTHORITY (DA)</h3></div>
                    <div class="panel-body"><span id="pda"></span></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading"><h3 class="panel-title">MOZ RANK</h3></div>
                    <div class="panel-body"><span id="umrp"></span></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-warning">
                    <div class="panel-heading"><h3 class="panel-title">BACKLINKS</h3></div>
                    <div class="panel-body"><span id="uid"></span></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2016 Moz Checker.</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#checkBtn').click(function () {
                $('.moz-report').hide();
                var url = $('#url').val();
                $('#url').val('');
                $.ajax({
                    type: "POST",
                    url: 'moz.php',
                    data: {url: url},
                    success: function (response) {
                        console.log(response);
                        if (response == 1) {
                            $('#message').html('' +
                                '<div class="alert alert-danger alert-dismissible fade in text-uppercase text-center" role="alert"> ' +
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>' +
                                '</button>Sorry, something went wrong ' +
                                '</div>'
                            ).fadeIn();
                        }
                        else if (response == 2) {
                            $('#message').html('' +
                                '<div class="alert alert-danger alert-dismissible fade in text-uppercase text-center" role="alert"> ' +
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>' +
                                '</button>Please provide the valid domain ' +
                                '</div>'
                            ).fadeIn();
                        }
                        else {
                            response = jQuery.parseJSON(response);
                            $('#uu').html(response.uu);
                            $('#upa').html(response.upa + '/100');
                            $('#pda').html(response.pda + '/100');
                            $('#umrp').html(response.umrp + '/10');
                            $('#uid').html(response.uid);
                            $('.moz-report').fadeIn();
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
