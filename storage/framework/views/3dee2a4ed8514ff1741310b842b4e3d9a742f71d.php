
<?php $__env->startSection('admin'); ?>

<link href="<?php echo e(asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Manage Partners</h4>
                    <div class="page-title-right">
                        <a href="<?php echo e(route('partners.create')); ?>" class="btn btn-primary rounded-pill">
                            <i class="fas fa-plus"></i> Add Partner
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php if($message = Session::get('success')): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle"></i> <?php echo e($message); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Daftar Partners</h4>

                        <?php if($partners->count()): ?>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered table-hover align-middle dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 50px;">No</th>
                                            <th>Logo</th>
                                            <th>Nama Partner</th>
                                            <th>Website</th>
                                            <th style="width: 150px;">Status</th>
                                            <th style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php ($i = 1); ?>
                                        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i++); ?></td>
                                                <td>
                                                    <?php if($partner->logo && file_exists(storage_path('app/public/' . $partner->logo))): ?>
                                                        <img src="<?php echo e(asset('storage/' . $partner->logo)); ?>" 
                                                             alt="<?php echo e($partner->name); ?>" 
                                                             style="width: 60px; height: 50px; object-fit: contain;"
                                                             class="bg-light p-1 rounded">
                                                    <?php else: ?>
                                                        <span class="badge bg-warning">No Image</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="fw-bold"><?php echo e($partner->name); ?></td>
                                                <td>
                                                    <a href="<?php echo e($partner->website); ?>" target="_blank" class="text-primary text-decoration-none">
                                                        <?php echo e(Str::limit($partner->website, 30)); ?>

                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch d-flex align-items-center gap-2">
                                                        <input class="form-check-input partner-toggle" type="checkbox" 
                                                               data-partner-id="<?php echo e($partner->id); ?>"
                                                               <?php echo e($partner->status === 'active' ? 'checked' : ''); ?>

                                                               role="switch">
                                                        <label class="form-check-label" id="label-status-<?php echo e($partner->id); ?>">
                                                            <span class="badge <?php echo e($partner->status === 'active' ? 'bg-success' : 'bg-danger'); ?>">
                                                                <?php echo e(ucfirst($partner->status)); ?>

                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('partners.edit', $partner->id)); ?>" 
                                                       class="btn btn-info btn-sm text-white" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm delete-partner" 
                                                            data-partner-id="<?php echo e($partner->id); ?>" title="Delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <?php else: ?>
                            <div class="alert alert-info text-center" role="alert">
                                <i class="fas fa-info-circle"></i> Tidak ada data partner
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<form id="deleteForm" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
</form>

<script src="<?php echo e(asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

<script>
    $(document).ready(function() {
        // Memicu DataTables aktif dengan pembatasan tampilan halaman
        if ($('#datatable').length) {
            $('#datatable').DataTable({
                "pageLength": 5, // Mengunci tabel agar hanya menampilkan 5 data per halaman
                "lengthMenu": [5, 10, 25, 50] // Pilihan menu data per halaman
            });
        }
    });

    // AJAX Toggle Status (Murni Tanpa Reload Halaman)
    document.querySelectorAll('.partner-toggle').forEach(toggle => {
        toggle.addEventListener('change', function() {
            const partnerId = this.dataset.partnerId;
            const newStatus = this.checked ? 'active' : 'inactive';
            const badgeLabel = document.getElementById(`label-status-${partnerId}`);
            
            fetch(`/partners/${partnerId}/toggle-status`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ 
                    _method: 'PATCH',
                    status: newStatus 
                })
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    if (newStatus === 'active') {
                        badgeLabel.innerHTML = `<span class="badge bg-success">Active</span>`;
                    } else {
                        badgeLabel.innerHTML = `<span class="badge bg-danger">Inactive</span>`;
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: data.message,
                        timer: 1200,
                        showConfirmButton: false
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                this.checked = !this.checked;
                Swal.fire('Error!', 'Gagal mengubah status partner', 'error');
            });
        });
    });

    // Delete Partner dengan Konfirmasi SweetAlert2
    document.querySelectorAll('.delete-partner').forEach(btn => {
        btn.addEventListener('click', function() {
            const partnerId = this.dataset.partnerId;
            
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: 'Data partner beserta berkas logonnya akan dihapus permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('deleteForm');
                    form.action = `/partners/${partnerId}`;
                    form.submit();
                }
            });
        });
    });
</script>

<style>
    .table-responsive {
        border-radius: 5px;
        overflow: hidden;
    }
    .table tbody tr:hover {
        background-color: #f9f9f9;
    }
    .form-check-input {
        cursor: pointer;
    }
</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Start Backup\basic\resources\views/admin/partners/index.blade.php ENDPATH**/ ?>