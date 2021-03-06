<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('news.update', $post)); ?>" accept-charset="utf-8">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($post->slug); ?>">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php echo e($post->content); ?></textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="online" value="1" checked="<?php echo e($post->online); ?>"> Online
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>