<div>
    <div class="container"><!--add styling here-->
        <div class="row">
            <form action="<?php echo e(route('search-result')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row mb-2">
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm" name="search" placeholder="Search">
                            <span class="text-danger"><?php $__errorArgs = ['search'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                        </div> 
                        <div class="col-auto">
                        <select name="filter" id="" class="form-select form-select-sm">
                            <option value="id">Article ID</option>
                            <option value="category">Category</option>
                            <option value="tags">Tags</option>
                        </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                        </div>
                                           
                </div>
            

            </form>
        </div>
        
    </div>
    
</div><?php /**PATH C:\Users\Bane\Dropbox\rb21100002484\4. Advanced Web Development with the MERN Stack\Task 10\cool-tech\resources\views/components/search.blade.php ENDPATH**/ ?>