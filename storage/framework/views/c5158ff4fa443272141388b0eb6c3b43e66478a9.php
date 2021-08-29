
<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::open(["url" => "/admin-librarys",'files' => 'true', "method" => "post"]); ?>

                <?php echo Form::bsFile("img[]","Library Image"); ?>

                <?php echo Form::bsText("library_name","Library Name"); ?>

                <?php echo Form::bsText("library_url","Library Url"); ?>


                <?php echo Form::bsText("time","Time"); ?>


                <?php echo Form::bsText("sub_title","Video no."); ?>

                
                <?php echo Form::bsText("amount","Amount"); ?>


                <?php echo Form::bsSelect("category_id","Category",null,$video_categories,"Please select a category"); ?>


                <?php echo Form::bsSelect("trainer_id","Trainer",null,$trainers,"Please select a Trainer"); ?>

                <?php echo Form::bsSelect("trainer_id_2","Trainer",null,$trainers,"Please select a Trainer"); ?>


                <?php echo Form::bsTextArea("library_detail","Library Detail",null,["class" => "summernote"]); ?>

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