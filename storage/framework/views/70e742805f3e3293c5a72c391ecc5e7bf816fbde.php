
<?php $__env->startSection('main'); ?>

<!-- TAMBAHKAN DIV PEMBUNGKUS DENGAN MARGIN TOP AGAR KONTEN TURUN DI BAWAH NAVBAR -->
<div class="main-content-wrapper" style="padding-top: 120px; background-color: #f3f3f3;">

    <!-- ------------------------------------------------------------------ -->
    <!-- BANNER ATAS (BREADCRUMB AREA): Sudah Diperbaiki Jarak dan Posisinya -->
    <!-- ------------------------------------------------------------------ -->
    <section class="breadcrumb__area" style="padding: 60px 0; background-color: #f3f3f3; position: relative; z-index: 1;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content text-center">
                        <!-- Judul Utama Halaman -->
                        <h2 class="title" style="font-size: 50px; font-weight: 700; color: #1f1f1f; margin-bottom: 15px; font-family: 'Playfair Display', serif;">Our Partners</h2>
                        <!-- Navigasi Teks Kecil -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center" style="background: transparent; padding: 0; margin: 0; list-style: none; display: flex;">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" style="color: #6c757d; text-decoration: none; font-size: 14px; font-weight: 600;">HOME</a></li>
                                <!-- KODE YANG BENAR (GARIS MIRING MANUAL SUDAH DIHAPUS): -->
<li class="breadcrumb-item active" aria-current="page" style="color: #ff9800; font-weight: 600; font-size: 14px; margin-left: 5px;">OUR PARTNERS</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------------------------ -->
    <!-- KONTEN KARTU DETAIL PARTNER                                        -->
    <!-- ------------------------------------------------------------------ -->
    <section class="partner__detail__page" style="padding: 60px 0 100px 0; background-color: #ffffff;">
        <div class="container">
            <div class="row g-4 justify-content-center">
                
                <?php $__empty_1 = true; $__currentLoopData = $activePartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 p-4 text-center" style="border-radius: 15px; background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            
                            <!-- Wadah Bulat Foto Logo Partner -->
                            <div class="mb-4 mx-auto" style="width: 130px; height: 130px;">
                                <?php if($partner->logo && file_exists(storage_path('app/public/' . $partner->logo))): ?>
                                    <img src="<?php echo e(asset('storage/' . $partner->logo)); ?>" alt="<?php echo e($partner->name); ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 3px solid #ff9800; padding: 3px;">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('upload/no_image.jpg')); ?>" alt="<?php echo e($partner->name); ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 3px solid #ff9800; padding: 3px;">
                                <?php endif; ?>
                            </div>
                            
                            <!-- Nama Partner -->
                            <h3 class="mb-2" style="font-size: 24px; font-weight: 700; color: #1f1f1f; font-family: 'Playfair Display', serif;">
                                <?php echo e($partner->name); ?>

                            </h3>
                            
                            <!-- Deskripsi Singkat Partner -->
                            <p class="text-muted small mb-4" style="line-height: 1.6; font-size: 14px;">
                                <?php echo e($partner->description ?? 'Mitra kerja sama resmi.'); ?>

                            </p>
                            
                          <!-- KODE TOMBOL BARU (TEKS DIPAKSA LURUS SATU BARIS): -->
<a href="<?php echo e($partner->website); ?>" target="_blank" class="btn text-white" 
   style="background-color: #ff9800; border-radius: 30px; font-weight: 600; font-size: 13px; transition: background 0.2s; white-space: nowrap; width: 100%; display: inline-block; text-align: center; padding: 10px 15px;" 
   onmouseover="this.style.backgroundColor='#e08600'" 
   onmouseout="this.style.backgroundColor='#ff9800'">
    KUNJUNGI WEBSITE <i class="fas fa-external-link-alt ms-1" style="font-size: 10px;"></i>
</a>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <!-- Tampilan Jika Data Partner Kosong -->
                    <div class="col-12 text-center py-5 text-muted">
                        <p class="mb-0" style="font-size: 16px;">Saat ini belum ada partner aktif yang terdaftar.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

</div> <!-- SELESAI MAIN WRAPPER -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Start Backup\basic\resources\views/frontend/partner_detail.blade.php ENDPATH**/ ?>