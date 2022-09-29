<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Login</title>
   <link rel="stylesheet" href="<?php echo e(asset('styles/bootstrap-5.2.1/css/bootstrap.css')); ?>">
   <script src="<?php echo e(asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')); ?>"></script>
</head>
<body>
<?php if (isset($component)) { $__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Nav::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Nav::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480)): ?>
<?php $component = $__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480; ?>
<?php unset($__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480); ?>
<?php endif; ?>
<div class="container">
    
  <div class="row" style="margin-top:45px">
  <h1>Author Login</h1>
    <div class="col-md-4 col-md-offset-6">
        <form action="<?php echo e(route('auth.check-author')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="results">

                <?php if(Session::get('fail')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('fail')); ?>

                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <div class="form-group gap-2">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
                <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <br>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <a href="register-admin">Create author account</a>
        </form>
    </div>
  </div>  
</div>
</body>
</html><?php /**PATH C:\Users\Bane\Dropbox\rb21100002484\4. Advanced Web Development with the MERN Stack\Task 10\cool-tech\resources\views/auth/author-login.blade.php ENDPATH**/ ?>