<?php $__env->startSection('content'); ?>


 <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Category</h5>
                        </div>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Category</a></li>
                            <li class="breadcrumb-item">Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Category</h5>
                    </div>
                    <div class="card-body row">
                        
               <div class="col-sm-4">
                    <img style="width: 300px; margin-bottom: 10px" src="<?php echo e(asset('uploads/category/'.$category->image)); ?>">

               </div>
                <div class="col-sm-8">
                <?php echo Form::model($category, ['route' => ['admin-category.update', $category->id], "method" =>  "put",'id' => "validation-form123","files" => true]); ?>


                <?php echo Form::bsFile("img[]","Image","validation-file form-control"); ?>


                <?php echo Form::bsText("name","Category Name"); ?>


                <?php if(isset($category->parent_id) ): ?>
                    <?php echo Form::bsSelect("parent_id","parent",null,$categories,"Please select a category"); ?>

                <?php endif; ?>
            </div>


                <?php echo Form::bsSubmit("Save"); ?>



                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>



    <div class="container product_section_container" style="padding: 30px;">

        <div class="row">

            <div class="col-md-12">


            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>

    <!-- jquery-validation Js -->
<script src="<?php echo e(asset('../')); ?>/assets/js/plugins/jquery.validate.min.js"></script>
<!-- form-picker-custom Js -->
<script type="text/javascript">
    $(document).ready(function() {
    $(function() {
        // [ Add phone validator ]
        <?php if(isset($success)): ?>
         Swal.fire({
            icon: "success",
            title: 'Category Updated Successfully',
        }).then(function(result){
            window.location.href='<?php echo e(url("admin-category")); ?>'
        })
        <?php endif; ?>

        // [ Initialize validation ]
        $('#validation-form123').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'name': {
                    required: true
                },
                'parent_id': {
                    required: true
                }
            },

        });
    });
});

</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>