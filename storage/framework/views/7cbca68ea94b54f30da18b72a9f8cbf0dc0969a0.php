

<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">

                <?php echo Form::model($cdata, ['route' => ['admin-program-videos.update', $cdata->id], "method" =>  "put","files" => true]); ?>

                
                <?php echo Form::bsFile("img[]","Video Image"); ?>

                <?php echo Form::bsText("library_name","Video Name"); ?>

                <?php echo Form::bsText("library_url","Video url"); ?>

                <?php echo Form::bsText("other_url","Other url"); ?>

                <?php echo Form::bsText("program_time","Time"); ?>

                <?php echo Form::bsText("list_index","Video No."); ?>

                <?php echo Form::bsText("sub_title","Sub title"); ?>

                <?php echo Form::bsTextArea("library_detail","Video Detail",null,["class" => "summernote"]); ?>

                <?php echo Form::bsSelect("category_id","Program",null,$video_categories,"Please select a category"); ?>

                <?php echo Form::bsSelect("program_id","Program",null,$programs,"Please select a program"); ?>

                <?php echo Form::bsSelect("trainer_id","Trainer",null,$trainers,"Please select a trainers"); ?>

                <?php echo Form::bsSelect("trainer_id_2","Trainer 2",null,$trainers,"Please select a trainers"); ?>


                <?php echo Form::bsSubmit("Update"); ?>

                
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