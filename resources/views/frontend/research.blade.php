@extends('frontend.master')
@section('title','গবেষণা | ম্যাবকো')
@section('research','active')
@section('content')
    <!-- Research start -->
    <div class="pa-about pt-150 spacer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pa-about-content">
                        <div class="pa-heading">
                            <img src="{{asset('assets/frontend/images/herbal.svg')}}" alt="image" class="img-fluid">
                            <h1>আমাদের গবেষণা নিয়ে কিছু কথা</h1>
                            <h5>আমাদের গবেষণা</h5>
                        </div>
                        <p>
                            যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত
                        </p>
                        <p>
                            আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pa-about-img">
                        <img src="{{asset('assets/frontend/images/research.jpg')}}" alt="image" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Research end -->
{{--    R&D Time Line Start--}}
    <div class="pa-research-timeline spacer-top spacer-bottom">
    <div class="container ">
    <div class="row justify-content-center">
        <div class="pa-heading">
            <img src="{{asset('assets/frontend/images/herbal.svg')}}" alt="image" class="img-fluid">
            <h1>আমাদের গবেষণা এবং উদ্ভাবন এর ধারাগুলি</h1>
            <h5>পণ্য উদ্ভাবন সময়রেখা</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="pa-about-img">
                <img src="{{asset('assets/frontend/images/problem.jpg')}}" alt="image" class="img-fluid"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="pa-about-content">
                <div class="pa-heading">
                    <h1>কোনো সমস্যার মুখোমুখি হওয়া ও তার সমাধান নিয়ে কাজ করা</h1>
                    <h5>উদ্ভাবন</h5>
                </div>
                <p>
                    কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি,
                </p>
                <p>
                    কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না,
                </p>
            </div>
        </div>
    </div>
    </div>
</div>
</div>

<div class="pa-research-development spacer-top spacer-bottom">
 <div class="container">
     <div class="row">
         <div class="col-lg-6">
             <div class="pa-about-content">
                 <div class="pa-heading">
                     <h1>উদ্ভাবিত নতুন পণ্য কে উৎপাদনে নিয়ে যাওয়া</h1>
                     <h5>উৎপাদন প্রক্রিয়া</h5>
                 </div>
                 <p>
                     কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো— তার প্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি… শুধু এতটুকু বলি, যা-ই বিশ্বাস করো না কেন
                 </p>
                 <p>
                     তাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি— হ্যাঁ, তুমি। হয়তো সামান্য ক’টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু—
                 </p>
             </div>
         </div>
         <div class="col-lg-6">
             <div class="pa-about-img">
                 <img src="{{asset('assets/frontend/images/production.jpg')}}" alt="image" class="img-fluid"/>
             </div>
         </div>
     </div>
 </div>
</div>

{{--    R&D Time Line End --}}

@endsection
