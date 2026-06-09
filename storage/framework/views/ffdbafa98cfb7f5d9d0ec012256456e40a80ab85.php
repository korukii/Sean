
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Home Slide Page </h4>
            
            <form method="post" action="<?php echo e(route('update.slider')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
<input type="hidden" name="id" value="<?php echo e($homeslide->id); ?>">
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    
                    <input name="title" class="form-control" type="text" value="<?php echo e($homeslide->title); ?>"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                <div class="col-sm-10">
                    <input name="short_title" class="form-control" type="text" value="<?php echo e($homeslide->short_title); ?>"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Video URL </label>
                <div class="col-sm-10">
                    <input name="video_url" class="form-control" type="text" value="<?php echo e($homeslide->video_url); ?>"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image </label>
                <div class="col-sm-10">
       <input name="home_slide" class="form-control" type="file"  id="image">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="<?php echo e((!empty($homeslide->home_slide))? url( $homeslide->home_slide):url('upload/no_image.jpg')); ?>" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Start Backup\basic\resources\views/admin/home_slide/home_slide_all.blade.php ENDPATH**/ ?>