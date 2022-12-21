<h3>The last hike added :</h3>

<li>
    <?php echo $productLast['name'] . " , " . $productLast['distance'] . " km." ?>
</li>

<h3>The 5 longest hikes :</h3>
<ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <?php echo $product['name'] . " , " . $product['distance'] . " km." ?>
        </li>
    <?php endforeach; ?>
</ul>
