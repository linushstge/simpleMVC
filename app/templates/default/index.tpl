<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>{$title}</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{file src="css/style.css"}"/>
</head>
<body>

<div class="container">

    <div class="page-header">
        <h1>{$title}</h1>
    </div>

    <p>{$welcome_message}</p>

    <a class="btn btn-md btn-success" href="subpage">
        Open Subpage
    </a>

</div>

<script type="text/javascript" src="{file src="js/jquery.js"}"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>