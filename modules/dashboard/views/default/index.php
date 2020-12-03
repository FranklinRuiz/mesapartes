<?php

use app\modules\dashboard\bundles\DashboardAsset;

$bundle = DashboardAsset::register($this);
?>
<div class="row">
    <div class="col-lg-4 col-xl-3 col-xlg-2 ">
        <div class="row">
            <div class="col-lg-12 m-b-10">
                <!-- START WIDGET widget_progressTileFlat-->
                <div class="widget-9 card  bg-warning  no-margin widget-loader-bar">
                    <div class="full-height d-flex flex-column">
                        <div class="card-header ">
                            <div class="card-title">
                                <span class="font-montserrat fs-11 all-caps">Documentos Pendientes</span>
                            </div>
                        </div>
                        <div class="p-l-20">
                            <h1 class="no-margin p-b-5" id="pendientes">0</h1>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 m-b-10">
                <!-- START WIDGET widget_progressTileFlat-->
                <div class="widget-9 card  bg-success no-margin widget-loader-bar">
                    <div class="full-height d-flex flex-column">
                        <div class="card-header ">
                            <div class="card-title">
                                <span class="font-montserrat fs-11 all-caps">Documentos Recepcionados </span>
                            </div>
                        </div>
                        <div class="p-l-20">
                            <h1 class="no-margin p-b-5" id="recepcionados">0</h1>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 m-b-10">
                <!-- START WIDGET widget_progressTileFlat-->
                <div class="widget-9 card  bg-white  no-margin widget-loader-bar">
                    <div class="full-height d-flex flex-column">
                        <div class="card-header ">
                            <div class="card-title">
                                <span class="font-montserrat fs-11 all-caps">Documentos Derivados</span>
                            </div>
                        </div>
                        <div class="p-l-20">
                            <h1 class="no-margin p-b-5" id="derivados">0</h1>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET -->
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xl-9 col-xlg-6 m-b-10">
        <div class="row">
            <div class="col-md-12">
                <!-- START WIDGET D3 widget_graphWidget-->
                <div class="widget-12 card  widget-loader-circle no-margin">
                    <div class="card-body">
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>
            <!-- END WIDGET -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- START WIDGET D3 widget_graphWidget-->
        <div class="widget-12 card  widget-loader-circle no-margin">
            <div class="card-body">
                <div id="chartmes"></div>
            </div>
        </div>
    </div>
    <!-- END WIDGET -->
</div>
