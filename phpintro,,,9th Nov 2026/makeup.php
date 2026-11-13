<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel=stylesheet>
    <title>Bob's autos</title>
</head>
<body>
    <div class="container">
        <form action="process.php" method="post">
        <table>
            <tr>   <!--tr stands for Table row -->
                <th>item</th>    <!-- th stands for header-->
                <th>Quantity</th>
            <tr>
            <tr>
                <td>Tyre</td>            <!--td is for items below the header -->
                <td><input type="number" name="data1" min=0 max=5000></td>    <!--data1 is is tyhe unique identifier and it will be used for programming -->
            </tr>
            <tr>
                <td>Oil Filter</td>            <!--td is for items below the header -->
                <td><input type="number" name="data2" min=0 max=5000></td>    <!--data1 is is tyhe unique identifier and it will be used for programming -->
            </tr>
            <tr>
                <td>Spark Plug</td>            <!--td is for items below the header -->
                <td><input type="number" name="data3" min=0 max=5000></td>    <!--data1 is is tyhe unique identifier and it will be used for programming -->
            </tr>
            <tr>
                <td>Tyre</td>
                <td>
                    <!--To Create dropdown box -->
                    <select name="mydata">
                    <option value="select option"selected>How did you find Bob's autos</option>
                    <option value="a">Employee</option>
                    <option value="b">Online</option>
                    <option value="c">Google</option>
                    <option value="d">Newspaper</option>
                </td>
            </tr>
            <tr>
            <td><td>
            <td><input type="submit" name="submit" min=0 max=5000></td>
            </tr>
        </table>
</form>
    </div>
</body>
</html>