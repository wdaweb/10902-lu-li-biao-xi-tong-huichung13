<h3 class="cent">修改自傳</h3>
<hr>
<?php

?>

<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td style="text-align:right">修改自傳：</td>
            <td><textarea name="text" style="width:300px;height:100px;"></textarea></td>
        </tr>
    </table>
    <div style="width:100px;margin:auto">
        <input type="hidden" name="table" value="autob">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>