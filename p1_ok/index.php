<?php
include "connection.php";
?>

<html>
    <head>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <title>Problema 1</title>
    </head>
    <body>
        <h1>Problema 1</h1>
        <form name="form1" action="" method="post">
            <table>
                <tr>
                    <td>Plecare:</td>
                    <td>
                    <select id="trenuris" onChange="getDestinatiiJQuery()">
                        <option>Select</option>
                        <?php
                            $res = mysqli_query($link, "SELECT DISTINCT plecare FROM curse");
                            while($row=mysqli_fetch_array($res))
                            {
                                ?>
                                <option value="<?php echo $row['plecare']; ?>"><?php echo $row['plecare']; ?></option>
                                <?php
                            }
                            ?>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>
                        Destinatie:
                    </td>
                    <td>
                        <div id="sosired">
                        <select>
                            <option>Select</option>
                        </select>
                        </div>
                    </td> 
                </tr>
            </table>
        </form>
    </body>
</html>