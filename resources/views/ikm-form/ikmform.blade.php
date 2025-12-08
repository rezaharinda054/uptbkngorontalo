<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/bg-content/bg-content2.png);">
      <div class="container position-relative">
        <h1 class="h2upt"><span style="color:#66beeb;">Form Indeks Kepuasan Masyarakat (IKM)</span></h1>
      </div>
    </div><!-- End Page Title -->
<head>
    <style>
    .likert-row > label { min-width: 48px; text-align: center; }
    .question { margin-bottom: 1rem; }
    .scale { display:flex; gap:.5rem; justify-content:flex-end; }
    /* Responsif: baris likert dapat pindah ke bawah saat layar sempit */
    .likert-row {
    display: flex;
    flex-direction: column;
    gap: .5rem;
    }

    .scale {
    display: flex;
    gap: .5rem;
    flex-wrap: wrap;
    }

    /* Lebar angka 1–5 agar rapi */
    .form-check-inline label {
    min-width: 24px;
    text-align: center;
    }

    /* Pada layar lebih besar, scale kembali memanjang ke kanan */
    @media (min-width: 576px) {
    .likert-row {
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }}
  </style>
  
</head>
<body style="background-image: url(assets/img/bg-content/bg-content.png);">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-10">
        <div class="card shadow-sm">
          <div class="card-body">
            <h1 class="h4 mb-1">Form Indeks Kepuasan Masyarakat (IKM)</h1>
            <p class="text-muted">Silakan isi data dan berikan penilaian untuk setiap aspek layanan.</p>
            <hr>

            <form id="ikmForm" novalidate>
              <div class="row g-3">

                <div class="col-md-12">
                  <label for="umur" class="form-label">Umur</label>
                  <input type="number" id="umur" name="umur" class="form-control" min="0" max="120" required>
                  <div class="invalid-feedback">Masukkan umur yang valid.</div>
                </div>

                <div class="col-md-12">
                  <label class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="jk" required>
                    <option value="">Pilih...</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                  <div class="invalid-feedback">Pilih jenis kelamin.</div>
                </div>

                <div class="col-md-12">
                  <label class="form-label">Pendidikan</label>
                  <select class="form-select" name="pendidikan" required>
                    <option value="">Pilih...</option>
                    <option>SMA/Sederajat</option>
                    <option>D-I</option>
                    <option>D-II</option>
                    <option>D-III</option>
                    <option>D-IV/S1</option>
                    <option>S-2</option>
                    <option>S-3</option>
                  </select>
                  <div class="invalid-feedback">Pilih jenis kelamin.</div>
                </div>

                <div class="col-12">
                  <label for="unit" class="form-label">Instansi</label>
                  <input type="text" id="unit" name="unit" class="form-control" placeholder="Instansi Asal" required>
                  <div class="invalid-feedback">Unit layanan harus diisi.</div>
                </div>

                <hr class="my-4">

                <div class="col-12">
                  <h2 class="h6 mb-3"><b>Penilaian Layanan</b></h2>

                  <!-- Question 1 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q1" id="q1-1" value="1" required>
                                <label class="form-check-label" for="q1-1">Tidak Sesuai</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q1" id="q1-2" value="2">
                                <label class="form-check-label" for="q1-2">Kurang Sesuai</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q1" id="q1-3" value="3">
                                <label class="form-check-label" for="q1-3">Sesuai</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q1" id="q1-4" value="4">
                                <label class="form-check-label" for="q1-4">Sangat Sesuai</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <!-- Question 2 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di UPSCPKP BKN Gorontalo?</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q2" id="q2-1" value="1" required>
                                <label class="form-check-label" for="q2-1">Tidak Mudah</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q2" id="q2-2" value="2">
                                <label class="form-check-label" for="q2-2">Kurang Mudah</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q2" id="q2-3" value="3">
                                <label class="form-check-label" for="q2-3">Mudah</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q2" id="q2-4" value="4">
                            <label class="form-check-label" for="q2-4">Sangat Muda</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <!-- Question 3 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q3" id="q3-1" value="1" required>
                                <label class="form-check-label" for="q3-1">Tidak Cepat</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q3" id="q3-2" value="2">
                                <label class="form-check-label" for="q3-2">Kurang Cepat</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q3" id="q3-3" value="3">
                                <label class="form-check-label" for="q3-3">Cepat</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q3" id="q3-4" value="4">
                                <label class="form-check-label" for="q3-4">Sangat Cepat</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <!-- Question 4 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan?</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-1" value="1" required>
                                <label class="form-check-label" for="q4-1">Sangat Mahal</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-2" value="2">
                                <label class="form-check-label" for="q4-2">Cukup Mahal</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-3" value="3">
                                <label class="form-check-label" for="q4-3">Murah</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-4" value="4">
                                <label class="form-check-label" for="q4-4">Gratis</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <!-- Question 5 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pendapat saudara tentang hasil pelayanan yang diberikan?</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-1" value="1" required>
                                <label class="form-check-label" for="q4-1">Tidak Sesuai</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-2" value="2">
                                <label class="form-check-label" for="q4-2">Kurang Sesuai</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-3" value="3">
                                <label class="form-check-label" for="q4-3">Sesuai</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-4" value="4">
                                <label class="form-check-label" for="q4-4">Sangat Sesuai</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <!-- Question 6 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pendapat saudara tentang kompetensi kemampuan petugas dalam pelayanan?</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-1" value="1" required>
                                <label class="form-check-label" for="q4-1">Tidak Kompeten</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-2" value="2">
                                <label class="form-check-label" for="q4-2">Kurang Kompeten</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-3" value="3">
                                <label class="form-check-label" for="q4-3">Kompeten</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-4" value="4">
                                <label class="form-check-label" for="q4-4">Sangat Kompeten</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <!-- Question 7 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pendapat saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-1" value="1" required>
                                <label class="form-check-label" for="q4-1">Tidak Sopan dan Ramah</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-2" value="2">
                                <label class="form-check-label" for="q4-2">Kurang Sopan dan Ramah</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-3" value="3">
                                <label class="form-check-label" for="q4-3">Sopan dan Ramah</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-4" value="4">
                                <label class="form-check-label" for="q4-4">Sangat Sopan dan Ramah</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <!-- Question 8 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pendapat saudara tentang sarana dan prasarana yang ada di UPSCPKP BKN Gorontalo??</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-1" value="1" required>
                                <label class="form-check-label" for="q4-1">Buruk</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-2" value="2">
                                <label class="form-check-label" for="q4-2">Cukup</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-3" value="3">
                                <label class="form-check-label" for="q4-3">Baik</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-4" value="4">
                                <label class="form-check-label" for="q4-4">Sangat Baik</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <!-- Question 9 -->
                  <div class="question">
                    <label class="form-label">Bagaimana pendapat saudara tentang penanganan pangguna layanan?</label>
                    <div class="likert-row d-flex">
                      <div class="d-flex">
                        <ul style="list-style-type: none;">
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-1" value="1" required>
                                <label class="form-check-label" for="q4-1">Tidak Ada</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-2" value="2">
                                <label class="form-check-label" for="q4-2">Ada, Tetapi Tidak Berfungsi</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-3" value="3">
                                <label class="form-check-label" for="q4-3">Berfungsi Kurang Maksimal</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="q4" id="q4-4" value="4">
                                <label class="form-check-label" for="q4-4">Dikelola Dengan Baik</label>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <hr>

                </div>

                <div class="col-12">
                  <label for="komentar" class="form-label">Komentar / Saran (opsional)</label>
                  <textarea id="komentar" name="komentar" class="form-control" rows="3" placeholder="Masukkan komentar atau saran Anda..."></textarea>
                </div>

                <div class="col-12 d-flex justify-content-between align-items-center">
                  <small class="text-muted">Semua isian bertanda * wajib diisi.</small>
                  <div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
                </div>

              </div>
            </form>

            <!-- Modal Summary -->
            <div class="modal fade" id="summaryModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Ringkasan Pengisian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                  </div>
                  <div class="modal-body">
                    <div id="summaryContent"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button id="confirmSubmit" type="button" class="btn btn-primary">Konfirmasi dan Simpan</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Bootstrap form validation
    (function () {
      'use strict'
      const form = document.getElementById('ikmForm')

      form.addEventListener('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();

        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return;
        }

        // Build summary
        const data = new FormData(form);
        const summary = [];
        summary.push('<dl class="row">');
        ['nama','nik','umur','tanggal','unit'].forEach(k=>{
          summary.push('<dt class="col-sm-4">'+k.toUpperCase()+'</dt><dd class="col-sm-8">'+(data.get(k)||'-')+'</dd>');
        });
        for(let i=1;i<=5;i++){
          summary.push('<dt class="col-sm-4">Pertanyaan '+i+'</dt><dd class="col-sm-8">'+(data.get('q'+i)||'-')+'</dd>');
        }
        summary.push('</dl>');
        if(data.get('komentar')){
          summary.push('<p><strong>Komentar:</strong><br>'+data.get('komentar')+'</p>');
        }

        document.getElementById('summaryContent').innerHTML = summary.join('');
        const modal = new bootstrap.Modal(document.getElementById('summaryModal'));
        modal.show();

        // Confirm button saves (simulate saving)
        document.getElementById('confirmSubmit').onclick = function(){
          modal.hide();
          // Simulasi: kirim ke server (fetch) atau simpan lokal
          // Di contoh ini kita hanya tampilkan notifikasi
          const alert = document.createElement('div');
          alert.className = 'alert alert-success mt-3';
          alert.role = 'alert';
          alert.innerText = 'Terima kasih — respons Anda telah tersimpan (simulasi).';
          form.parentNode.insertBefore(alert, form);
          form.reset();
          form.classList.remove('was-validated');
        };
      }, false)
    })()
  </script>
</body>
</main>