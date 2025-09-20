<div class="card-body hidden">

    <div class="accordion" id="kt_accordion_2">
        <div class="accordion-item" id="resultadosAccordionItem" style="display:none;">
            <h2 class="accordion-header" id="kt_accordion_2_header_1">
                <button class="accordion-button fs-4 fw-semibold collapsed" id="resultadosButton" type="button"
                    data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_body_1" aria-expanded="false"
                    aria-controls="kt_accordion_2_body_1">
                    Resultados
                </button>
            </h2>
            <div id="kt_accordion_2_body_1" class="accordion-collapse collapse"
                aria-labelledby="kt_accordion_2_header_1" data-bs-parent="#kt_accordion_2">
                <div class="accordion-body">
                    <!--begin::Tap pane-->
                    <div>
                        <h3>Resultados: Evaluación de proyecto de generación distribuida</h3>

                        <!--begin::Resultados pane-->
                        <div class="row mt-10">

                            <div class="col-6">
                                <h4>Condiciones de financiamiento</h4>
                                <label class="col-4 fw-semibold text-muted">Monto financiado (USD)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2" id="condiciones"></span>

                                </div>

                                <label class="col-4 fw-semibold text-muted">Porcentaje del CAPEX financiado</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2" id="capex"></span>

                                </div>

                                <label class="col-4 fw-semibold text-muted">Plazo (años)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2" id="plazo"></span>

                                </div>

                                <label class="col-4 fw-semibold text-muted">Tasa de interés (en pesos)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2" id="interes"></span>

                                </div>
                                <h4 class="mt-10">Condiciones del Flujo de Fondos </h4>
                                <label class="col-4 fw-semibold text-muted">Tasa de descuento</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2" id="descuento"></span>

                                </div>

                            </div>
                        </div>

                        <div class="row mt-10">

                            <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 p-0">
                                    <!--begin::Link-->
                                    <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_resultadosGD_flujofondosconcapitalpropio">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Flujo de Fondos con
                                            capital propio</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_resultadosGD_flujofondosconfinanciamiento">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Flujo de Fondos con
                                            financiamiento</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_resultadosGD_Comparativas">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Comparativas</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane fade" id="kt_list_resultadosGD_Comparativas">
                                    <div class="separator separator-dotted separator-content border-dark my-15">
                                        <span class="h1">Comparativa de Flujo de fondos acumulado con capital propio
                                            y financiamiento</span>
                                    </div>


                                    <div class="separator separator-dotted separator-content border-dark my-15">
                                        <span class="h1">Comparación generación fotovoltaica y consumo
                                            eléctrico</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div id="tabla-comparativageneracionfotovoltaica"></div>
                                        </div>
                                        <div class="col-6">
                                            <div id="graph-comparativa-fotovoltaica">

                                                graph-comparativa-fotovoltaica en desarrollo
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--	-->
                            </div>




                        </div>
                        <!--end::Resultados pane-->
                    </div>
                    <!--end::Tap pane-->

                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header" id="kt_accordion_2_header_2">
                <button class="accordion-button fs-4 fw-semibold collapsed" id="proyeccionesButton" type="button"
                    data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_body_2" aria-expanded="true"
                    aria-controls="kt_accordion_2_body_2">
                    Proyecciones
                </button>
            </h2>

            <div id="kt_accordion_2_body_2" class="accordion-collapse collapse"
                aria-labelledby="kt_accordion_2_header_2" data-bs-parent="#kt_accordion_2">

                <!-- arranca el primero -->

                <div id="results_analisisTecnico">


                    <div class="card-body card-flush mt-6 mt-xl-9 pt-0">

                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                            <!--begin::Item-->
                            <li class="nav-item col-6 mx-0 p-0">
                                <!--begin::Link-->
                                <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                    data-bs-toggle="pill" href="#kt_list_analisistecnico_tablaenergia">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Detalle de datos
                                        mensual</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item col-6 mx-0 px-0">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                    data-bs-toggle="pill" href="#kt_list_analisistecnico_tablaproyecciones">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Proyecciones
                                        anuales</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->


                            <!--begin::Bullet-->
                            <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                            <!--end::Bullet-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_list_analisistecnico_tablaenergia">

                            </div>

                            <div class="tab-pane fade" id="kt_list_analisistecnico_tablaproyecciones">

                            </div>
                        </div>
                    </div>

                </div>

                <!-- aca finaliza el primero y arranca el segundo -->

                <div id="results_analisisEconomicoFinanciero">
                    <div class="card mt-10">

                        <div class="card-body card-flush mt-6 mt-xl-9 pt-0">

                            <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 p-0">
                                    <!--begin::Link-->
                                    <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_proyeccionesdecostos">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Tarifas y Costos
                                        </span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_creditocfi">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Crédito CFI</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_variableseconomicas">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Ingresos</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->


                                <!--begin::Bullet-->
                                <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                                <!--end::Bullet-->
                            </ul>

                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_list_proyeccionesdecostos">

                                    <!-- -->

                                    <div class="card-body card-flush mt-6 mt-xl-9 pt-0">

                                        <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                            <!--begin::Item-->
                                            <li class="nav-item col-6 mx-0 p-0">
                                                <!--begin::Link-->
                                                <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                                    data-bs-toggle="pill"
                                                    href="#kt_list_proyeccionesdecostos_costosvariables">
                                                    <!--begin::Subtitle-->
                                                    <span
                                                        class="nav-text text-gray-800 fw-bold fs-6 mb-3">Tarifas</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item col-6 mx-0 px-0">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                                    data-bs-toggle="pill"
                                                    href="#kt_list_proyeccionesdecostos_costosmantenimiento">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Costos de
                                                        Inversión y Mantenimiento</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->

                                        </ul>


                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active"
                                                id="kt_list_proyeccionesdecostos_costosvariables">


                                            </div>
                                            <div class="tab-pane fade"
                                                id="kt_list_proyeccionesdecostos_costosmantenimiento">

                                                <div id="tabla-proyecciones-costos"></div>
                                                <div id="tabla-proyecciones-mantenimiento">

                                                </div>
                                            </div>
                                            <!--	-->
                                        </div>

                                    </div>





                                </div>
                                <div class="tab-pane fade" id="kt_list_creditocfi">

                                    <!-- -->

                                    <div class="card-body card-flush mt-6 mt-xl-9 pt-0">



                                        <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                            <!--begin::Item-->
                                            <li class="nav-item col-6 mx-0 p-0">
                                                <!--begin::Link-->
                                                <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                                    data-bs-toggle="pill" href="#kt_list_creditocfi_calculosanuales">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Cálculos
                                                        Anuales</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item col-6 mx-0 px-0">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                                    data-bs-toggle="pill" href="#kt_list_creditocfi_cuadrodemarcha">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Cuadro de
                                                        Marcha</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->

                                        </ul>

                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active"
                                                id="kt_list_creditocfi_calculosanuales">


                                                <div class="row">
                                                    <div id="tabla-creditocficalculosanuales">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_list_creditocfi_cuadrodemarcha">

                                            </div>
                                            <!--	-->
                                        </div>
                                    </div>



                                </div>

                                <div class="tab-pane fade" id="kt_list_variableseconomicas">


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
</div>