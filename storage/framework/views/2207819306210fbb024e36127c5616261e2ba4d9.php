

<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::model($cdata, ['route' => ['admin-video-category.update', $cdata->id], "method" =>  "put","files" => true]); ?>

                <?php echo Form::bsText("category_name","Category Name"); ?>

                <?php echo Form::bsSelect("parent_id","Parent",null,$video_categories,"Please select a category"); ?>

                <?php echo Form::bsTextArea("category_desc","Category Detail",null,["class" => "summernote"]); ?>


                <?php echo Form::bsSubmit("Update"); ?>

                <?php echo Form::close(); ?>

                             
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>