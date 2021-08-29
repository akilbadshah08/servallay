<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::open(["url" => "/admin-program-videos",'files' => 'true', "method" => "post"]); ?>

                <?php echo Form::bsFile("img[]","Video Image"); ?>

                <?php echo Form::bsText("library_name","Video Name"); ?>

                <?php echo Form::bsText("library_url","Video url"); ?>

                <?php echo Form::bsText("program_time","Time"); ?>

                <?php echo Form::bsTextArea("library_detail","Video Detail",null,["class" => "summernote"]); ?>

                <?php echo Form::bsSelect("program_id","Program",null,$programs,"Please select a category"); ?>

                <?php echo Form::bsSelect("trainer_id","Trainer",null,$trainers,"Please select a category"); ?>

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