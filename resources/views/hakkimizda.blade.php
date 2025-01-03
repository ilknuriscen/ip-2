@extends('layout')
@section('main')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding-top: 80px;
            background-color: #f9f9f9;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #000;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.25rem;
            color: #6c757d;
            margin-bottom: 40px;
        }

        .about-image {
            width: 50%;
            height: auto;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: block;
            margin: 0 auto;
        }

        .about-content {
            background-color: #ffffff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }

        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
        }

        .team-member h5 {
            font-size: 1.5rem;
            color: #000;
            margin-bottom: 10px;
        }

        .team-member p {
            color: #6c757d;
            font-size: 1rem;
        }

        .team-member .social-icons {
            margin-top: 10px;
        }

        .team-member .social-icons a {
            color: #000;
            margin: 0 10px;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .team-member .social-icons a:hover {
            color: #007b3a;
        }
    </style>
    <body>
    <section id="about-us" class="container my-5">
        <div class="section-title">
            <h2>Hakkımızda</h2>
        </div>
        <div class="section-subtitle">
            <p>Tarım sektöründe dijital dönüşümü hızlandırmak ve çiftçilere daha iyi bir yaşam sunmak için çalışıyoruz.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="about-content">
                    <img src="/images/logo.png" alt="Tarım Teknolojisi" class="about-image">
                    <h4 class="mt-4">
                        FarmsShift olarak amacımız, tarım sektöründe dijital çözümler sunarak verimliliği artırmak, çiftçilerin iş süreçlerini kolaylaştırmak ve tarım ürünlerinin daha verimli bir şekilde işlenmesini sağlamaktır. Teknolojiyi tarımın her aşamasına entegre ederek, sektördeki verimsizlikleri ortadan kaldırmayı hedefliyoruz. Çiftçilerimize daha iyi bir gelecek sağlamak için sürekli gelişen ve yenilikçi çözümler sunuyoruz.
                    </h4>
                </div>
            </div>
        </div>

        <div class="section-title mt-5">
            <h2>Takımımız</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 team-member">
                <img src="/images/ben.jpg" alt="Takım Üyesi 1">
                <h5>İlknur İşcen</h5>
                <p>CEO & Founder</p>
                <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-md-3 team-member">
                <img src="images/doga.jpg" alt="Takım Üyesi 2">
                <h5>Doğa Akpınar</h5>
                <p>CTO</p>
                <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-md-3 team-member">
                <img src="images/samet.jpg" alt="Takım Üyesi 3">
                <h5>Samet Şahin</h5>
                <p>COO</p>
            </div>
        </div>
    </section>
    </body>
@endsection
