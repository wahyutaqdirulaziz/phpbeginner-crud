<?php include 'base.php' ?>



<?php startblock('konten') ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="form.php" class="btn btn-primary"><i class="fa fa-user-plus"></i>Create</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
        <thead>
          <tr>
          <th>No</th>
            <th>Name</th>
            <th>link</th>
            <th>aksi</th>
          
          
          </tr>
        </thead>
      
        <tbody>
        <?php
        include 'koneksi.php';
         $no = 1;
         $data = mysqli_query($mysql,"select * from list_belajar");
         while($d = mysqli_fetch_array($data)){
         
         ?>
          <tr>
          <td><?php echo $no++ ?></td>
            <td><?php echo $d['nama_materi']; ?></td>
            <td><?php echo $d['link']; ?></td>
           <td><a href="form-edit.php?id=<?=$d['id_list'] ?>" class="btn btn-primary">Edit</a><a href="aksi/hapus.php?id=<?=$d['id_list'] ?>" class="btn btn-danger">delete</a></td>
          </tr>
         <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<?php endblock() ?>