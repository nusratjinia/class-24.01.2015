<!DOCTYPE html>
<html>
<head lang="en"><link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/code.jquery-1.11.2.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title></title>
    <style>
        .sized{
            width: 100px;
            height: auto;
        }
    </style>

    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="container">

    <img class="img-thumbnail sized" src="images/1.jpg">
    <img class="img-thumbnail sized" src="images/2.jpg">
    <img class="img-thumbnail sized" src="images/3.jpg">
    <img class="img-thumbnail sized" src="images/4.jpg">
    <img class="img-thumbnail sized" src="images/5.jpg">
    <img class="img-thumbnail sized" src="images/6.jpg">

    <br>
    <button id="button" clss="btn">next</button>
    <br>

    <img id=frameImage  src="images/1.jpg">



</div>

<script type="text/javascript">
    $(document).ready(function() {
        var i=1;
        setInterval()
        $('#button').click(function () {
            i++;

            var url='images/'+i+'.jpg'
            $('#frameImage').attr('src',url)
            if(i==6){i=0}
        },1000);


    })
</script>

</body>
</html>