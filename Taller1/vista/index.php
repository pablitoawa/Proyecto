<?php
require_once("layouts/header.php");
?>

<table>
    <tr>
        <td class="header">ID</td>
        <td class="header">NOMBRE</td>
        <td class="header">PRECIO</td>
        <td class="header">BOTONES DE ACCIONES</td>        
    </tr>
    <tbody>
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td class="idN"><?php echo $v['id'] ?> </td>
                        <td class="name"><?php echo $v['nombre'] ?> </td>
                        <td class="sign"><?php echo $v['precio'] ?> </td>
                        <td>
                            <a href="index.php?m=nuevo" class="btn new">NUEVO</a>
                            <a class="btn edit" href="index.php?m=editar&id=<?php echo $v['id']?>">EDITAR</a>
                            <a class="btn delete" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");