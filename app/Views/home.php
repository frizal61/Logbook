<?= $this->extend('templates/templates1') ?>

<?= $this->section('isi') ?>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none"></span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('images/it.png') ?>" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Insert</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">History</a></li>
                <li class="nav-item"><a class="nav-link " href="mamber.html">Mamber</a></li>

            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    LOGBOOK
                    <span class="text-primary">IT</span>
                </h1>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Form Start-->
        <section class="form-section" id="experience">
            <div class="form-section-content">
                <h2 class="mb-3">INSERT</h2>
                <form action="/save" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control <?= (validation_show_error('tanggal')) ? 'is-invalid' : ''; ?>" id="tanggal" name="tanggal" style="width: 250px;">
                            <div class="invalid-feedback">
                                <?= validation_show_error('tanggal'); ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="kegiatan">Nama Kegiatan</label>
                            <input type="text" class="form-control <?= (validation_show_error('kegiatan')) ? 'is-invalid' : ''; ?>" id="kegiatan" name="kegiatan" placeholder="Nama Kegiatan">
                            <div class="invalid-feedback">
                                <?= validation_show_error('kegiatan'); ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="perbaikan">Jenis Perbaikan</label>
                            <br>
                            <select class="custom-select custom-select-sm <?= (validation_show_error('perbaikan')) ? 'is-invalid' : ''; ?>" style="height: 50px;" id="perbaikan" name="perbaikan">
                                <option selected value="">Jenis Perbaikan</option>
                                <option>HARDWARE</option>
                                <option>SOFTWARE</option>
                                <option>JARINGAN</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= validation_show_error('perbaikan'); ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="ruangan">Nama Ruangan</label>
                            <input type="text" class="form-control <?= (validation_show_error('ruangan')) ? 'is-invalid' : ''; ?>" id="ruangan" name="ruangan" placeholder="Nama Ruangan">
                            <div class="invalid-feedback">
                                <?= validation_show_error('ruangan'); ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="langkah">Langkah Perbaikan</label>
                            <textarea class="form-control <?= (validation_show_error('langkah')) ? 'is-invalid' : ''; ?>" id="langkah" name="langkah" placeholder="Langkah Perbaikan" rows="3"></textarea>
                            <div class="invalid-feedback">
                                <?= validation_show_error('langkah'); ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="hasil">Hasil </label>
                            <br>
                            <select class="custom-select custom-select-sm <?= (validation_show_error('hasil')) ? 'is-invalid' : ''; ?>" id="hasil" name="hasil" style="height: 40px;">
                                <option selected value="">Hasil</option>
                                <option>Selesai</option>
                                <option>Tidak Selesai</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= validation_show_error('hasil'); ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit" style="height: 50px;">SUBMIT</button>
                </form>
            </div>
            <br>
        </section>
        <!-- Form End-->
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">HISTORY</h2>
                <form action="/" method="GET">
                    <input type="text" id="search" name="search" placeholder="Search" style="height: 40px;">
                    <button class="btn btn-primary" type="submit" style="height: 40px;">SUBMIT</button>
                </form>
                <br>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Kegiatan</th>
                            <th scope="col">Jenis Perbaikan</th>
                            <th scope="col">Nama Ruangan</th>
                            <th scope="col">Langkah Perbaikan</th>
                            <th scope="col">Hasil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($perbaikan as $a) :
                            $i = $i + 1; ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <th scope="row"><?= $a['Kegiatan'] ?></th>
                                <th scope="row"><?= $a['Jenis_Perbaikan'] ?></th>
                                <th scope="row"><?= $a['Nama_Ruangan'] ?></th>
                                <th scope="row"><?= $a['Langkah_Perbaikan'] ?></th>
                                <th scope="row"><?= $a['Hasil'] ?></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <hr class="m-0" />
        <hr class="m-0" />
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('js/scripts.js') ?>"></script>
</body>
<?= $this->endSection() ?>

</html>