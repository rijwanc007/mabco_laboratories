{{--    Contact Us Start--}}

<div class="pa-contact-us" id="contact">
    <div class="container spacer-top spacer-bottom">
        <div class="pa-heading">
            <img src="{{asset('assets/frontend/images/herbal.svg')}}" alt="image" class="img-fluid"/>
            <h1>আমাদের সাথে যোগাযোগ করুন</h1>
            <h5>বার্তা দিন</h5>
        </div>
        <div class="row justify-content-around mt-20">
            <div class="col-lg-6 mt-5">
                <iframe class="contact-card" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d767.7728152996006!2d90.38682321893641!3d23.741545503548917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9e530c0406b%3A0x2121f9d76ad45419!2sAddl%20Central%20Essence!5e0!3m2!1sen!2sbd!4v1623815901749!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-5 contact-card mt-5">
                {!! Form::open(['class'=>'form-sample','route'=>'contact-us.store','method'=>'POST','enctype'=>'multiple/form-data']) !!}
                    <div class="form-group pt-20">
                        <label for="name">নাম :</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="নাম লিখুন">
                    </div>
                    <div class="form-group">
                        <label for="email">ইমেইল :</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="ইমেইল লিখুন">
                    </div>
                    <div class="form-group">
                        <label for="message">আপনার বার্তা :</label>
                        <textarea class="form-control contact-text"  id="message" name="message" rows="5" style="resize: none;" placeholder="আপনার বার্তা লিখুন"></textarea>
                    </div>
                    <button  type="submit" class="btn btn-block">জমা দিন</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

{{--    Contact Us End--}}
