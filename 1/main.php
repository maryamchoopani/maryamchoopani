<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
php coarse
        </title>
        <script src="common.js" type="text/javascript"></script>
        <link href="styles.css" type="text/css" rel="stylesheet">
        <style>
            .button-red{
                background-color: #F50057;
            }
            .button-green{
                background-color:#558B2F;
            }
            .button-blue{
                background-color:#039BE5;
            }
        </style>
    </head>
        <body>
<button class="button-red" onclick="welcome()">welcome1</button>
<button class="button-green">welcome2</button>
<button class="button-blue">welcome3</button>
<p>
    <?php
    include 'phpone.php';
    $arr=array(1,5,4,66,3);
    arrayNicePrint($arr);?>
</p>
<p>salam</p>
<table>
    <thead>
        <tr>
            <th>title1

            </th>
 <th>title2</th>

        </tr>
    </thead>
    <tr>
        <td>date1</td>
        <td>date2</td>
    </tr>
    <tr>
        <td>date3</td>
        <td>date4</td>
    </tr>
</table>
        </body>
    
</html>