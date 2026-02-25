<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Business Enquiry</title>
</head>
<body style="font-family: Arial, sans-serif;">

<h2>New Business Enquiry</h2>

<hr>

<h3>Basic Information</h3>
<p><strong>Website Plan:</strong> {{ $enquiry->website_plan }}</p>
<p><strong>Brand Name:</strong> {{ $enquiry->brand_name }}</p>
<p><strong>Business Category:</strong> {{ $enquiry->business_category }}</p>
<p><strong>Contact Number:</strong> {{ $enquiry->contact_number }}</p>
<p><strong>Email:</strong> {{ $enquiry->email }}</p>
<p><strong>Address:</strong> {{ $enquiry->address }}</p>

<hr>

<h3>Social Links</h3>
<p><strong>Facebook:</strong> {{ $enquiry->facebook_link }}</p>
<p><strong>Instagram:</strong> {{ $enquiry->instagram_link }}</p>
<p><strong>Google My Business:</strong> {{ $enquiry->gmb_link }}</p>

<hr>

<h3>Selected Pages</h3>
@if($enquiry->pages)
    <ul>
        @foreach($enquiry->pages as $page)
            <li>{{ $page }}</li>
        @endforeach
    </ul>
@endif

<hr>

<h3>Business Details</h3>
<p><strong>About Business:</strong> {{ $enquiry->about_business }}</p>
<p><strong>About Products:</strong> {{ $enquiry->about_products }}</p>
<p><strong>Highlights:</strong> {{ $enquiry->highlights }}</p>

<hr>

<h3>Strengths & Vision</h3>
<p><strong>Why Choose Us:</strong> {{ $enquiry->why_choose_us }}</p>
<p><strong>Testimonials:</strong> {{ $enquiry->testimonials }}</p>
<p><strong>Mission:</strong> {{ $enquiry->mission }}</p>
<p><strong>Vision:</strong> {{ $enquiry->vision }}</p>
<p><strong>Our Strengths:</strong> {{ $enquiry->our_strengths }}</p>

<hr>

<h3>Uploaded Files</h3>

{{-- ✅ Show Embedded Logo --}}
@if(!empty($logoCid))
    <p><strong>Logo Preview:</strong></p>
    <img src="{{ $logoCid }}" width="250" style="border:1px solid #ddd; padding:5px; margin-bottom:15px;">
@endif

{{-- ✅ Show Embedded Photos --}}
@if(!empty($photoCids))
    <p><strong>Photos:</strong></p>
    @foreach($photoCids as $cid)
        <img src="{{ $cid }}" width="200" style="margin:10px; border:1px solid #ddd; padding:5px;">
    @endforeach
@endif

<hr>

<p><strong>Submitted At:</strong> {{ $enquiry->created_at }}</p>

</body>
</html>