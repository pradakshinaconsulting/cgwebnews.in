<div class="container-fluid">
    <h1 class="mt-4">Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboatd/') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Post</li>
    </ol>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Post Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Date</th>
                <th colspan="2">Manage</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Post Id</td>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Date</th>
                <th colspan="2">Manage</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
                foreach($postDataset as $post)
                {
                    ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->post_title ?></td>
                <td><?= $post->category->name_hindi ?></td>
                <td><img src="<?= base_url('store/'.$post->post_img) ?>" height="100"/></td>
                <td><?= date_format(date_create($post->post_date),'d/m/Y g:i:s A') ?></td>
                <td><a href="<?= base_url('admin/post/edit/'.$post->id.'/')  ?>" class="btn btn-primary">Edit</a></td>
                <td><a href="<?= base_url('admin/post/delete/'.$post->id.'/')  ?>" class="btn btn-danger">Delete</a></td>
            
            </tr>
            <?php
                }
                
                
                ?>
        </tbody>
    </table>
    </div>
    <?php pagination(array('total'=>$pagination['total_row'],'page'=>$pagination['page_no'],'limit'=>$pagination['per_page'],'url'=>$pagination['url'].'/?'.$pagination['parameter'])); ?>

</div>