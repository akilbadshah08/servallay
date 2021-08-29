
<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::open(["url" => "/admin-programs",'files' => 'true', "method" => "post"]); ?>

                <?php echo Form::bsFile("img[]","Program Image"); ?>

                <?php echo Form::bsText("program_name","Program Name"); ?>

                <?php echo Form::bsText("sub_title","Sub title"); ?>

                <?php echo Form::bsText("total_days","Total Days"); ?>

                <?php echo Form::bsText("number_of_videos","No of Video of program"); ?>

                <?php echo Form::bsText("amount","price"); ?>

                <?php echo Form::bsSelect("category_id","Category",null,$video_categories,"Please select a category"); ?>

             
                <?php echo Form::bsTextArea("program_details","Program Detail",null,["class" => "summernote"]); ?>

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