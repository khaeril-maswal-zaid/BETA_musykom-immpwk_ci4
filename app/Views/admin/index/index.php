<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 bg-white border border-warning rounded-3 my-md-5 shadow p-md-4 p-3">

            <?php if (session()->getFlashdata('akunSalah')) : ?>
                <div class="alert-akun mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </symbol>
                    </svg>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>

                        <?= session()->getFlashdata('akunSalah')[0] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif ?>

            <form method="post" action="/admin/proseslogin">
                <?= csrf_field() ?>
                <div class="form-signin text-center">

                    <img class="mb-4" src="/assets/img/web/pp.png" alt="" width="72">
                    <h1 class="h4 fw-normal">ADMIN <?= BRAND; ?></h1>

                    <p class="fw-normal fst-italic">"<?= BRANDFULL . ' ' . PIKOMFULL ?>"</p>

                    <div class="form-floating mt-4">
                        <input type="text" class="form-control" id="floatingUsername" name="username" required="">
                        <label for="floatingUsername">Username PP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password" required="">
                        <label for="floatingPassword">Password PP</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="loginadmin">Log in</button>
                </div>
            </form>

            <span class="text-white">admin1@sipfokiat.or.id &nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;mufakat165</span>
        </div>
    </div>
</div>

<?php $this->endSection() ?>