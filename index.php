<html>
    <head>
        <title>Bob's Tires</title>
    </head>
    <body>
        <form action="processorder.php" method="post">
            <table border="0">
                <tr bgbolor="#cccccc">
                    <td width="150">Item</td>
                    <td width="15">Quantity</td>
                </tr>
                <tr>
                    <td>Tires</td>
                    <td align="center"><input type="text" name="tireqty" size="3" maxlength="3" /></td>
                </tr>
                <tr>
                    <td>Oil</td>
                    <td align="center"><input type="text" name="oilqty" size="3" maxlength="3" /></td>
                </tr>
                <tr>
                    <td>Spark Plugs</td>
                    <td align="center"><input type="text" name="sparkqty" size="3" maxlength="3" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Submit Order" /></td>
                </tr>
                <tr>
                    <td>How did you find bob's?</td>
                    <td><select name="find">
                            <option value="a">I'm a regular customer</option>
                            <option value="b">TV Ads</option>
                            <option value="c">Phone</option>
                            <option value="d">Word of mouth</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>