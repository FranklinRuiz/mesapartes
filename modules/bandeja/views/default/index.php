<div class="container-fixed-lg bg-white">
    <!-- START card -->
    <div class="card card-transparent">
        <div class="card-header ">
            <div class="card-title">Bandeja de recepcion de documentos
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Asunto</th>
                            <th>Descripción</th>
                            <th>Origen</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) { ?>
                            <tr>
                                <td class="v-align-middle ">
                                    <p><?= $d["numero"] ?></p>
                                </td>
                                <td class="v-align-middle ">
                                    <p><?= $d["asunto"] ?></p>
                                </td>
                                <td class="v-align-middle">
                                    <p><?= $d["descripcion"] ?></p>
                                </td>
                                <td class="v-align-middle">
                                    <p><?= $d["area"] ?></p>
                                </td>
                                <td class="v-align-middle">
                                    <p><?= $d["fecha"] ?></p>
                                </td>
                                <td class="v-align-middle">
                                    <p><?= $d["estado"] ?></p>
                                </td>
                                <td class="v-align-middle">
                                    <a href="<?= Yii::$app->urlManager->createUrl("/bandeja/default/documento/{$d['id_documento']}"); ?>" class="btn btn-primary btn-lg btn-icon-left">
                                        <i class="pg-icon">page</i>
                                        <span class="">Ver</span>
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