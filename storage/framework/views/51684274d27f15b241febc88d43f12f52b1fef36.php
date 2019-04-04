<li class="<?php echo e(Request::is('horas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('horas.index'); ?>"><i class="fa fa-edit"></i><span>horas</span></a>
</li>

<li class="<?php echo e(Request::is('grupos*') ? 'active' : ''); ?>">
    <a href="<?php echo route('grupos.index'); ?>"><i class="fa fa-edit"></i><span>grupos</span></a>
</li>

<li class="<?php echo e(Request::is('materias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('materias.index'); ?>"><i class="fa fa-edit"></i><span>materias</span></a>
</li>

<li class="<?php echo e(Request::is('usuarios*') ? 'active' : ''); ?>">
    <a href="<?php echo route('usuarios.index'); ?>"><i class="fa fa-edit"></i><span>usuarios</span></a>
</li>

