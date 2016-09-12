<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/09/2016
 * Time: 17:20
 */
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/js/jquery-ui-1.11.1.css">
    <script src="<?=base_url()?>plugins/jQuery/jquery-1.11.1.js"></script>
    <script src="<?=base_url()?>plugins/jQuery/jquery-ui-1.11.1.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#course").autocomplete({
                source: "autoComplete",
                width: 260,
                matchContains: true,
                selectFirst: false
            });
        });
    </script>
</head>
<body>
<div id="content">
    <input type="text" name="course" id="course" class="form-control" />
</div>
</body>
</html>
