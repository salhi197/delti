<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <h1 class="mt-4"> Utilisateurs:</h1>

    <div class="card mb-4">
        <div class="card-header">
    </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table " id="example1" width="100%" >
                    <thead>
                        <tr>
                            <th>ID user</th>
                            <th>nom prenom</th>
                            <th>Role</th>
                            <th>Password </th>
                            <th>actions</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                            <td><?php echo e($user->id ?? ''); ?></td>

                            <td>
                                <?php echo e($user->prenom ?? ''); ?>

                                <?php echo e($user->nom ?? ''); ?>

                            </td>
                            <td><?php echo e($user->type ?? ''); ?></td>
                            <td><?php echo e($user->password_text ?? ''); ?></td>



                            <td>

                                <div class="table-action">

                                    <a href="<?php echo e(route('user.destroy',['id_user'=>$user->id])); ?>"
                                        onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                            Supprimer
                                        <i class="fas fa-trash"></i>

                                    </a>
                                    <a href="<?php echo e(route('user.edit',['id_user'=>$user->id])); ?>"
                                        onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-info">
                                            modifier
                                        <i class="fas fa-edit"></i>
                                    </a>

                                </div>

                            </td>



                        </tr>



                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



                                        



<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>