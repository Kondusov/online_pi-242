<h1>Таблица shoes</h1>
<p>
<table>
Все записи таблицы.
<div class="bd-example">
<table class="table table-success table-striped">
<thead>
<tr>
<th scope="col"># id</th>
<th scope="col">тип</th>
<th scope="col">размер</th>
<th scope="col">колличество</th>
<th scope="col">действие</th>
</tr>
</thead>
<tbody>
    <?php
        if($data){
            foreach($data as $row){
                $id = $row["id"];
                $type = $row["type"];
                $size = $row["size"];
                $qual = $row["qual"];
                echo("<tr>");
                echo("<th scope='row'>$id</th>");
                echo("<td scope='row'>$type</td>");
                echo("<td scope='row'>$size</td>");
                echo("<td scope='row'>$qual</td>");
                echo("<td scope='row'><form action='send-sklad.php'><input type='hidden' name='id' value=$id><input name='delete' type='submit' value='удалить'></form></td>");
                echo("</tr>");
            }
        }
    ?>
</tbody>
</table>
</div>
</table>
</p>