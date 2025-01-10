

<?php $__env->startSection('content'); ?>
    <h1>Ajouter un cours</h1>

    <form action="<?php echo e(route('courses.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>

        <div>
            <label for="start_date">Date de début</label>
            <input type="date" name="start_date" id="start_date" required>
        </div>

        <div>
            <label for="end_date">Date de fin</label>
            <input type="date" name="end_date" id="end_date" required>
        </div>

        <button type="submit">Enregistrer</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\gestion-cours\resources\views/courses/create.blade.php ENDPATH**/ ?>