

<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
    <ul class="alertaU2">
        <section class="alerta2">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="alertaLi2"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </ul>
<?php endif; ?>
<div class="VentanaRegistro">
    <div class="">
        <div class="reg1">
        <img src="../../img/usuario (1) 1.png" alt="registrarse">
            Crear Album</div>
        <div class="">
            <form  action="<?php echo e(route('mostrarAlbum.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                
                <div class="">
                    <label for="id_album" class="labelSelect">Álbum</p></label>
                    <section class="">
                        <select name="id_album" id="id_album" class="selectFormulario">
                            <option value="">Selecciona un Álbum..</option>
                            <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($album -> id); ?>" <?php echo e($album->id == '{$album -> id' ? 'selected' : ''); ?>>
                                <?php echo e($album -> nombreAlbum); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </section>
                </div>



                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            Obtener
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\Laravel\ProyectoCromos\Proyect\resources\views//usuario/obtenerAlbum.blade.php ENDPATH**/ ?>