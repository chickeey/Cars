<section class="update-section">
    <form action="index.php?page=update" method="POST">
        <label for="producer">Producer</label>
        <input id="producer" name="producer" type="text" autofocus value="<?= $car['producer'] ?>">

        <label for="type">Type</label>
        <input id="type" name="type" type="text" value="<?= $car['type'] ?>">

        <label for="vintage">Vintage</label>
        <input id="vintage" name="vintage" type="text" value="<?= $car['vintage'] ?>">

        <label for="fuel">Fuel</label>
        <input id="fuel" name="fuel" type="text" value="<?= $car['fuel'] ?>"> 
        
        <input type="hidden" name="id" value="<?= $car['id'] ?>">   
        
        <input type="submit" value="submit" class="btn btn-grn">
    </form>
</section>