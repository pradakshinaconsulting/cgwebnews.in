<div class="container-fluid">
    <h1 class="mt-4">Deleted Advertisement</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboatd/') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Advertisement</li>
    </ol>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                
                <th>Image</th>
                <th>Title</th>
                <th>Area</th>
               
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($advertisementDataset as $advertisement)
                {
                    ?>
            <tr>
                
                <td><img src="<?= base_url('store/'.$advertisement->ads_img) ?>" height="100"/></td>
                <td><?= $advertisement->title ?></td>
                <td><?= $advertisement->area ?></td>
                
                
            </tr>
            <?php
                }
                
                
                ?>
        </tbody>
    </table>
</div>