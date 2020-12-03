<a href="<?= Yii::$app->urlManager->createUrl("/area/default/agregar"); ?>" class="btn btn-primary btn-lg btn-icon-left">
    <i class="pg-icon">page</i>
    <span class="">Agregar</span>
</a>
<div class="container-fixed-lg bg-white">
    <!-- START card -->

    <div class="card card-transparent">
        <div class="card-header ">
            <div class="card-title">Lista de area
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) { ?>
                            <tr>
                                <td class="v-align-middle ">
                                    <p><?= $d->id_area ?></p>
                                </td>
                                <td class="v-align-middle ">
                                    <p><?= $d->nombre ?></p>
                                </td>

                                <td class="v-align-middle" style="width: 300px;">
                                    <a href="<?= Yii::$app->urlManager->createUrl("/area/default/editar/{$d->id_area}"); ?>" class="btn btn-complete btn-lg btn-icon-left">
                                        <i class="pg-icon">edit</i>
                                        <span class="">Editar</span>
                                    </a>
                                    <a href="<?= Yii::$app->urlManager->createUrl("/area/default/eliminar/{$d->id_area}"); ?>" class="btn btn-danger btn-lg btn-icon-left">
                                        <i class="pg-icon">trash_alt</i>
                                        <span class="">Eliminar</span>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END card -->
</div>