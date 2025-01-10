

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Liste des cours</h1>
        
        <!-- Bouton Ajouter un cours -->
        <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary">Ajouter un cours</a>

        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($course->title); ?></td>
                        <td><?php echo e($course->description); ?></td>
                        <td><?php echo e($course->start_date); ?></td>
                        <td><?php echo e($course->end_date); ?></td>
                        <td>
                            <!-- Bouton modifier -->
                            <a href="<?php echo e(route('courses.edit', $course->id)); ?>" class="btn btn-warning">Modifier</a>
                            
                            <!-- Formulaire de suppression -->
                            <form action="<?php echo e(route('courses.destroy', $course->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\gestion-cours\resources\views/courses/index.blade.php ENDPATH**/ ?>