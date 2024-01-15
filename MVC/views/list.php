<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price<td>
    </tr><?php foreach($product as $key=>$value){?>
    <tr>
        <td><?php echo $value['id']?></td>
        <td><?php echo $value['name']?></td>
        <td><?php echo $value['price']?></td>

    </tr>
    <?php }?>
</table>