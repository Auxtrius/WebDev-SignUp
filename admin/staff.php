<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Staff';
    $staff_page = 'active';
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
                    <h2 class="h3 brand-color pt-3 pb-2">Staff</h2>
                    <div class="table-responsive overflow-hidden">
                        <div class="row g-2 mb-2 m-0">
                            <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                                <select name="staff-role" id="staff-role" class="form-select me-md-2">
                                    <option value="">All Roles</option>
                                    <option value="Chef">Chef</option>
                                    <option value="Hacker">Hacker</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
                                <select name="staff-status" id="staff-status" class="form-select me-md-2">
                                    <option value="">All Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Offline">Offline</option>
                                </select>
                            </div>
                            <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                                <div class="input-group">
                                    <input type="text" name="keyword" id="keyword" placeholder="Search Staff" class="form-control">
                                    <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                </div>
                                <button class="btn btn-outline-secondary btn-add" type="button"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <table id="staff" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Staff Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $staff_array = array(
                                        array(
                                            'name' => 'John Doe',
                                            'role' => 'Chef',
                                            'email' => 'johndoe@example.com',
                                            'status' => 'Active'
                                        ),
                                        array(
                                            'name' => 'John Doe2',
                                            'role' => 'Chef',
                                            'email' => 'johndoe@example.com',
                                            'status' => 'Active'
                                        ),
                                        array(
                                            'name' => 'John Do3',
                                            'role' => 'Chef',
                                            'email' => 'johndoe@example.com',
                                            'status' => 'Active'
                                        ),
                                        array(
                                            'name' => 'John Doe4',
                                            'role' => 'Chef',
                                            'email' => 'johndoe@example.com',
                                            'status' => 'Active'
                                        ),
                                        array(
                                            'name' => 'Rubert Hara',
                                            'role' => 'Hacker',
                                            'email' => 'rh@example.com',
                                            'status' => 'Offline'
                                        )
                                    );
                                ?>
                                <?php
                                    $counter = 1;
                                    foreach($staff_array as $item){
                                ?>
                                        <tr>
                                            <td><?= $counter ?></td>
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['role'] ?></td>
                                            <td><?= $item['email'] ?></td>
                                            <td><?= $item['status'] ?></td>
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
    <script src="../js/staff.js"></script>
</body>
</html>