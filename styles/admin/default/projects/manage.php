
<div class="page-title">

    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
          
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> Home</a>
            </li>
            <li class="active">
                <strong> Project</strong>
            </li>
        </ol>

    </div>

</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Project</h3>
    </div>
    <div class="panel-body">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        <?php endif ?>
        <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">Service Type</label>

                <div class="col-sm-10">
                    <?php echo form_dropdown('service_id', dd2menu('services', array('service_id' => 'title')), set_value('service_id', $item->service_id), 'class="form-control"') ?>
                </div>
            </div>
            <div class="form-group-separator"></div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Title</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Title" name="title"
                           value="<?php echo set_value('title', $item->title) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Project Link</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Project Link" name="link"
                           value="<?php echo set_value('link', $item->link) ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Image</label>

                <div class="col-sm-10">
                    <input class="form-control" type="file" name="image" >
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Submit">
                    <a href="<?php echo site_url('admin/projects/index'); ?>" class="btn btn-danger">Cancel</a>
                </div>
            </div>


        </form>

    </div>
</div>
