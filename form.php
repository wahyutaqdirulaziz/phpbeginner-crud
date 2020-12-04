<?php include 'base.php' ?>



<?php startblock('konten') ?>
<div class="row">
    <div class="card col-12 container">
        <div class="card-group">
        <div class="card-body">
       
    <div class="mt-5 container">
    <form action="aksi/create_Materi.php" method="post">
    <div class="form-group row">
    <label for="materi" class="col-sm-2 col-form-label">Materi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_materi" id="materi" placeholder="Nama Materi ..">
    </div>
  </div>
  <div class="form-group row">
    <label for="link" class="col-sm-2 col-form-label">link</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="link" name="link" placeholder="http/:example.com">
    </div>
  </div>
  <div class="form-check">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="col-sm-2 form-check-label" for="exampleCheck1">Check me out</label> -->
  </div>
  <button type="submit" name="submit" class="btn btn-primary offset-2">Submit</button>
</form>
    </div>
    
    </div>
        </div>
  
    </div>
  
    

</div>
<?php endblock() ?>