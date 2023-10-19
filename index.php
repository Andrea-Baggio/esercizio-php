    <?php
        include './layout/navbar.php';
    ?>

    <div class="wrapper">
        <div class="iframe-mode" data-widget="iframe" data-loading-screen="750">
            <div class="tab-content">
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $editButton = "<a href='edit.php'><button type='button' class='btn btn-block bg-gradient-primary'>Edit</button></a>";
                                $deletebutton = "<a href='delete.php'><button type='button' class='btn btn-block bg-gradient-danger'>Delete</button></a>";

                                $sql = 'SELECT * FROM companies';
                                $query = $conn->query($sql); 
                                foreach ($conn->query($sql) as $row) {
                                    echo "<tr>";
                                        echo "<td>" . $row['name'] ."</td>";
                                        echo "<td>" . $row['email'] ."</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $editButton . $deletebutton . "</td>";
                                        echo "<td><a href='#' class='text-muted'><i class='fas fa-search'></i></a></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
        $conn = null;
    ?>

    <!-- adminlte js -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <!-- bootstrap 4.6 js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <!-- datatables js -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
</body>

</html>