<!-- footer start -->
<div class="pa-footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="pa-foot-box">
                    <img src="{{asset('assets/frontend/images/logo-footer.png')}}" alt="image"/>
                        <p class="text-justify pt-20">
                            আমরা বাংলাদেশের অন্যতম প্রধান ইউনানী ঔষুধ প্রস্তুতকারক প্রতিষ্ঠান। উন্নত মানের ল্যাবরেটরিতে আমাদের অভিজ্ঞ কেমিস্ট ও ফার্মাসিস্ট দ্বারা প্রত্যেকটা ঔষুধের গুনগত মান পরীক্ষা করে রিপোর্ট তৈরী করে লিপিবদ্ধ করা হয়। যার সংক্ষিপ্ত নাম BMR। এছাড়া ভেষজগুলি অভিজ্ঞ হাকীম ও কেমিস্ট দ্বারা মান যাচাই করা হয়।
                        </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="pa-foot-box">
                    <h2 class="pa-foot-title">দ্রুত সংযোগ</h2>
                    <ul class="pt-30">
                        <li>
                            <a href="{{route('frontend.about')}}">আমাদের সম্পর্কে</a>
                        </li>
                        <li>
                            <a href="#contact">যোগাযোগ করুন</a>
                        </li>
                        <li>
                            <a href="{{route('frontend.mission')}}">প্রেরণা ও লক্ষ্য</a>
                        </li>
                        <li>
                            <a href="{{route('frontend.research')}}">গবেষনা ও উদ্ভাবন</a>
                        </li>
                        <li>
                            <a href={{route('frontend.top')}}>শীর্ষ পণ্যসমূহ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="pa-foot-box">
                    <h2 class="pa-foot-title">যোগাযোগ করুন</h2>
                    <ul class="pt-30">
                        <li>
                            <p>ইমেইল: info@mabcolaboratories.com</p>
                        </li>
                        <li>
                            <p>ফোন: +৮৮০১২৩৪৫৬৭৮৯</p>
                        </li>
                        <li>
                            <p>প্রধান অফিসের ঠিকানা: ৭৩/এইচ/বি/সেন্ট্রাল রোড,ধানমন্ডি ,ঢাকা</p>
                            <p>বিতরণ অফিসের ঠিকানা: ২৬/৬, ব্যাঙ্ক টাউন, সাভার, ঢাকা</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pa-foot-box pa-foot-subscribe">
                    <h2 class="pa-foot-title">পত্রগ্রাহক হোন</h2>
                    <p class="subs-p">
                        আমাদের পত্রগ্রাহক হবার মাধম্যে ইউনানী ঔষুধ জগতের সর্বশেষ খবর জানুন
                    </p>
                    <div class="pa-newsletter pt-10">
                        {!! Form::open(['class'=>'form-sample','route'=>'subscribe-us.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                            <input type="email" id="email" name="email" placeholder="আপনার ইমেইল লিখুন">
                            <button type="submit" class="pa-btn mt-3">পত্রগ্রাহক হোন</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 ml-20 pt-10">
                <span class="ml-2 mr-2"><a class="inline" ><img src="{{asset('assets/frontend/images/social_media_icon/facebook.png')}}"></a></span>
                <span class="ml-2 mr-2"><a class="inline" ><img src="{{asset('assets/frontend/images/social_media_icon/linkedin.png')}}"></a></span>
                <span class="ml-2"><a class="inline" ><img src="{{asset('assets/frontend/images/social_media_icon/instagram.png')}}"></a></span>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
<!-- copyright start -->
<div class="pa-copyright">
    <div class="container">
        <p>Copyright &copy; 2021. All rights reserved. <a href="#">Mabco Laboratories Unani Ltd.</a></p>
    </div>
    <div>
        <p class="our-p">
            Ⓓ 2021 Developed By <a href="http://setcolbd.com/"> :: Skies Engineering & Technologies Limited</a>
        </p>
    </div>
</div>
<!-- copyright end -->

</div>
<!-- main wrapper end -->
