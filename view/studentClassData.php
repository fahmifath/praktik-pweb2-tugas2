<?php
//perintah include agar bisa mengakses data dari file berbeda
include '../layouts/header.php';
include '../layouts/nav.php';
include '../library/func.php';

//instansiasi class student classes
$studentClasses = new StudentClasses();
//menjaankan method untuk menampilkan data
$studentClassesData = $studentClasses->showDataStudentClasses();

?>
<h1 class="text-center mt-2 mb-3">Student Classes data</h1>
<div class="d-flex justify-content-center">
    <table border="1" class="table table-striped-columns" style="width: 90%;">
        <tr class="table-primary">
            <th>ID</th>
            <th>Name</th>
            <th>Academic Year</th>
            <th>Study Program Id</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Deleted at</th>
        </tr>
        <?php
        //looping untuk menampilkan data satu per satu
        foreach ($studentClassesData as $key => $value) {
        ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['academic_year'] ?></td>
                <td><?= $value['study_program_id'] ?></td>
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