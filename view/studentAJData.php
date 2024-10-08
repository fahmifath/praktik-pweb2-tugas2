<?php
//perintah include agar bisa mengakses data dari file berbeda
include '../layouts/header.php';
include '../layouts/nav.php';
include '../library/func.php';

//instansiasi class student dengan signature AJ
$studentAJ = new StudentAJ();
//menjaankan method untuk menampilkan data, penerapan prinsip polymorphism
$studentAJData = $studentAJ->showDataStudent();

?>
<h1 class="text-center mt-2 mb-3">Student With AJ Signatures data</h1>
<div class="d-flex justify-content-center">
    <table border="1" class="table table-striped-columns" style="width: 90%;">
        <tr class="table-primary">
            <th>ID</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Address</th>
            <th>Signature</th>
            <th>Phone Number</th>
            <th>User Id</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Deleted at</th>
        </tr>
        <?php
        //looping untuk menampilkan data satu per satu
        foreach ($studentAJData as $key => $value) {
        ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['nim'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['address'] ?></td>
                <td><?= $value['signature'] ?></td>
                <td><?= $value['number_phone'] ?></td>
                <td><?= $value['user_id'] ?></td>
                <td><?= $value['created_at'] ?></td>
                <td><?= $value['updated_at'] ?></td>
                <td><?= $value['deleted_at'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php
include '../layouts/footer.php';
?>