<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        
        <title><?php echo e(config('app.name','ATG')); ?></title>
        <style>
            .alert{
                background: slategray;
                color: #fff;
                padding: 20px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
    <h1>ATG registration form</h1>
    
    <?php if(Session::has('message')): ?>
    <div class="alert">
        <?php echo e(Session::get('message')); ?>

    </div>
    <?php endif; ?>
    <form action="store" method='POST'>
        <?php echo csrf_field(); ?>
        <label>Name <input type="text" id="name" name="name"/></label><br><br>
        <label>email <input type="text" id="email" name="email"/></label><br><br>
        <label>pincode <input type="number" id="pincode" name="pincode"/></label><br><br>
        <input type="submit"/>
    </form>

    

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\ATG\resources\views/registrationForm.blade.php ENDPATH**/ ?>