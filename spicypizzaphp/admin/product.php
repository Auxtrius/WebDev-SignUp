<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Product';
    $products_page = 'active';
    require_once('../includes/head.php')
?>
<body>
<?php
    require_once('../includes/header.admin.php')
?>
    <main>
        <div class="container-fluid">
            <div class="row">
            <?php
                require_once('../includes/sidebar.php')
            ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">
                    <h2 class="h3 brand-color pt-3 pb-2">Products</h2>
                    <div class="table-responsive overflow-hidden">
                        <div class="row g-2 mb-2 m-0">
                            <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                                <select name="category" id="category" class="form-select me-md-2">
                                    <option value="">All Category</option>
                                    <option value="Pizza">Pizza</option>
                                    <option value="Refreshment">Refreshment</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
                                <select name="Availability" id="availability" class="form-select me-md-2">
                                    <option value="">All Status</option>
                                    <option value="Available">Available</option>
                                    <option value="Sold out">Sold out</option>
                                </select>
                            </div>
                            <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                                <div class="input-group">
                                    <input type="text" name="keyword" id="keyword" placeholder="Search Product" class="form-control">
                                    <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                </div>
                                <button class="btn btn-outline-secondary btn-add" type="button"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <table id="products" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Availability</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $products_array = array(
                                        array(
                                        'name' => 'Spicy Pizza with Jalapenos',
                                        'category' => 'Pizza',
                                        'price' => 'P 400.00',
                                        'availability' => 'Available',
                                    ),
                                    array(
                                        'name' => 'Matcha Frappe',
                                        'category' => 'Refreshment',
                                        'price' => 'P 125.00',
                                        'availability' => 'Available',
                                    ),
                                    array(
                                        'name' => 'Spicy Margherita Pizza',
                                        'category' => 'Pizza',
                                        'price' => 'P 625.00',
                                        'availability' => 'Sold out',
                                    ),
                                    array(
                                        'name' => 'Cucumber Lemonade',
                                        'category' => 'Refreshment',
                                        'price' => 'P 95.00',
                                        'availability' => 'Sold out',
                                    ),
                                    array(
                                        'name' => 'Spicy Veggie Delight Pizza',
                                        'category' => 'Pizza',
                                        'price' => 'P 600.00',
                                        'availability' => 'Available',
                                    ),
                                    array(
                                        'name' => 'Spicy Meat Lovers Pizza',
                                        'category' => 'Pizza',
                                        'price' => 'P 550.00',
                                        'availability' => 'Available',
                                    ),
                                    array(
                                        'name' => 'Strawberry Creamcheese',
                                        'category' => 'Refreshment',
                                        'price' => 'P 225.00',
                                        'availability' => 'Available',
                                    ),
                                    array(
                                        'name' => 'Spicy Hawaiian Pizza',
                                        'category' => 'Pizza',
                                        'price' => 'P 450.00',
                                        'availability' => 'Sold out',
                                    ),
                                    array(
                                        'name' => 'Lychee Soda',
                                        'category' => 'Refreshment',
                                        'price' => 'P 95.00',
                                        'availability' => 'Sold out',
                                    ),
                                    array(
                                        'name' => 'Spicy BBQ Chicken Pizza',
                                        'category' => 'Pizza',
                                        'price' => 'P 360.00',
                                        'availability' => 'Available',
                                    )
                                    );
                                ?>
                                <?php
                                    $counter = 1;
                                    foreach($products_array as $item){
                                ?>
                                        <tr>
                                            <td><?= $counter ?></td>
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['category'] ?></td>
                                            <td><?= $item['price'] ?></td>
                                            <td><?= $item['availability'] ?></td>
                                            <td class="text-center"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                        </tr>
                                <?php
                                    $counter++;
                                    }
                                ?>
                               
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </main>
    <?php
        require_once('../includes/js.php')
    ?>
    <script src="../js/products.js"></script>
</body>
</html>