    <?php include 'header.php'; ?>
    <section id="contact-info">
        <div class="center">
            <h2>How to Reach Us?</h2>
            <p class="lead">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                              <iframe src="//www.google.com/maps/embed/v1/place?q=CIS%20Mosque&zoom=17&key=AIzaSyBZVheHdr22U1KTu9v-ADd8as9U9qmCBDA"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>IQMAH</h5>
                                    <p>CIS, University of Ilorin <br>
                                    Kwara state</p>
                                    <p>Phone:08185824523 <br>
                                    Twitter:iqmah_official</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Drop Your Message</h2>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display:none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="https://formspree.io/mubaraqsanusi908@gmail.com">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required" id="name">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required" id="email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" id="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
        <?php include 'footer.php'; ?>

<script type="text/javascript">
    $('#main-contact-form').submit(function(e){
        var name = $('#name');
        var email = $('#email');
        var phone = $('#phone');
        var message = $('#message');

        $.ajax({
            url: "https://formspree.io/mubaraqsanusi908@gmail.com",
            method: "POST",
            data: {message},
            dataType: "json"
        });
        e.preventDefault();
        $(this).get(0).reset()
    });
</script>