<?php $__env->startSection('content'); ?>


<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Calendrier de rencontres</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Calendrier de rencontres</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mb-4">
                        <div class="col-xl-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <button type="button" class="btn font-16 btn-primary waves-effect waves-light w-100" id="btn-new-event" data-bs-toggle="modal" data-bs-target="#event-modal">
                                            Creér une date
                                    </button>
                                    <br><br>

                                    <div id="external-events">
                                        <br>
                                        <p class="text-muted">Faites glisser et déposez votre événement ou cliquez dans le calendrier</p>
                                        <div class="external-event fc-event bg-success" data-class="bg-success">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Journée libre
                                        </div>
                                        <div class="external-event fc-event bg-info" data-class="bg-info">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Réunion
                                        </div>
                                        <div class="external-event fc-event bg-warning" data-class="bg-warning">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Sortie
                                        </div>
                                        <div class="external-event fc-event bg-danger" data-class="bg-danger">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Autres
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col-->
                        <div class="col-xl-9">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row-->
                    <div style='clear:both'></div>

                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header py-3 px-4">
                                    <h5 class="modal-title" id="modal-title">Evenements</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body p-4">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Choisir date</label>
                                                    <input class="form-control" placeholder="Insert Event Name" type="date" name="title" id="event-title" required value="">
                                                    <div class="invalid-feedback">Please provide a valid event name
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Heure de début</label>
                                                <input class="form-control" placeholder="Insert Event Name" type="time" name="title" id="event-title" required value="">
                                                <div class="invalid-feedback">Please provide a valid event name
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Heure de fin</label>
                                                <input class="form-control" placeholder="Insert Event Name" type="time" name="title" id="event-title" required value="">
                                                <div class="invalid-feedback">Please provide a valid event name
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Temps de Meeting</label>
                                                <input class="form-control" placeholder="par minutes" type="text" name="title" id="event-title" required value="">
                                            </div>
                                        </div>
                                        <!-- end col-->

                                </div>
                                <!-- end row-->
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-danger" id="btn-delete-event">Annuler</button>
                                    </div>
                                    <!-- end col-->
                                    <div class="col-6 text-end">
                                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-success" id="btn-save-event">Ajouter</button>
                                    </div>
                                    <!-- end col-->
                                </div>
                                <!-- end row-->
                                </form>
                            </div>
                        </div>
                        <!-- end modal-content-->
                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/core/main.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/daygrid/main.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/bootstrap/main.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/timegrid/main.min.css')); ?>" type="text/css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    <script src="<?php echo e(asset('cirm/admin/assets/libs/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/jquery-ui-dist/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/core/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/bootstrap/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/daygrid/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/timegrid/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/@fullcalendar/interaction/main.min.js')); ?>"></script>

    <script src="<?php echo e(asset('cirm/admin/assets/js/pages/calendar.init.js')); ?>"></script>

<script src="<?php echo e(asset('cirm/admin/assets/js/app.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>