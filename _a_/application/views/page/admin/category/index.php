<div class="container-fluid">
    <h1 class="mt-4">Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboatd/') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Category</li>
    </ol>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Hindi</th>
                <th>Description</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Hindi</th>
                <th>Description</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
                foreach($categoryDataset as $category)
                {
                    ?>
            <tr>
                <td><?= $category->name ?></td>
                <td><?= $category->name_hindi ?></td>
                <td><?= $category->description ?></td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
</div>