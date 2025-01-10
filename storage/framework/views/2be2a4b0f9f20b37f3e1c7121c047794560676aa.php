<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name', 'Gestion Cours')); ?></title>
    
    <!-- Lien vers le fichier CSS personnalisé -->
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo e(route('courses.index')); ?>">Accueil</a></li>
                <li><a href="<?php echo e(route('courses.create')); ?>">Ajouter un cours</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\gestion-cours\resources\views/layouts/app.blade.php ENDPATH**/ ?>