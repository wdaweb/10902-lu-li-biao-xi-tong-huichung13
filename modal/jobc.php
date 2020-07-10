<h3 class="cent">新增求職條件</h3>
<hr>
<?php

?>

<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td style="text-align:right">求職條件</td>
            <td><textarea name="text" style="width:300px;height:100px;"></textarea></td>
        </tr>
    </table>
    <div style="width:100px;margin:auto">
        <input type="hidden" name="table" value="jobc">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>