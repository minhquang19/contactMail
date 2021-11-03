<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">Contact Us Package by MQ</h1>
    <div class="container">
    <form class="form-horizontal" role="form" method="post" action="{{route('send')}}">
        @csrf
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="4" name="mess"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Send Email" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12 col-sm-offset-2">
                <! Will be used to display an alert to the user>
            </div>
        </div>
    </form>
    </div>
</body>
</html>
