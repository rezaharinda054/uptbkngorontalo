<style>
  .card{background:#fff;border-radius:12px;box-shadow:0 6px 18px rgba(12,20,50,0.08);overflow:hidden}
  .toolbar{display:flex;gap:var(--gap);align-items:center;padding:12px}
  .url{flex:1;min-width:0}
  input[type="url"]{width:100%;padding:10px 12px;border-radius:8px;border:1px solid #e3e7ef;font-size:14px}
  .btn{padding:10px 14px;border-radius:8px;border:0;background:#0b5cff;color:#fff;font-weight:600;cursor:pointer}
  .viewer{position:relative;height:70vh;min-height:360px}

/* responsive embed: keep full area for iframe/object */
  .viewer iframe, .viewer object, .viewer embed{position:absolute;inset:0;width:100%;height:100%;border:0}
  .fallback{display:flex;gap:10px;align-items:center;padding:12px;border-top:1px solid #eef2f7}
  .note{font-size:13px;color:#475569}
  @media (max-width:640px){body{padding:12px}.viewer{height:60vh}}
</style>

<main class="main">
  <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/bg-content/bg-content2.png);">
      <div class="container position-relative" style="margin-top: 20px;">
        <h1 class="h2upt"><span style="color:#66beeb;">Standar Pelayanan Kanreg XI BKN</span></h1>
         <nav class="breadcrumbs">
          <ol class="h2upt">
            <li><a href="/home">Beranda</a></li>
            <li class="current">Standar Pelayanan Kanreg XI BKN</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="card m-5">
      <div class="viewer" id="viewer">
        <!-- Primary: iframe menampilkan PDF (browser modern) -->
        <iframe id="pdfFrame" src="assets/file/stanpel-kanreg11bkn.pdf" title="PDF viewer" allowfullscreen></iframe>
        <!-- Fallback: object/embed — akan tampil jika iframe gagal -->
        <object id="pdfObj" data="" type="application/pdf" style="display:none">
          <embed id="pdfEmbed" src="" type="application/pdf" />
        </object>
      </div>
    </div>
</main>
    
  <script>
    const pdfUrlInput = document.getElementById('pdfUrl');
    const loadBtn = document.getElementById('loadBtn');
    const pdfFrame = document.getElementById('pdfFrame');
    const pdfObj = document.getElementById('pdfObj');
    const pdfEmbed = document.getElementById('pdfEmbed');
    const downloadLink = document.getElementById('downloadLink');


    function setPdf(url){
      // set src for iframe + object/embed fallback + download link
      pdfFrame.src = url;
      pdfObj.style.display = 'none';
      pdfObj.data = url;
      pdfEmbed.src = url;
      downloadLink.href = url;
    }

    loadBtn.addEventListener('click', ()=>{
    const url = pdfUrlInput.value.trim();
    if(!url){
      alert('Masukkan URL PDF yang valid.');
    return;
    }
    setPdf(url);
    });


    // Jika iframe gagal memuat PDF (contoh: beberapa browser blok), tampilkan object fallback
    pdfFrame.addEventListener('error', ()=>{
    pdfFrame.style.display = 'none';
    pdfObj.style.display = 'block';
    });


    // initial setup (gunakan value default di input)
    setPdf(pdfUrlInput.value.trim());
  </script>
