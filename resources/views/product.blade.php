@extends('layouts.main')

    @section('container')
       <h1 class="text-center mb-5">Next Cosmetik</h1> 
       <div class="row row-cols-1 row-cols-md-2 g-4">
         <div class="col">
           <div class="card">
             <img src="img/wardah.jpg" style="width: 100%; height: 300px" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Wardah Lightening Powder Foundation Light Feel</h5>
               <p class="card-text">Bedak Yang Mencerahkan Dengan Hasil Natural</p>
               <ol>
                  <li>
                     Formula yang ringan, halus dan non comedogenic, mencerahkan hingga 2 tingkat lebih cerah
                  </li>
                  <li>
                     Formula yang membuat produk tetap menempel pada kulit wajah selama 12 jam
                  </li>
                  <li>
                     Melindungi kulit dari sinar UV A dan UV B
                  </li>
               </ol>
               <button class="btn btn-danger" type="Submit">Beli Sekarang</button>
            </div>
           </div>
         </div>
         <div class="col">
           <div class="card">
             <img src="img/wardah eye shadow.jpg" style="width: 100%; height: 300px" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Wardah Eye Shadow - 3 Warna</h5>
               <p class="card-text">Sapuan warna intens untuk menonjolkan keindahan mata. Dikombinasikan dalam tiga warna sempurna untuk membantu mengekspresikan bentuk terbaik dari matamu. Terbuat dari Microcoated Particle yang nyaman dan lembut saat diaplikasikan.</p>
               <button class="btn btn-danger" type="Submit">Beli Sekarang</button>
            </div>
           </div>
         </div>
         <div class="col">
           <div class="card">
             <img src="img/maybelline superstay.jpg" style="width: 100%; height: 300px" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">maybelline superstay Ink</h5>
               <p class="card-text">Maybelline Superstay Matte Ink Liquid Lipstick Stay Ink ORIGINAL 100%</p>
               <p>Tahan seharian di bibir, Maybelline Super Stay Matte Ink ini memang punya kelebihan di daya tahannya yang mampu bertahan selama 16 jam. </p>
               <button class="btn btn-danger" type="Submit">Beli Sekarang</button>
             </div>
           </div>
         </div>
         <div class="col">
           <div class="card">
             <img src="img/Make over.jpg" style="width: 100%; height: 300px" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">MAKE OVER Lash Impulse Waterproof Mascara 9 ml - Mascara Waterproof & Smudgeproof</h5>
               <p class="card-text">Make Over Lash Impulse Waterproof Mascara adalah maskara tahan air dengan 3D Maxi-Lash Technology yang menghasilkan volume 10x pada bulu mata anda menjadikannya lebih tebal, lentik, dan lebat. Maskara ini diformulasikan dengan zero-smudge formula yang menjaga performa maskara ini tidak luntur hingga 12 jam.</p>
               <button class="btn btn-danger" type="Submit">Beli Sekarang</button>
            </div>
           </div>
         </div>
       </div>
    @endsection