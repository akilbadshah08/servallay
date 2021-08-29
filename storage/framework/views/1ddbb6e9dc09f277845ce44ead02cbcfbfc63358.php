
<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::open(["url" => "/admin-blogs",'files' => 'true', "method" => "post"]); ?>

                <?php echo Form::bsFile("img[]","Blog Image"); ?>

                <?php echo Form::bsText("blog_name","Blog Name"); ?>

                <?php echo Form::bsTextArea("blog_detail","Blog Detail",null,["class" => "summernote"]); ?>

                <?php echo Form::bsSubmit("Save"); ?>


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