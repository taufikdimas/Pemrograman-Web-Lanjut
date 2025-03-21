 
 
<?php $__env->startSection('content'); ?> 
  <div class="card card-outline card-primary"> 
      <div class="card-header"> 
        <h3 class="card-title"><?php echo e($page->title); ?></h3> 
        <div class="card-tools"> 
          <a class="btn btn-sm btn-primary mt-1" href="<?php echo e(url('user/create')); ?>">Tambah</a>
          <button onclick="modalAction('<?php echo e(url('user/create_ajax')); ?>')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button> 
        </div> 
      </div> 
      <div class="card-body"> 
        <?php if(session('success')): ?>
          <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
          <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-1 control-label col-form-label">Filter: </label>
              <div class="col-3">
                <select class="form-control" id="level_id" name="level_id" required>
                  <option value="">- Semua -</option>
                  <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($l->level_id); ?>"><?php echo e($l->level_nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <small class="form-text text-muted">Level Pengguna</small>
              </div>
            </div>
          </div>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="table_user"> 
          <thead> 
            <tr><th>ID</th><th>Username</th><th>Nama</th><th>Level Pengguna</th><th>Aksi</th></tr> 
          </thead> 
      </table> 
    </div> 
  </div> 
  <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div> 
<?php $__env->stopSection(); ?> 
 
<?php $__env->startPush('css'); ?> 
<?php $__env->stopPush(); ?> 
 
<?php $__env->startPush('js'); ?> 
  <script> 
    function modalAction(url = ''){ 
        $('#myModal').load(url,function(){ 
            $('#myModal').modal('show'); 
        }); 
    }

    var dataUser;
    $(document).ready(function() { 
      dataUser = $('#table_user').DataTable({ 
          // serverSide: true, jika ingin menggunakan server side processing 
          serverSide: true,      
          ajax: { 
              "url": "<?php echo e(url('user/list')); ?>", 
              "dataType": "json", 
              "type": "POST",
              "data": function (d) {
                d.level_id = $('#level_id').val();
              }
          }, 
          columns: [ 
            {  // nomor urut dari laravel datatable addIndexColumn() 
              data: "DT_RowIndex",             
              className: "text-center", 
              orderable: false, 
              searchable: false     
            },{ 
              data: "username",                
              className: "", 
              // orderable: true, jika ingin kolom ini bisa diurutkan  
              orderable: true,     
              // searchable: true, jika ingin kolom ini bisa dicari 
              searchable: true     
            },{ 
              data: "nama",                
              className: "", 
              orderable: true,     
              searchable: true     
            },{ 
              // mengambil data level hasil dari ORM berelasi 
              data: "level.level_nama",                
              className: "", 
              orderable: false,     
              searchable: false     
            },{ 
              data: "aksi",                
              className: "", 
              orderable: false,     
              searchable: false     
            } 
          ] 
        }); 
        
            $('#level_id').on('change', function() {
              dataUser.ajax.reload();
            });
    }); 
  </script> 
<?php $__env->stopPush(); ?>  
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Pemrograman-Web-Lanjut\Minggu-6\PWL_POS\resources\views/user/index.blade.php ENDPATH**/ ?>