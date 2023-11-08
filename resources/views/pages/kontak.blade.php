@section('title')
kontak
@endsection
@extends('templates.app')
@section('content')
<!-- Particle 1 -->
<section class="background-colored">
    <div id="particles-dots" class="particles"></div>
    <div class="container">
        <div class="heading-text text-light text-center">
            <h4 class="fw-600" style="text-shadow: 2px 2px black;">Hubungi Kami</h4>
        </div>
    </div>
</section>
<!-- end: Particle 1 -->

<!-- content -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Tetap Terhubung</h3>
                <div class="m-t-30">
                    <form class="widget-contact-form" data-success-message-delay="40000" novalidate action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Subject</label>
                                <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Tulis Pesan"></textarea>
                        </div>
                        <!-- <div class="form-group">
							<script src="https://www.google.com/recaptcha/api.js" async defer></script>
							<div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
						</div> -->
                        <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase">Alamat & Peta</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <address>
                            <strong>Tenjo City Residence Tahap 3</strong>
                            <br> Jl. Raya Cileles, Singabangsa,
                            <br> Kec. Tenjo, Kabupaten Bogor,
                            <br> Jawa Barat 16370 <br>
                        </address>
                    </div>
                </div>
                <!-- Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1982.795954721718!2d106.4633061!3d-6.3172143!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42097553c340a5%3A0xc9826a790f1c2584!2sPerumahan%20Tenjo%20City%20Tahap%203!5e0!3m2!1sid!2sid!4v1697789761082!5m2!1sid!2sid" width="400" height="350" style="border: 2px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- end: Google Map -->
            </div>
        </div>
    </div>
</section>
@endsection
