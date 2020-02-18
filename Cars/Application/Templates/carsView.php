<form action="index.php?page=cars" method="POST">
    <select name="producer" >
    <?php foreach( $producers as $producer ): ?>
        <option  value="<?= $producer['producer'] ?>"><?= $producer['producer'] ?></option>
    <?php endforeach ?>
    </select>
    <input type="submit" value="Submit" class="btn btn-grn">
</form>
<table class="table">
    <?php foreach( $cars as $car ): ?>
        <tr>
        <?php for( $i = 1; $i < count($car) / 2; $i++): ?>
       
            <td><?= $car[$i] ?></td>

        <?php endfor ?>
        <td><a href="index.php?page=modifyCar&id=<?= $car[0] ?>">Modify</a></td>
        <td><a href="index.php?page=deleteCar&id=<?= $car[0] ?>">Delete</a></td>
        </tr>
    <?php endforeach ?>
</table>