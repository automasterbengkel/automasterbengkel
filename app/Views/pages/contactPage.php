<?= $this->extend('layout/NavFootPages'); ?>

<?= $this->section('content'); ?>

<section class="home">
    <div class="contact">
        <div class="contact-title">
            <h1>CONTACT US</h1>
            <p>Please fill in the form below to get more information
                or contact the contact below.</p>
            <li>Email : <a href="mailto:info@automasterbengkel.com">info@automasterbengkel.com</a></li>
            <li>Phone : <a href="tel:081222246849">081222246849</a></li>
        </div>
        <div class="formContact">
            <div class="form-box">
                <div class="contact-container" id="contact">
                    <form action="https://formspree.io/f/mwkdnglk" method="POST" target="_blank">
                        <div class="two-forms">
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="Firstname" id="Firstname" name="Firstname">
                                <i class="bx bx-user"></i>
                            </div>
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="Lastname" id="Lastname" name="Lastname">
                                <i class="bx bx-user"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Email" id="email" name="email" autocomplete="off">
                            <i class="bx bx-envelope"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Message" id="msg" name="msg">
                            <i class='bx bx-message-dots'></i>
                        </div>
                        <div class="input-box">
                            <button type="submit" class="submit" onclick="message()" id="send">Send Message</button>
                        </div>
                        <div class="alertMessage">
                            <div class="successAlert" id="successAlert">
                                Your message has been sent successfully
                            </div>
                            <div class="dangerAlert" id="dangerAlert">
                                Field's Can't Be Empty!
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>